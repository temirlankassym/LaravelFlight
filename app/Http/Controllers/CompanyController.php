<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::all();

        return response()->json([
            "message"=>"Success",
            "data" => CompanyResource::collection($companies)
        ],200);
    }

    public function store(CompanyStoreRequest $request){
        $company = Company::create($request->validated());

        return response()->json([
            "message" => "Company Created",
            "data" => new CompanyResource($company)
        ],201);
    }

    public function show(Company $company){
        return response()->json([
            "message" => "Success",
            "data" => new CompanyResource($company)
        ],200);
    }

    public function update(Company $company, CompanyUpdateRequest $request){
        $company->update($request->validated());

        return response()->json([
            "message" => "Success",
            "data" => new CompanyResource($company)
        ],200);
    }

    public function destroy(Company $company){
        $company->delete();

        return response()->json([
            "message" => "Success",
            "data" => []
        ],204);
    }
}
