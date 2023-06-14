@extends('modelep')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
<form action="{{route('medcin.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nm" class="form-label">Nom</label>
      <input type="text" class="form-control" id="nm" name="nom">
    </div>
    <div class="mb-3">
      <label for="pr" class="form-label">Prenom</label>
      <input type="text" class="form-control" id="pr" name="prenom">
    </div>
    <div class="mb-3">
        <label for="em" class="form-label">Email</label>
        <input type="email" class="form-control" id="em" name="email">
      </div>
      <div class="mb-3">
        <label for="ad" class="form-label">Adresse</label>
        <textarea name="adresse" id="ad" class="form-control" ></textarea>
      </div>
      <div class="mb-3">
        <label for="tl" class="form-label">Telephone </label>
        <input type="text" class="form-control" id="tl" name="tel">
      </div>
      <div class="mb-3">
        <label for="sp" class="form-label">Specialite</label>
        <input type="text" class="form-control" id="sp" name="specialite">
      </div>
      <div class="mb-3">
        <label for="ch" class="form-label">Photo</label>
        <input type="file" class="form-control" id="ch" name="chemin">
      </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
</div>
</div>
@endsection