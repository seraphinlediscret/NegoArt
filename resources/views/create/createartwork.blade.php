@extends('layout')
@section('create-artwork')
<h2>Créer une oeuvre</h2>
{{-- <div id="app">
        <create-artwork></create-artwork>
       </div> --}}

    <form action="" method="POST" enctype="multipart/form-data" class="d-flex" style="justify-content: space-around;">
        @csrf
    <div class="characteristics d-flex">
        <div class="m-auto">

            <h3>Les caractéristiques de l'oeuvre</h3>

        <div class="inputcreate">
            <label for="name">Nom de l'oeuvre</label>
            <input type="text" class="form-control" id="name-artwork" placeholder="Entrez le nom de l'oeuvre" value="" name="name" required>
        </div>

        <div class="inputcreate">
            <label for="date">Année de création</label>
            <input type="number" class="form-control" id="date-artwork" placeholder="Entrez la date de création de l'oeuvre" name="date" value="">
        </div>

        <div class="inputcreate">
                <label for="price">Prix(€)</label>
                <input type="number" class="form-control" id="price-artwork" placeholder="Entrez le nom de l'auteur de l'oeuvre" name="price" required>
            </div>
        
        <div class="inputcreate">
            <label for="height">Hauteur(cm, mm, m)</label>
            <input type="text" class="form-control" id="height-artwork" placeholder="Entrez la hauteur de l'oeuvre" name="height" required>
        </div>

        <div class="inputcreate">
            <label for="width">Largeur(cm, mm, m)</label>
            <input type="text" class="form-control" id="width-artwork" placeholder="Entrez la largeur de l'oeuvre" name="width" required>
        </div>

        <div class="inputcreate">
            <label for="weight">Poids(g, mg, kg, t)</label>
            <input type="text" class="form-control" id="weight-artwork" placeholder="Entrez le poids de l'oeuvre" name="weight">
        </div>

        <div class="inputcreate">
            <label for="materials">Matière(s)</label>
            <input type="text" class="form-control" id="materials-artwork" placeholder="Entrez la/les matière(s) de l'oeuvre" name="materials" required>
        </div>

        <div class="inputcreate">
            <label for="colors">Couleur(s)</label>
            <input type="text" class="form-control" id="colors-artwork" placeholder="Entrez la/les couleurs de l'oeuvre" name="colors">
        </div>

        <div class="inputcreate">
            <label for="theme">Thème</label>
            <input type="text" class="form-control" id="theme-artwork" placeholder="Entrez le thème principal de l'oeuvre" name="theme" required>
        </div>

        <div class="inputcreate">
            <label for="author">Auteur</label>
            <input type="text" class="form-control" id="author-artwork" placeholder="Entrez le nom de l'auteur de l'oeuvre" name="author" required>
        </div>

        <div class="form-group inputcreate">
                <label for="description">Description</label>
                <textarea class="form-control" id="description-artwork" rows="3" placeholder="Entrez la desciption l'oeuvre" name="description"></textarea>
            </div>

            <div class="form-group inputcreate">
            <label for="picture">Ajouter une image</label>
            <input type="file" class="form-control-file" id="picture-artwork" name="picture" @error('picture') is-invalid @enderror required>
            @error('picture')
            <div class="invalid-feedback">{{$error->first('picture')}}</div>
            @enderror
        </div>
        </div>      
</div>

  {{-- parameters negociation --}}
<div class=" parameter-negociation d-flex flex-column">

        <div class="">
            <h3>Les paramètres de négociation</h3>

        <div class="inputcreate">
            <label for="minimum_price">Prix minimum(€)</label>
            <input type="number" class="form-control" id="minimum-artwork" placeholder="Entrez le prix minimum de vente" value="" name="minimum_price" required>
        </div>

        <div class="inputcreate">
            <label for="number_tours">Nombre de tour</label>
            <input type="number" class="form-control" id="tour-artwork" placeholder="Entrez le nombre de tour de négociation" name="number_tours" required>
        </div>

        <div class="inputcreate">
            <label for="time">Durée(en minutes)</label>
            <input type="number" class="form-control" id="time-artwork" placeholder="Entrez la durée de négociation" name="time" required>
        </div>

        <div class="inputcreate">
            <label for="test_rate">Taux de trappe(%)</label>
            <input type="number" class="form-control" id="rate-artwork" placeholder="Entrez le taux de trappe" name="test_rate" required>
        </div>

        <div class="inputcreate">
            <label for="number_test">Nombre de trappe</label>
            <input type="number" class="form-control" id="test-artwork" placeholder="Entrez le nombre de trappe" name="number_test" required>
        </div>
        <div class="m-auto text-center">
        <button class="btn btn-success" type="submit">Valider</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
        </div>
</div>
  </form>
     
@endsection