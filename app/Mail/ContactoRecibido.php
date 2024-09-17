<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactoRecibido extends Mailable
{
    use Queueable, SerializesModels;

    private $contacto;

    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('progra4-2024@umes.incodemode.com', __('mail.signature', ['app_name' => config('app.name')])),
            to: [new Address($this->contacto['email'], $this->contacto['nombre'])],
            replyTo: [new Address('barqueromauricio@umes.edu.gt', 'Luis')],
            subject: __('mail.success_message')
        );
    }
    
    public function content(): Content
    {
        return new Content(
            view: 'emails.contactado',
            with: [
                'nombre' => $this->contacto['nombre'],
                'cuerpo' => __('mail.body'),
                'despedida' => __('mail.farewell'),
                'firma' => __('mail.signature', ['app_name' => config('app.name')]),
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