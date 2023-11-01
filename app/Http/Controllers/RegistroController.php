<?php

namespace App\Http\Controllers;

use App\Models\registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('registro');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        registro::create([
            'name'=>$request->input('name'),
            'nickname'=> $request-> input('nickname')
        ]);
           
            $registrar = registro::create($request->validated());
        auth()->login($registrar);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(registro $registro)
    {
        //
    }
}
