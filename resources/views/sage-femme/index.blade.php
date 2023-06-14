@extends('modelep')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($sage as $s)
      <tr>
        <th scope="row">{{$s->id}}</th>
        <td>{{$s->nom}}</td>
        <td>{{$s->prenom}}</td>
        <td><img src="{{asset('storage/'.$s->chemin)}}" alt="" width="120"></td>
      </tr>  
      @endforeach
    </tbody>
  </table>
@endsection