<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $depart= Departement::all();
       $titre= "Nos departements";
       return view('depart.index',compact('depart','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre="Ajouter un departement";
        return view('depart.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Departement::create($request->all());
        return redirect()->route('departement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $depart=Departement::find($id);
        $titre="detail du departement";
        return view('depart.show',compact('depart','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $depart=Departement::find($id);
        $titre="detail du departement";
        return view('depart.edit',compact('depart','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $depart=Departement::find($id);
        $depart->update($request->all());
        return redirect()->route('departement.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $depart=Departement::find($id);
        $depart->destroy($id);
        return redirect()->route('departement.index');
    }
}
