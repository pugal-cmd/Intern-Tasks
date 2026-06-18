<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'specialty', 'portfolio',
        'bio', 'city', 'status', 'featured', 'rating',
        'badge', 'avatar', 'reviews_count',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'rating'   => 'float',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}