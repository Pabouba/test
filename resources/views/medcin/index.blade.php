@extends('modelep')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Specialite</th>
        <th scope="col">Telephone</th>
        <th scope="col">Photo</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($medcin as $m)
        <tr>
            <th scope="row">{{$m->id}}</th>
            <td>{{$m->nom}}</td>
            <td>{{$m->specialite}}</td>
            <td>{{$m->tel}}</td>
            <td><img src="{{asset('storage/' .$m->chemin)}}" alt="" width="120"></td>
            <td scope="col">
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form action="{{route('medcin.destroy',$m->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
              <a href="{{route('medcin.edit',$m->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              <a href="{{route('medcin.show',$m->id)}}" class="btn btn-success"><i class="fa-solid fa-magnifying-glass-plus"></i></a>
            </div>
          </td>
          </tr>  
        @endforeach
    </tbody>
  </table>
@endsection