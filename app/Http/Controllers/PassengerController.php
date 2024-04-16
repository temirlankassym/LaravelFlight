<?php

namespace App\Http\Controllers;
use App\Models\Passenger;
use App\Http\Resources\PassengerResource;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();

        return response()->json([
            'data' => PassengerResource::collection($passengers)
        ]);
    }
}
