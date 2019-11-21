@extends('layout')
@section('gallery')
<h2>Connexion en tant que galleriste</h2>

<div class="tablebackselfer">
<table class="table-one">
<thead>
    <tr class="text-white">
      <th scope="col" class=" "><div class="head-table">N°</div></th>
      <th scope="col" class=" "><div class="head-table">Illustration</div></th>
      <th scope="col" class=" "><div class="head-table">Hauteur</div></th>
      <th scope="col" class=" "><div class="head-table">Largeur</div></th>
      <th scope="col" class=" "><div class="head-table">Poids</div></th>
      <th scope="col" class=" "><div class="head-table">Matière</div></th>
      <th scope="col" class=" "><div class="head-table">Couleur</div></th>
      <th scope="col" class=" "><div class="head-table">Thèmes</div></th>
      <th scope="col" class=" "><div class="head-table">Descriptif</div></th>
      <th scope="col" class=" "><div class="head-table">Auteur</div></th>
    </tr>
  </thead>

  <tbody id="theTABLE">
        <tr>
          <td>
         <div>
        N° BDD
        </div>
          </td>

          <td>
         <div>
        Illustration BDD
        </div>
         </td>

          <td>
          <div>
        Hauteur BDD
         </div>
         </td>

          <td>
          <div>
        Largeur BDD
          </div>
          </td>

          <td>
         <div>
        Poids BDD
         </div>
         </td>

          <td>
         <div>
        Matière BDD
         </div>
         </td>

          <td>
         <div>
        Couleur BDD
         </div>
         </td>

          <td>
          <div>
        thèmes BDD
         </div>
         </td>

          <td>
          <div>
        Descriptif BDD
          </div>
          </td>

           <td>
           <div>
        Auteur BDD
          </div>
          </td>
</tr>


  </tbody>
</table>

<table class="table-two">
<thead>
        <tr>
                <th scope="col" class=" "><div class="head-table">Prix de vente négociable</div></th>
                <th scope="col" class=" "><div class="head-table">Prix maximum</div></th>
                <th scope="col" class=" "><div class="head-table">Nombre de tours</div></th>
                <th scope="col" class=" "><div class="head-table">Durée</div></th>
                <th scope="col" class=" "><div class="head-table">Nombre de trappes</div></th>
                <th scope="col" class=" "><div class="head-table">Taux de trappes</div></th>
            </tr>
</thead>

<tbody id="theTABLE">
<tr>
        <td>
        <div>
       Prix de vente négociable BDD
        </div>
        </td>
      
        <td>
        <div>
        Prix maximum BDD
        </div>
        </td>
      
        <td>
        <div>
        Nombre de tours BDD
        </div>
        </td>
      
        <td>
        <div>
        Durée BDD
        </div>
        </td>
      
        <td>
        <div>
        Nombre de trappes BDD
        </div>
        </td>
      
        <td>
        <div>
        Taux de trappes BDD
        </div>
        </td>       
</tr>
</tbody>

</table>
</div>
<a href="{{ asset('/create')}}" class="btn btn-danger d-block m-auto" style="width: 15%;">Créer une oeuvre!</a>
@endsection