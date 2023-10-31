<?php

namespace App\Http\Controllers;

use App\Models\loguin;
use Illuminate\Http\Request;

class LoguinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loguin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, loguin $loguin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(loguin $loguin)
    {
        //
    }
}
