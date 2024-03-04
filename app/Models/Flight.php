<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        "iata_code",
        "departure_time",
        "arrival_time",
        "departure_location",
        "arrival_location"
    ];

    public function departure_location(){
        return $this->hasOne(Location::class);
    }

    public function arrival_location(){
        return $this->belongsTo(Location::class);
    }

    public function passengers(){
        return $this->belongsToMany(Passenger::class,'passenger_flights');
    }

    public function companies(){
        return $this->belongsToMany(Company::class,'company_flights');
    }
}
