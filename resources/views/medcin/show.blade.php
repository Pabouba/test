@extends('modelep')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<div class="card" style="width: 18rem;">
    <img src="{{asset('storage/'.$medcin->chemin)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nom: {{$medcin->nom}}</h5>
      <h5 class="card-title">Prenom: {{$medcin->prenom}}</h5>
      <h5 class="card-title">Email: {{$medcin->email}}</h5>
      <h5 class="card-title">Adresse: {{$medcin->adresse}}</h5>
      <h5 class="card-title">Telephone: {{$medcin->tel}}</h5>
      <h5 class="card-title">Specialite: {{$medcin->specialite}}</h5>
      <a href="{{route('medcin.index')}}" class="btn btn-primary">Retour</a>
    </div>
  </div>
  @endsection