<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorRegistration extends Model
{
    protected $table = 'vendor_modal_registrations';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'business_name',
        'business_type',
        'city',
        'experience',
        'equipment',
        'specialties',
        'portfolio_url',
        'instagram_url',
        'about',
        'status',
    ];
}