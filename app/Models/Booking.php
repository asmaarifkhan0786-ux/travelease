<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_package_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'travel_date',
        'guests',
        'total_amount',
        'status',
    ];

    public function travelPackage()
    {
        return $this->belongsTo(TravelPackage::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}