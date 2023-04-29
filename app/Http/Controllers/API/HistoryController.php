<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveHistoryRequest;
use App\Http\Requests\UpdateHistoryRequest;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return History::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveHistoryRequest $request)
    {
        History::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'History saved succesfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        return response()->json([
            'status' => true,
            'data' => $history
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHistoryRequest $request, History $history)
    {
        $history->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'History updated succesfully',
            'data' => $history
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        $history->delete();
        return response()->json([
            'status' => true,
            'message' => 'History deleted succesfully'
        ], 200);
    }
}
