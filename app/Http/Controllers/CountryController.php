<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryStoreRequest;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $countries = Country::all();

        return response()->json([
            "data" => CountryResource::collection($countries)
        ]);
    }

    public function store(CountryStoreRequest $request){
        $company = Country::create($request->validated());

        return response()->json([
            "message" => "Country Created",
            "data" => new CountryResource($company)
        ],201);
    }

    public function show(Country $country){
        return response()->json([
            "message" => "Success",
            "data" => new CountryResource($country)
        ],200);
    }

    public function update(Country $country, CountryStoreRequest $request){
        $country->update($request->validated());

        return response()->json([
            "message" => "Success",
            "data" => new CountryResource($country)
        ],200);
    }

    public function destroy(Country $country){
        $country->delete();

        return response()->json([
            "message" => "Success",
            "data" => []
        ],204);
    }
}
