<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "document_number",
        "document_type",
    ];

    public function flights(){
        return $this->belongsToMany(Flight::class,'passenger_flights');
    }
}
