@extends('layout')
@section('allartsworks')

<h2>Toutes les oeuvres</h2>

<div class="d-flex" style="flex-wrap:wrap; justify-content: center;">

    

        <a href="{{ asset('/textile')}}" class="">
            <div class="containerart">
            <div></div>
            <img src="img/textile.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
            <div class="middle">
            <div class="textart">Textile</div>
            </div>
            </div>
        </a>

        <a href="{{ asset('/sculpture')}}" class="">
            <div class="containerart">
            <img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
            <div class="middle">
            <div class="textart">Sculpture</div>
            </div>
            </div>
        </a>

        <a href="{{ asset('/paint')}}" class="paint">
            
            <div class="containerart">
            <img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
            <div class="middle">
            <div class="textart">Peinture</div>
            </div>
            <div class="btn btn-warning text-center d-block m-auto artworknegocing">Oeuvre à négocier !</div>
            </div> 
        </a>

@foreach ($artworks as $artwork )
        <div class="containerart">
            <img src="{{asset('storage/'.$artwork->picture)}}" alt="image de l'oeuvre" class="img-circle img-responsive allimg">
                <div class="middle">
                <div class="textart">{{$artwork->theme}}</div>
                </div>
        </div>
@endforeach         
</div>
@endsection
