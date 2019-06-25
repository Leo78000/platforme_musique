@extends('events/layouts/base')

@section('content')
        <h1>Se connecter en tant qu'organisateur</h1>
        <form action="{{route('connexion_orga')}}" method="POST">
            {{ csrf_field() }}

        <div class="form-group">
            <label for="email" class="control-label sr-only">E-mail</label>
                <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Votre adresse mail">
                {!! $errors->first('email' , '<span class="invalid-feedback">:message </span>') !!}
        </div>

        <div class="form-group">
                <label for="password" class="control-label sr-only">Mot de Passe</label>
                    <input name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Votre mot de passe">
                    {!! $errors->first('password' , '<span class="invalid-feedback">:message </span>') !!}
        </div>

        <div class="form-group">
            <input class="btn btn-info btn-block" type="submit" value="Connexion">
        </div>
        </form>

        <a class="btn btn-block btn-info" href="{{route('inscription_orga')}}">Vous n'êtes pas encore inscrit ? Cliquez ici pour le faire !</a>
@endsection
