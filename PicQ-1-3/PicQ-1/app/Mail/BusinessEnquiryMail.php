<?php

namespace App\Mail;

use App\Models\BusinessEnquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BusinessEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    public function __construct(BusinessEnquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this->subject('Business Enquiry Confirmation - PicQ')
                    ->view('emails.business-enquiry')
                    ->with([
                        'enquiry' => $this->enquiry
                    ]);
    }
}