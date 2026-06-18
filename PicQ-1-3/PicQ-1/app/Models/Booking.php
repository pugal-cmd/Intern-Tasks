<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'service_id', 'creator_id',
        'location', 'scheduled_at', 'notes', 'status', 'booking_ref',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function creator()
    {
        return $this->belongsTo(Creator::class);
    }
}