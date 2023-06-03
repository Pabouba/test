@extends('modele')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto shadow-lg p-3 mb-5 bg-body rounded">
                <form action="{{route('departement.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nm" class="form-label text-capitalize">nom</label>
                        <input type="text" class="form-control" id="nm" name="nom" value="{{$depart->nom}}" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-capitalize">adresse</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="adresse" >{{$depart->adresse}}</textarea>
                      </div>
                      <button type="submit">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection