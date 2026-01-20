<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;


class ForgotPassword extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private string $signedUrl;

    /**
     * Create a new message instance.
     */
    public function __construct(
        private User $user
    ) {
        $this->signedUrl = URL::temporarySignedRoute('reset.password', now()->addMinutes(30), ['user' => $this->user]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Forgot Password',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.forgot-password',
            with: [
                'user' => $this->user,
                'signedUrl' => $this->signedUrl
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
