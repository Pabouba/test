@extends('modele')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<div class="card" style="width: 18rem;">
    <img src="{{asset('storage/'.$student->chemin)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nom: {{$student->nom}}</h5>
      <h5 class="card-title">Prenom: {{$student->prenom}}</h5>
      <h5 class="card-title">Email: {{$student->email}}</h5>
      <h5 class="card-title">Niveau: {{$student->niveau}}</h5>
      <h5 class="card-title">Nationalite: {{$student->nationalite}}</h5>
      <h5 class="card-title">Cin/Passeport: {{$student->cp}}</h5>
      <h5 class="card-title">Telephone: {{$student->tel}}</h5>
      <h5 class="card-title">Adresse: {{$student->adresse}}</h5>
      <a href="{{route('student.index')}}" class="btn btn-primary">Retour</a>
    </div>
  </div>
@endsection