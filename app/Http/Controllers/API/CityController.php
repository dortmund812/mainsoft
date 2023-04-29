<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return City::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveCityRequest $request)
    {
        City::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'City saved succesfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        return response()->json([
            'status' => true,
            'data' => $city
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        $city->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'City updated succesfully',
            'data' => $city
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return response()->json([
            'status' => true,
            'message' => 'City deleted succesfully'
        ], 200);
    }
}
