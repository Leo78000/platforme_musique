@extends('events/layouts/base')

@section('content')
    <h1>Création d'un évènement</h1>
    <form action="{{route('events.store')}}" method="POST">
        {{ csrf_field() }}
         @include('events/layouts/partials-event/_form',['submitButtonText' => "Créer l'évènement"])

    </form>
    <a href="{{route('home')}}"><button>Retour</button></a>
@endsection
