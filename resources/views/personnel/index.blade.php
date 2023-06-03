@extends('modele')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Specialite</th>
            <th>Telephone</th>
            <th>Adresse</th>
            <th>Photo</th>
            <th>Departement</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($perso as $p)
           <tr>
            <th>{{$p->id}}</th>
            <th>{{$p->nom}}</th>
            <th>{{$p->prenom}}</th>
            <th>{{$p->email}}</th>
            <th>{{$p->specialite}}</th>
            <th>{{$p->telephone}}</th>
            <th>{{$p->adresse}}</th>
            <th><img src="{{asset('storage/'.$p->chemin)}}" alt="" width="120"></th>
            <th>{{$p->departement_id}}</th>
            <th><div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form action="{{route('personnel.destroy',$p->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                
                <A href="{{route('personnel.edit',$p->id)}}" class="btn btn-warning">Modifier</A>
                <a href="{{route('personnel.show',$p->id)}}" class="btn btn-success">Right</button>
              </div></th>
            </tr> 
        @endforeach
    </tbody>
  </table>
@endsection