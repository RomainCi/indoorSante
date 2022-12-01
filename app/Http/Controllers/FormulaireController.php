<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormulaireRequest;
use App\Jobs\FormulaireDeleteJob;
use App\Jobs\FormulaireVerificationsJob;
use App\Mail\FormulaireForIndoorSanteEmail;
use App\Models\Formulaire;
use App\Models\FormulaireVerifications;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class FormulaireController extends Controller
{
    /**
     * @param StoreFormulaireRequest $request
     * @return JsonResponse
     */
    public function store(StoreFormulaireRequest $request): JsonResponse
    {
        try {
            $userValidate = $request->safe()->except(["check"]);
            $userValidate["token"] = Str::random(52);
            $formulaireVerifications = FormulaireVerifications::create($userValidate);
//            var_dump($formulaireVerifications);
            \Log::debug($formulaireVerifications);
            FormulaireVerificationsJob::dispatch($formulaireVerifications);
            FormulaireDeleteJob::dispatch($formulaireVerifications->id)->delay(now()->addRealMinutes(2));
            return response()->json([
                "message" => "success",
                "db"=>$formulaireVerifications
            ]);
        } catch (Exception $e) {
            dd($e);
        }
    }

    /**
     * @param int $id
     * @param string $token
     * @return View
     */
    public function verificationEmail(int $id, string $token): View
    {
        try {
            $formulaireVerifications = FormulaireVerifications::findOrFail($id);
            if ($formulaireVerifications->token === $token) {
                $user = $formulaireVerifications->attributesToArray();
                $formulaire["content"] = $formulaireVerifications->content;
                unset($user["token"], $user["id"], $user["content"]);
                $userModel = User::where('email', $user['email'])->first();
                if ($userModel === null) {
                    $user = User::create($user);
                    $formulaire["users_id"] = $user->id;
                    $formulaire = Formulaire::create($formulaire);
                    $formulaireVerifications->delete();
                    Mail::to("contact@indoorsante.fr")
                        ->send(new FormulaireForIndoorSanteEmail($formulaire, $user));
                } else {
                    $formulaire["users_id"] = $userModel->id;
                    if ($user["phone"] != $userModel->phone) {
                        $userModel->update([
                            "phone" => $user["phone"]
                        ]);
                    }
                    $formulaire = Formulaire::create($formulaire);
                    $formulaireVerifications->delete();
                    Mail::to("contact@indoorsante.fr")
                        ->send(new FormulaireForIndoorSanteEmail($formulaire, $userModel));
                }
                return view('ResponseEmailView');
            } else {
                dd("error");
            }
        } catch (Exception $e) {
            return view('ErrorView');
        }

    }
}
