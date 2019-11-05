@extends('welcome')
@section('content')
<h2> Je me connecte</h2>

<div class="connect-choice">
        <a href="" class="card-connexion">
            <div class="card" style="width: 16rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Amateur | Acheteur</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div></a>

        <a href="" class="card-connexion">
            <div class="card" style="width: 16rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Galleriste</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        </a>

        <a href="" class="card-connexion">
            <div class="card" style="width: 16rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Artiste Indépendant</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        </a>

</div>

<h2>Inscription</h2>

<a href="{{ asset('/registr')}}" class="btn d-block m-auto btn-inscription">Je m'inscris !</a>
@endsection