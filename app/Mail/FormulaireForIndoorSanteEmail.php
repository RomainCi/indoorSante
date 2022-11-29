<?php

namespace App\Mail;

use App\Models\Formulaire;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormulaireForIndoorSanteEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public Formulaire $formulaire;
    public User $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Formulaire $formulaire,User $user)
    {
        $this->formulaire = $formulaire;
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('no-reply@indoorsante.fr'),
            subject: 'Contact de'.$this->user->lastname,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.FormulaireForIndoorSanteView',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
