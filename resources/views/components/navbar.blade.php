<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      {{-- <li class="nav-item active">
        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      </li> --}}
      <li class="nav-item active">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('article.create')}}">crea il tuo articolo</a>
      </li>
      @guest   
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">registrati</a>
      </li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Benvenuto {{Auth::user()->name}}
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
            @csrf
          </form>
        </ul>
      </li>
      @endguest
    </div>
  </nav>