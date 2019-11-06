@extends('welcome')
@section('content')

<div class="connect-page">

        <div class="connect-login m-auto">
            <h2>Connexion</h2>
            <form class="form-registration d-block registr-mobile ">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Adresse email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse email" required>
                    </div>

                    <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" style="margin-bottom:10px;" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <button type="submit" class="btn">Valider</button>
            </form>
        </div>

        <hr class=" hr-connect d-block m-auto">
        <div class="registration d-block m-auto">
            <h2> Inscription</h2>
            <a href="{{ asset('/registr')}}" class="btn d-block m-auto btn-inscription">Je m'inscris !</a>
        </div>
</div>
@endsection