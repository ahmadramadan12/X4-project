<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BmiHistory;

class BmiHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bmi_histories=BmiHistory::all();
        return response()->json($bmi_histories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'member_id' => 'required',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);
    
        // Calculate BMI (weight in kg / height in m^2)
        $bmi = $request->weight / (($request->height / 100) ** 2);
    
        // Save the BMI history record
        BmiHistory::create([
            'member_id' => $request->member_id,
            'weight' => $request->weight,
            'height' => $request->height,
            'bmi' => $bmi,
        ]);
    
        return response()->json(['message' => 'BMI history recorded successfully']);
    }
    

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
