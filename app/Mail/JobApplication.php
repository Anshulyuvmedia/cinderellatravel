<?php
// app/Mail/JobApplicationConfirmation.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Application Received - ' . $this->mailData['service_type'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.job-application',
            with: $this->mailData
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
