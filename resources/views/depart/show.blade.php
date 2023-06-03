@extends('modele')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
    <ul>
        <li>
            Nom du Departement : {{$depart->nom}}
        </li>
        <li>
            Adresse du Departement : {{$depart->adresse}}
        </li>
    </ul>
@endsection