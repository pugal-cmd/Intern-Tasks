<?php

namespace App\Mail;

use App\Models\VendorRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VendorRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public VendorRegistration $vendor) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Vendor Registration - ' . $this->vendor->business_name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.vendor-registration',
        );
    }
}