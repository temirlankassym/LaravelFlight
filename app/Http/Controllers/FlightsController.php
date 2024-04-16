<?php

namespace App\Http\Controllers;

use App\Http\Resources\FlightsResource;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Requests\FlightStoreRequest;

class FlightsController extends Controller
{
    public function index(){
        $flights = Flight::all();

        return response()->json([
            'data' => FlightsResource::collection($flights)
        ]);
    }
    public function store(FlightStoreRequest $request)
    {
        $flight = Flight::create($request->validated());

        return response()->json([
            'data' => new FlightResource($flight)
        ], Response::HTTP_CREATED);
    }
}
