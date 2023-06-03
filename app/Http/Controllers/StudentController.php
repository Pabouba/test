<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $student= Student::all();
       $titre ="Nos etudiants ";
       return view('student.index',compact('student','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre="Ajouter un etudiant";
        return view('student.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data=$request->all();
        $data['chemin']=request()->chemin->store('images');
        Student::create($data);
       return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);
        $titre="Consulter l'etudiant";
        return view('student.show',compact('student','titre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        $titre="L'edition de l'etudiant";
        return view('student.edit',compact('student','titre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student=Student::find($id);
        $student->update($request->all());
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=Student::find($id);
        $student->destroy($id);
        return redirect()->route('student.index');

        
    }
}
