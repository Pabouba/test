<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fil=Filiere::all();
        $titre='Nos filieres';
        return view('filieres.index',compact('fil','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre='Ajouter une filiere';
        return view('filieres.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Filiere::create($request->all());
        return redirect()->route('filiere.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fil=Filiere::find($id);
        $titre='Details du filiere';
        return view('filieres.show',compact('fil','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fil=Filiere::find($id);
        $titre='Modifier le filiere';
        return view('filieres.edit',compact('fil','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fil=Filiere::find($id);
        $fil->update($request->all());
        return redirect()->route('filiere.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fil=Filiere::find($id);
        $fil->destroy($id);
        return redirect()->route('filiere.index');
    }
}
