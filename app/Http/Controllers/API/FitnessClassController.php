<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FitnessClass;
use Illuminate\Http\Request;

class FitnessClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fitnessclasses=fitnessclass::all();
        return response()->json($fitnessclasses);
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
        $new_fitnessclass = fitnessclass::create($request->all());
        return response() ->json([                                                         //save in the database
          'status'=>true,
          'message'=>"New class is created successfully",
          'data'=>$new_fitnessclass]);
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
