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
    public function store(Request $request, $memberId)
    {
        $validated = $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        // Calculate BMI
        $bmi = $validated['weight'] / ($validated['height'] * $validated['height']);

        // Save BMI history
        $bmiRecord = BmiHistory::create([
            'member_id' => $memberId,
            'weight' => $validated['weight'],
            'height' => $validated['height'],
            'bmi' => $bmi,
        ]);

        return response()->json(['message' => 'BMI record created successfully!', 'bmi' => $bmiRecord]);
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
