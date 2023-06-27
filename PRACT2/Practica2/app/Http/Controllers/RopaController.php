<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ropa;

class RopaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vista= Ropa::all();
        return response()->json($vista,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $package = new Ropa(
        [
            'marca'=> $request->get('marca'),
            'temporada'=> $request->get('temporada'),
            'categoria'=> $request->get('categoria'),
            'talla'=> $request->get('talla'),
            'stock'=> $request->get('stock'),
            'precio'=> $request->get('precio')
        ]
       );
       $package->save();
       return response()->json($package,200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $history = Ropa::find($id);
        return response()->json($history,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = Ropa::find($id);
        $record->marca=$request->get('marca');
        $record->temporada=$request->get('temporada');
        $record->categoria=$request->get('categoria');
        $record->talla=$request->get('talla');
        $record->stock=$request->get('stock');
        $record->precio=$request->get('precio');
        $record->save();
        return response()->json($record,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detecte = Ropa::find($id);
        $detecte->delete();
        return response()->json($detecte,200);
    }
}
