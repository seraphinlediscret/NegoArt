@extends('layout')
@section('gallery')
<h2>Historique des oeuvres</h2>

<div class="tablebackselfer">
<table class="table-one">
<thead class="thead-back">
    <tr class="text-white trback">
      <th scope="col" class="thback"><div class="head-table">N°</div></th>
      <th scope="col" class="thback"><div class="head-table">Titre de l'oeuvre</div></th>
      <th scope="col" class="thback"><div class="head-table">Illustration</div></th>
      <th scope="col" class="thback"><div class="head-table">Hauteur</div></th>
      <th scope="col" class="thback"><div class="head-table">Largeur</div></th>
      <th scope="col" class="thback"><div class="head-table">Poids</div></th>
      <th scope="col" class="thback"><div class="head-table">Matière</div></th>
      <th scope="col" class="thback"><div class="head-table">Couleur</div></th>
      <th scope="col" class="thback"><div class="head-table">Thèmes</div></th>
      <th scope="col" class="thback"><div class="head-table">Descriptif</div></th>
      <th scope="col" class="thback"><div class="head-table">Auteur</div></th>
    </tr>
  </thead>

  <tbody id="theTABLE">
      @foreach ($artworks as $artwork )
        <tr class="trback">
            
          <td class="tdback">
         <div>
            {{$artwork->id}}
        </div>
          </td>

          <td class="tdback">
                <div>
                    {{$artwork->name}}
                </div>
                </td>

          <td class="tdback">
         <div>
            <img class="img-bdd" src="{{asset('storage/'.$artwork->picture)}}" alt="">
        </div>
         </td>

          <td class="tdback">
          <div>
              {{$artwork->height}}
         </div>
         </td>

          <td class="tdback">
          <div>
              {{$artwork->width}}
          </div>
          </td>

          <td class="tdback">
         <div>
            {{$artwork->weight}}
         </div>
         </td>

          <td class="tdback">
         <div>
            {{$artwork->materials}}
         </div>
         </td>

          <td class="tdback">
         <div>
            {{$artwork->colors}}
         </div>
         </td>

          <td class="tdback">
          <div>
              {{$artwork->theme}}
         </div>
         </td>

          <td class="tdback ">
          <div class="tddescription">
              {{$artwork->description}}
          </div>
          </td>

           <td class="tdback">
           <div>
              {{$artwork->author}}
          </div>
          </td>
          @endforeach
</tr>


  </tbody>
</table>

<table class="table-two">
<thead class="thead-back">
        <tr class="trback">
                <th scope="col" class="thback"><div class="head-table">N°</div></th>
                <th scope="col" class="thback"><div class="head-table">Prix de vente négociable(€)</div></th>
                <th scope="col" class="thback"><div class="head-table">Prix minimum(€)</div></th>
                <th scope="col" class="thback"><div class="head-table">Nombre de tours</div></th>
                <th scope="col" class="thback"><div class="head-table">Durée</div></th>
                <th scope="col" class="thback"><div class="head-table">Nombre de trappes</div></th>
                <th scope="col" class="thback"><div class="head-table">Taux de trappes</div></th>
            </tr>
</thead>

<tbody id="theTABLE">
@foreach ($artworks as $artwork )
    <tr>
    
        <td class="tdback">
            <div>
                {{$artwork->id}}
            </div>
            </td>

        <td class="tdback">
        <div>
            {{$artwork->price}}€
        </div>
        </td>
      
        <td class="tdback">
        <div>
            {{$artwork->minimum_price}}€
        </div>
        </td>
      
        <td class="tdback">
        <div>
            {{$artwork->number_tours}}
        </div>
        </td>
      
        <td class="tdback">
        <div>
            {{$artwork->time}} minutes
        </div>
        </td>
      
        <td class="tdback">
        <div>
            {{$artwork->number_test}}
        </div>
        </td>
      
        <td class="tdback">
        <div>
            {{$artwork->test_rate}}%
        </div>
        </td>
        @endforeach       
</tr>
</tbody>

</table>
</div>
<a href="{{ asset('/create')}}" class="btn btn-danger d-block m-auto" style="width: 15%;">Créer une oeuvre!</a>
@endsection