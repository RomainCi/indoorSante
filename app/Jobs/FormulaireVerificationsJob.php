<?php

namespace App\Jobs;

use App\Mail\FormulaireVerificationsEmail;
use App\Models\FormulaireVerifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class FormulaireVerificationsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The formulaireVerifications instance.
     *
     * @var FormulaireVerifications
     */
    protected FormulaireVerifications $formulaireVerifications;

    /**
     * Create a new job instance.
     * @param FormulaireVerifications $formulaireVerifications
     *
     * @return void
     */
    public function __construct(FormulaireVerifications $formulaireVerifications)
    {
        $this->formulaireVerifications = $formulaireVerifications;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        Mail::to($this->formulaireVerifications->email)
            ->send(new FormulaireVerificationsEmail($this->formulaireVerifications->token, $this->formulaireVerifications->lastname, $this->formulaireVerifications->id));
    }
}
