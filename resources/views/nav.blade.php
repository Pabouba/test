<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BFS SCHOOL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departement
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('departement.create')}}">Ajouter un departement</a></li>
              <li><a class="dropdown-item" href="{{route('departement.index')}}">Nos departements</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Personnel
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('personnel.create')}}">Ajouter un personnel</a></li>
              <li><a class="dropdown-item" href="{{route('personnel.index')}}">Nos personnels</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>
        </ul>
        @auth
        Bienvenue : {{Auth::user()->name}}
        <form action="{{route('logout')}}" method="post">
          @csrf
          <button type="submit">Deconnexion</button>
        </form>
        @else
          <a href="{{route('login')}}">Connexion</a>  
        
        @endauth
      </div>
    </div>
  </nav>