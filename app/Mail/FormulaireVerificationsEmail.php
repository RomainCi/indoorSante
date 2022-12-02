<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use phpDocumentor\Reflection\Types\Integer;

class FormulaireVerificationsEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $token;
    public string $lastname;
    public int $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token, $lastname, $id)
    {
        $this->token = $token;
        $this->lastname = $lastname;
        $this->id = $id;
    }

    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('no-reply@rc-dev.pro'),
            subject: 'Formulaire Verifications Email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return Content
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.FormulaireVerificationsView',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments(): array
    {
        return [];
    }
}
