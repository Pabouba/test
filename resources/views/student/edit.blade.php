@extends('modele')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
<div class="container ">
    <div class="row">
        <div class="col-md-6 mx-auto shadow-lg p-3 mb-5 bg-body rounded">
    <form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
      @csrf
        <div class="my-3">
            <label for="nm" class="form-label text-capitalize">nom</label>
            <input type="text" class="form-control" id="nm" name="nom"  value="{{$student->nom}}">
          </div>
          <div class="my-3">
            <label for="pr" class="form-label text-capitalize">prenom</label>
            <input type="text" class="form-control" id="pr" name="prenom" value="{{$student->prenom}}">
          </div>
          <div class="my-3">
            <label for="em" class="form-label text-capitalize">email</label>
            <input type="email" class="form-control" id="em" name="email" value="{{$student->email}}">
          </div>
          <div class="my-3">
            <label for="nv" class="form-label text-capitalize">niveau</label>
            <input type="text" class="form-control" id="nv" name="niveau" value="{{$student->niveau}}">
          </div>
          <div class="my-3">
            <label for="nT" class="form-label text-capitalize">nationate</label>
            <input type="text" class="form-control" id="nT" name="nationalite" value="{{$student->nationalite}}">
          </div>
          <div class="my-3">
            <label for="cp" class="form-label text-capitalize">cin/passeport</label>
            <input type="text" class="form-control" id="cp" name="cp" value="{{$student->cp}}">
          </div>
          <div class="my-3">
            <label for="tl" class="form-label text-capitalize">tel</label>
            <input type="text" class="form-control" id="tl" name="tel" value="{{$student->tel}}">
          </div>
          <div class="my-3">
            <label for="exampleFormControlTextarea1" class="form-label text-capitalize">adresse</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="adresse">{{$student->adresse}}</textarea>
          </div>
          <div class="my-3">
            <label for="ch" class="form-label text-capitalize">chemin</label>
            <input type="file" class="form-control" id="ch" name="chemin">
          </div>
          <button type="submit" class="btn btn-dark">Modifier</button>
    </form>
</div>
</div>
</div>
@endsection
