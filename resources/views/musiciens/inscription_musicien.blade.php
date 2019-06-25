@extends('events/layouts/base')

@section('content')
    <h1>Inscription d'un utilisateur musicien</h1>
<form action="{{ route('inscription_musicien') }}" method="POST">
        {{ csrf_field() }}
        @include('events/layouts/partials-musicien/_form', ['submitButtonText' => "M'inscrire en tant que musicien"])
    </form>
    <a class="btn btn-block btn-info" href="{{route('connexion_musicien')}}">Déjà inscrit ? Cliquez ici pour vous connecter !</a>
    <a class="btn-block" href="{{route('home')}}"><button>Retour</button></a>
@endsection
