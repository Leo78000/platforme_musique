@extends('events/layouts/base')

@section('content')
    <h1>Mon profil organisateur</h1>
    <p>Bonjour, bienvenue sur la plateforme.</p>
    <a class="btn btn-danger" href="{{route('deconnexion_orga')}}">Se déconnecter</a>
@endsection
