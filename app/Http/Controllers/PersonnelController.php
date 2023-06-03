<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perso= Personnel::all();
        $titre='Nos Personnels';
        return view('personnel.index',compact('perso','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre='Ajouter un Personnel';
        return view('personnel.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $perso=$request->all();
        $perso['chemin']=request()->chemin->store('images');
        Personnel::create($perso);
        return redirect()->route('personnel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perso=Personnel::find($id);
        $titre='Details du personnel' ;
        return view('personnel.show',compact('perso','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perso=Personnel::find($id);
        $titre="L'edition du personnel" ;
        return view('personnel.show',compact('perso','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $perso=Personnel::find($id);
        $perso->update($request->all());
        return redirect()->route('personnel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perso=Personnel::find($id);
        $perso->destroy($id);
        return redirect()->route('personnel.index');
    }
}
