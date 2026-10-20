<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TravelPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'destination',
        'description',
        'price',
        'duration_days',
        'image',
        'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}