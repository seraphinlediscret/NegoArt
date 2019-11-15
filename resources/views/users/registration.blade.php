@extends('welcome')
@section('content')
<h2>Inscription</h2>

<div class="myform">

    <form class="form-registration">

    <div class="form-group">
        <label for="exampleFormControlSelect1">Je suis</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option id="buyer-choose">Amateur | Acheteur d'art</option>
        <option id="gallerist-choose">Galleriste</option>
        <option id="artist-choose">Artiste indépendant</option>
        </select>
    </div>

    <div class="form-group gallery-input" id="SIRET">
        <label for="exampleInputPassword1">Numero de SIRET</label>
        <input type="text" style="margin-bottom:10px;" class="form-control"  placeholder="Entrez votre numero de siret" required>
    </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Adresse email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse email" required>
      <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit.</small>
      </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Nom et prénom</label>
          <input type="text" style="margin-bottom:10px;" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre nom" required>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre prénom" required>
          </div>

      <div class="form-group">
      <label for="exampleInputPassword1">Mot de passe</label>
      <input type="password" style="margin-bottom:10px;" class="form-control" id="exampleInputPassword1" placeholder="Entrez un mot de passe" required>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer le mot de passe" required>
      </div>

      <a href="{{ asset('/rules')}}" class="rules-checked" target="_blank">Conditions d'utilisation</a>
      <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1">J'accepte les conditions d'utilisation</label>
      </div>
      <button type="submit" class="btn">Valider</button>
  </form>
</div>
<script type="text/javascript" src="{{ asset('js/registration.js') }}"></script>
@endsection