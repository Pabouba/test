@extends('modele')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Adresse</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($depart as $d)
        <tr>
        <th scope="row">{{$d->id}}</th>
        <td>{{$d->nom}}</td>
        <td>{{$d->adresse}}</td>
        <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="{{route('departement.destroy',$d->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Supprimer</button>
            </form>
           
            <a href="{{route('departement.show',$d->id)}}" class="btn btn-warning">Consulter</a>
            <a href="{{route('departement.edit',$d->id)}}" class="btn btn-success">Modifier</a>
          </div></td>
      </tr>  
        @endforeach
       
    </tbody>
  </table>
@endsection