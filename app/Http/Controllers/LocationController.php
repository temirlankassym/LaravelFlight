<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationStoreRequest;
use App\Http\Requests\LocationUpdateRequest;
use App\Http\Resources\LocationResource;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations = Location::all();

        return response()->json([
           "data" => LocationResource::collection($locations)
        ]);
    }

    public function store(LocationStoreRequest $request){
        $location = Location::create($request->validated());

        return response()->json([
            "message" => "Location Created",
            "data" => new LocationResource($location)
        ],201);
    }

    public function show(Location $location){
        return response()->json([
            "message" => "Success",
            "data" => new LocationResource($location)
        ],200);
    }

    public function update(Location $location, LocationUpdateRequest $request){
        $location->update($request->validated());

        return response()->json([
            "message" => "Success",
            "data" => new LocationResource($location)
        ],200);
    }

    public function destroy(Location $location){
        $location->delete();

        return response()->json([
            "message" => "Success",
            "data" => []
        ],204);
    }
}
