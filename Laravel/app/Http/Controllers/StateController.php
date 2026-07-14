<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return State::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'state_name' => 'required',
            'state_code' => 'required',
            'country' => 'required',
        ]);

        $state = State::create($request->all());

        return response()->json([
            'message' => 'state add the successfully',
            'data' => $state,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(State $id)
    {
        return State::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $id)
    {
        $state = State::findOrFail($id);
        $state->update($request->all());

        return response()->json([
            'message' => 'State Updated Successfully',
            'data' => $state
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $id)
    {
        $state = State::findOrFail($id);
        $state->delete();
        return response()->json([
            'message' => 'State Deleted Successfully'
        ]);
    }
}
