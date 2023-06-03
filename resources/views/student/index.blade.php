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
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Niveau</th>
        <th scope="col">Adresse</th>
        <th scope="col">Photo</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($student as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->nom}}</td>
            <td>{{$s->prenom}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->niveau}}</td>
            <td>{{$s->adresse}}</td>
            <td><img src="{{asset('storage/'.$s->chemin)}}" alt="" width="150"></td>
            <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <form action="{{route('student.destroy',$s->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
              </form>
               
                <a href="{{route('student.show',$s->id)}}" class="btn btn-warning">Consulter</a>
                <a href="{{route('student.edit',$s->id)}}" class="btn btn-success">Modifier</a>
              </div></td>
          </tr>   
        @endforeach
    </tbody>
  </table>
@endsection