@extends('modelep')
@section('titre')
    {{$titre}}
@endsection
@section('contenu')
    <div class="container">
        <div class="row ">
            <div class="col-md-6 mx-auto shadow-lg p-3 mb-5 bg-body rounded ">
                <form action="{{route('sage-femme.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nm" class="form-label text-capitalize">nom</label>
                    <input type="text" class="form-control" id="nm" name="nom">
                  </div>
                  <div class="mb-3">
                    <label for="pr" class="form-label text-capitalize">prenom</label>
                    <input type="text" class="form-control" id="pr" name="prenom">
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-capitalize">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Adresse</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="adresse"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="tl" class="form-label text-capitalize">telephone</label>
                    <input type="text" class="form-control" id="tl" name="tel">
                  </div><div class="mb-3">
                    <label for="fc" class="form-label text-capitalize">fonction</label>
                    <input type="text" class="form-control" id="fc" name="fonction">
                  </div>
                  <div class="mb-3">
                    <label for="chnm" class="form-label text-capitalize">Image</label>
                    <input type="file" class="form-control" id="ch" name="chemin">
                  </div>
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection