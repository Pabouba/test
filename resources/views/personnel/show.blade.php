@extends('modele')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<div class="card" style="width: 18rem;">
    <img src="{{asset('storage/'.$perso->chemin)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nom :{{$perso->nom}}</h5>
      <h5 class="card-title">Prenom :{{$perso->prenom}}</h5>
      <h5 class="card-title">Email :{{$perso->email}}</h5>
      <h5 class="card-title">Specialite :{{$perso->specialite}}</h5>
      <h5 class="card-title">Tel :{{$perso->tel}}</h5>
      <h5 class="card-title">Adresse :{{$perso->adresse}}</h5>
      <a href="{{route('personnel.index')}}" class="btn btn-primary">Retour</a>
    </div>
  </div>
@endsection