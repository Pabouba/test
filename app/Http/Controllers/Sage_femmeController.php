<?php

namespace App\Http\Controllers;

use App\Models\Sage_femme;
use Illuminate\Http\Request;

class Sage_femmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $sage=Sage_femme::all();
       $titre="nos sage-femmes";
       return view('sage-femme.index',compact('sage','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre="Ajouter une Sage-femme";
        return view('sage-femme.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'email' => 'required|unique:sage-femmes|email',
            'nom' => 'required',
            'tel' => 'required',
        ]);
        $data=$request->all();
        $data['chemin']=request()->chemin->store('images');
        Sage_femme::create($data);
        return redirect()->route('sage-femme.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $sage=Sage_femme::find($id);
       $titre="details du sage-femme ";
       return view('sage-femme.show',compact('sage','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sage=Sage_femme::find($id);
        $titre="modifications des données du sage-femme ";
        return view('sage-femme.edit',compact('sage','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sage=Sage_femme::find($id);
        $sage->update($request->all());
        return view('sage-femme.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        $sage=Sage_femme::find($id);
        $sage->destroy();
        return view('sage-femme.destroy '); 
    }
}
