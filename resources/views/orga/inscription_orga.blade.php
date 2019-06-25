@extends('events/layouts/base')

@section('content')
    <h1>Inscription d'un utilisateur Organisateur</h1>
<form action="{{ route('inscription_orga') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="sr-only control-label">Nom de votre organisation :</label>
                <input placeholder="Nom de votre organisation" name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
                {!! $errors->first('name' , '<span class="invalid-feedback"> :message </span>') !!}
        </div>

        <div class="form-group">
                <label for="email" class="sr-only control-label">Email de contact :</label>
                    <input placeholder="Email de contact" name="email" type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
                    {!! $errors->first('email' , '<span class="invalid-feedback"> :message </span>') !!}
            </div>

            <div class="form-group">
                    <label for="password" class="sr-only control-label">Mot de passe</label>
                        <input placeholder="Mot de passe" name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
                        {!! $errors->first('password' , '<span class="invalid-feedback"> :message </span>') !!}
            </div>

            <div class="form-group">
                    <label for="password_confirmation" class="sr-only control-label">Nom de votre organisation :</label>
                        <input placeholder="Confirmez votre mot de passe" name="password_confirmation" type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
                        {!! $errors->first('password_confirmation' , '<span class="invalid-feedback"> :message </span>') !!}
            </div>

            <div class="form-group">
                    <input class="btn btn-info btn-block" type="submit" value="M'inscrire en tant qu'organisateur">
                </div>
    </form>

    <a class="btn btn-block btn-info" href="{{route('connexion_orga')}}">Déjà inscrit ? Cliquez ici pour vous connecter !</a>
    <a class="btn-block" href="{{route('home')}}"><button>Retour</button></a>
@endsection
