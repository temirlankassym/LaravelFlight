<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'iata_code'];

    public function company_flights(){
        return $this->belongsTo(CompanyFlight::class);
    }
}
