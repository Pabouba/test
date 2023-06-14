<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center text-primary">Ajouter une Filiere</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto shadow-lg p-3 mb-5 bg-body rounded">
                <form action="{{route('filiere.update',$fil->id)}}" method="post">
                @csrf
                <div class="mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" value="{{$fil->nom}}">
                </div>
               <div class="mt-3">
                <button type="submit">Ajouter</button>
               </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>