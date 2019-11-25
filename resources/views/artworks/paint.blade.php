@extends('layout')
@section('artwork-paint')
<h2>Peinture Euphorique</h2>

<ul class="">
        <li class="media art-group">
                <img src="img/testoeuvre.jpg" class="img-fluid d-block m-auto" alt="Responsive image">
                <div class="media-body media-test">
                 <ul class="list-li" >
                     <li>Hauteur: 1 mètre </li>
                    <br>
                     <li>Largeur: 50cm mètres</li>
                     <br>
                     <li>Poids : 700kg </li>
                     <br>
                     <li>Matières : gouache</li>
                     <br>
                     <li>Couleurs : bariolées</li>
                     <br>
                     <li>Thèmes : lorem</li>
                     <br>
                     <li>Descriptif : Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, itaque! </li>
                     <br>
                     <li>Auteur : Untel </li>
                     <br>
                     <li>Prix : 3000€ </li>
                 </ul>
                 <a href="javascript:ouvre_popup('{{ asset('/appli')}}')" class="btn btnspecial btnart " style="margin-top:25px;">Négocier cette oeuvre !</a>
                </div>
              </li>
</ul>
<script type="text/javascript">
    function ouvre_popup(page) {
     window.open(page,"nom_popup","menubar=no, status=no; width:100%");
    }
</script>


@endsection