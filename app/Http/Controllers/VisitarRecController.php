<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use Illuminate\Http\Request;

class VisitarRecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('visitReceta');
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
// VisitarRecController.php

public function like(Request $request, string $id)
{
    $receta = Recetas::findOrFail($id);

    // Verificar si el usuario ya ha dado like
    if (!$receta->likes->contains('user_id', auth()->id())) {
        // Incrementar el contador de likes en la receta
        $receta->likes()->create(['user_id' => auth()->id()]);
        $receta->increment('likes');
    }

    // Puedes redirigir a la misma página o a otra después de dar like
    return redirect('/home')->back()->with('success', 'Receta Liked!');
}

}
