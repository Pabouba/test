@extends('modele')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto shadow-lg p-3 mb-5 bg-body rounded">
                <form action="{{route('personnel.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <label for="nm" class="form-label text-capitalize">nom</label>
                        <input type="text" class="form-control" id="nm" name="nom">
                      </div>
                      <div class="my-3">
                        <label for="pr" class="form-label text-capitalize">prenom</label>
                        <input type="text" class="form-control" id="pr" name="prenom">
                      </div>
                      <div class="my-3">
                        <label for="em" class="form-label text-capitalize">email</label>
                        <input type="email" class="form-control" id="em" name="email">
                      </div>
                      <div class="my-3">
                        <label for="tl" class="form-label text-capitalize">specialite</label>
                        <input type="text" class="form-control" id="nv" name="specialite">
                      </div>
                      <div class="my-3">
                        <label for="ad" class="form-label text-capitalize">adresse</label>
                        <textarea name="adresse" id="ad" cols="30" class="form-control" ></textarea>
                      </div>
                      <div class="my-3">
                        <label for="nv" class="form-label text-capitalize">telephone</label>
                        <input type="text" class="form-control" id="tl" name="tel">
                      </div>
                      <div class="my-3">
                        <label for="ch" class="form-label text-capitalize">photo</label>
                        <input type="file" class="form-control" id="ch" name="chemin">
                      </div>
                     <div class="my-3">
                        <label for="depart" class="form-label text-capitalize">Departement :</label>
                        <select name="departement_id" id="depart" class="form-select">
                            @foreach ($depart as $d)
                             <option value="{{$d->id}}">{{$d->nom}}</option>   
                            @endforeach
                        </select>
                      </div>
                      <button type="submit">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection