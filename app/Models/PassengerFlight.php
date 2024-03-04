<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerFlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'passenger_id',
        'flight_id',
        'class_type'
    ];

    public function passenger(){
        return $this->belongsTo(Passenger::class);
    }

    public function flights(){
        return $this->belongsTo(Flight::class);
    }
}
