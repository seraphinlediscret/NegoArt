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
       <link href="https://fonts.googleapis.com/css?family=Alegreya+SC|Cormorant+Infant&display=swap" rel="stylesheet"> 
       <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet"> 

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
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-me">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon" style="backgroundcolor:white;"></span>
                </button>
               <a class="navbar-brand navAll navMain" href="/">Accueil</a>
                <a href="{{ asset('/connexion')}}" class="img-connexion"><img src="img/icon/usericon.png" alt=""></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    
                      <li class="nav-item active">
                          <a class="nav-link navAll" href="{{ asset('/art')}}">Les Oeuvres<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                          <a class="nav-link navAll" href="{{ asset('/rules')}}">Comment ça marche ?<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                          <a class="nav-link navAll" href="{{ asset('/rules')}}">Règles et conditions d'utilisation<span class="sr-only">(current)</span></a>
                        </li> 
                        
                        <li class="nav-item active connect-block">
                          <a class="nav-link navAll connect-nav " href="{{ asset('/connexion')}}">Connexion/Inscription<span class="sr-only">(current)</span></a>
                        </li> 
                  </ul>
                </div>
              </nav>

              {{-- search navbar --}}
              {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-search" id="nav-me ">
                <form class="my-2 my-lg-0 search-field" style="padding: 10px;">
                  <input class="form-control mr-sm-2" type="search" placeholder="Recherche..." aria-label="Search">
                  <button class="btn btn-outline my-2 my-sm-0" type="submit">Recherche</button>
                </form>
              </nav> --}}

        <div class="second-body">
        @yield('content')
        </div>

        <footer>
          <div class="footer-content">
            <div class="infos-footer f-one">
              <a href="{{ asset('/rules')}}" class="footer-web">Conditions d'utilisation</a>
              <a href="" class="footer-web">Mentions légales</a>
              <a href="" class="footer-web">lorem</a>
              <a href="" class="footer-web">lorem</a>
            </div>

            <div class="infos-footer f-two">
              <a href="" class="footer-web">FAQ</a>
              <a href="" class="footer-web">Guide d'utilisation</a>
              <a href="" class="footer-web">Pourquoi négocier ?</a>
              <a href="" class="footer-web">lorem</a>
            </div>

            <div class="infos-footer f-three">
              <a href="" class="footer-web">Nous contacter</a>
              <a href="" class="footer-web">Nos partenaires</a>
              <a href="" class="footer-web">NegoPricing</a>
              <a href="" class="footer-web">Qui sommes nous ?</a>
            </div>
          </div>
        </footer>

    </body>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!---Bootstrap--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
