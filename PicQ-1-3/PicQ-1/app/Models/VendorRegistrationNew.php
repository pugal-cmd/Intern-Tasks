<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorRegistrationNew extends Model
{
    protected $table = 'vendor_registration';

    protected $fillable = [
        'full_name',
        'studio_name',
        'services_provided',
        'price',
        'email',
        'phone',
        'experience',
        'portfolio_links',
        'equipment_details',
        'additional_details',
        'step',
        'completed',
    ];

    protected $casts = [
        'equipment_details' => 'array',
        'completed' => 'boolean',
    ];
}