<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
      "name","code","country_id",
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function flightsDeparture(){
        return $this->hasMany(Flight::class,'departure_location');
    }

    public function flightsArrival(){
        return $this->hasMany(Flight::class,'arrival_location');
    }
}
