<?php

namespace App\Http\Controllers;

use App\Http\Resources\FlightsResource;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index(){
        $flights = Flight::all();

        return response()->json([
            'data' => FlightsResource::collection($flights)
        ]);
    }
}
