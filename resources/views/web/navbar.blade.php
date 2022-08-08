<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand mr-auto" href="/" style="margin-left: 15px; align-content: center">
          <img src="{{ asset('img/logo-fundasam.png') }}" alt="" width="30" class="d-inline-block align-text-top">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse container-fluid justify-content-center" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="/perfil" ><i class="fas fa-user"></i>&nbsp;&nbsp;Mi perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cursos"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;Foro &nbsp; </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cursos"><i class="fa-solid fa-bookmark"></i>&nbsp;&nbsp;Mis cursos</a>
            </li>
          </ul>
          <ul class="navbar-nav mr-auto">
            <li class="dropdown">
              <a class="nav-link navbar-brand perfil dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
               <img src="{{ asset('img/user.svg') }}" alt="" width="45" height="45" class="d-inline-block">
               {{ Auth::user()->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 100%">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                       <i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión 
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
    </div>        
</nav>