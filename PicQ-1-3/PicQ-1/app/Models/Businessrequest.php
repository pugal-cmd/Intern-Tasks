<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'services_required',
        'preferred_services',
        'budget',
        'notes',
    ];
}