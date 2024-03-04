<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'flight_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function flights(){
        return $this->belongsTo(Flight::class);
    }
}
