<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NegoArt</title>

       <!-- Fonts -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Spirax&display=swap" rel="stylesheet"> 

      
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Nego Art
                </div>
            </div>
            <!--///navbar//-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-me">
                <a class="navbar-brand navAll" href="/">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon" style="backgroundcolor:white;"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link navAll" href="{{ asset('/rules')}}">Les Règles<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link navAll" href="{{ asset('/galleries')}}">Les Galleries<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link navAll" href="{{ asset('/art')}}">Les Oeuvres<span class="sr-only">(current)</span></a>
                        </li>
                    
                    {{-- <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> --}}
                     <li class="nav-item dropdown">
                      <a class="navbar dropdown-toggle navAll nav-connexion" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Connexion
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" onmouseover="this.style.background='goldenrod';this.style.color='white';" onmouseout="this.style.background='rgba(1, 1, 8, 0)';this.style.color='white';">Je suis Galleriste</a>
                        <a class="dropdown-item" href="#" onmouseover="this.style.background='goldenrod';this.style.color='white';" onmouseout="this.style.background='rgba(1, 1, 8, 0)';this.style.color='white';">Je suis Artiste</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" onmouseover="this.style.background='goldenrod';this.style.color='white';" onmouseout="this.style.background='rgba(1, 1, 8, 0)';this.style.color='white';">S'inscrire</a>
                      </div>
                    </li>
                  </ul>
                   <form class="my-2 my-lg-0 search-field">
                    <input class="form-control mr-sm-2" type="search" placeholder="Recherche..." aria-label="Search">
                    <button class="btn btn-outline my-2 my-sm-0" type="submit">Recherche</button>
                  </form>
                </div>
              </nav>
        </div>
        @yield('content')
    </body>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!---Bootstrap--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
