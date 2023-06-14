<?php

namespace App\Http\Controllers;

use App\Models\Medcin;
use Illuminate\Http\Request;

class MedcinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medcin=Medcin::all();
        $titre="Nos medecins ";
        return view('medcin.index',compact('medcin','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre="Ajouter un nouveau medecin";
        return view('medcin.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            'email' => 'required|unique:medcins|email',
            'tel' => 'required|unique:medcins',
        ]);
        $data=$request->all();
        $data['chemin']=$request->chemin->store('images');
        Medcin::create($data);
        return redirect()->route('medcin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medcin=Medcin::find($id);
        $titre="Details du medecin";
        return view('medcin.show',compact('medcin','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medcin=Medcin::find($id);
        $titre="Modification des données du medecin";
        return view('medcin.edit',compact('medcin','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medcin=Medcin::find($id);
        $medcin->update($request->all());
        return redirect()->route('medcin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medcin=Medcin::find($id);
        $medcin->destroy($id);
        return redirect()->route('medcin.index');
    }
}
