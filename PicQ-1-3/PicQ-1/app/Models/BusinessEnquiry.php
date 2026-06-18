<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessEnquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email', 
        'mobile',
        'services_required',
        'budget',
        'notes'
    ];
}