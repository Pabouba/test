<!DOChref html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($fil as $f)
            <tr>
                <th scope="row">{{$f->id}}</th>
                <td>{{$f->nom}}</td>
                <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form action="{{route('filiere.destroy',$f->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit " class="btn btn-danger">Supprimer</button>
                  </form>
                  <a href="{{route('filiere.edit',$f->id)}}" class="btn btn-warning">Modifier</a>
                  <a href="{{route('filiere.show',$f->id)}}" class="btn btn-success">Consulter</a>
                </div>
              </td>
              </tr>   
            @endforeach
          
        </tbody>
      </table>
</body>
</html>