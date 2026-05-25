<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ProductDetailsMail extends Mailable
{
    public $user;
    public $product;

    public function __construct($user, $product)
    {
        $this->user = $user;
        $this->product = $product;
    }

    public function build()
    {
        return $this->subject('Selected Product Details')
            ->view('emails.product-details');
    }
}
