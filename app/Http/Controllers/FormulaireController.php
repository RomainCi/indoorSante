<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormulaireRequest;
use App\Jobs\FormulaireVerificationsJob;
use App\Mail\FormulaireForIndoorSanteEmail;
use App\Models\Formulaire;
use App\Models\FormulaireVerifications;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
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
            FormulaireVerificationsJob::dispatch($formulaireVerifications);
            return response()->json([
                "message" => "success"
            ]);
        } catch (Exception $e) {
            dd($e);
        }
    }

    /**
     * @param int $id
     * @param string $token
     * @return \Illuminate\Contracts\View\View
     */
    public function verificationEmail(int $id, string $token): \Illuminate\Contracts\View\View
    {
        try {
            $formulaireVerifications = FormulaireVerifications::findOrFail($id);
            if ($formulaireVerifications->token === $token) {
                $user = $formulaireVerifications->attributesToArray();
                $formulaire["content"] = $formulaireVerifications->content;
                unset($user["token"], $user["id"], $user["content"]);
                $user = User::create($user);
                $formulaire["users_id"] = $user->id;
                $formulaire = Formulaire::create($formulaire);
                $formulaireVerifications->delete();
                Mail::to("contact@indoorsante.fr")
                    ->send(new FormulaireForIndoorSanteEmail($formulaire,$user));
                return View::make("sendMessage");
            } else {
                dd("pasoki");
            }
        } catch (Exception $e) {
            dd($e);
        }

    }
}
