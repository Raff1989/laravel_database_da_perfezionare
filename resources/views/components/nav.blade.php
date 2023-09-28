<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse nav d-flex justify-content-start  navbar-collapse" id="navbarNavDropdown">
      
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('Homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('EcoSistemi')}}">Ecosistemi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Specie Animale
          </a>
          <ul class="dropdown-menu dp">
            <li><a class="dropdown-item text-white" href="/Carnivori">Carnivori</a></li>
            <li><a class="dropdown-item text-white" href="/Erbivori">Erbivori</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div>
      <div class="dropdown me-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-regular fa-circle-user"></i>
          @auth
          {{Auth::user()->name}}
          @endauth
        </button>
        <ul class="dropdown-menu">
          @guest
          <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
          <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          @else
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <li><button type="submit" class="dropdown-item">Logout</button></li>
          </form>
          </ul>
      </div>
          @endguest
    </div>
  </div>
</nav>