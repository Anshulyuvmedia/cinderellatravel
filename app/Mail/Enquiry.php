<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class Enquiry extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $recipientType; // 'admin' or 'customer'

    /**
     * Create a new message instance.
     */
    public function __construct($data, $recipientType = 'admin')
    {
        $this->data = $data;
        $this->recipientType = $recipientType;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->recipientType === 'admin' 
            ? "New Tour Enquiry from {$this->data['name']}" 
            : "We Received Your Tour Enquiry - {$this->data['subject']}";

        return new Envelope(
            from: new Address('deepaknogia.yuvmedia@gmail.com', 'Lamaira Travel'),
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiry',
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
