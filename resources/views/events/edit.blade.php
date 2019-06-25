@extends('events/layouts/base')

@section('content')

    <h1>Editez l'évènement #{{ $event->id }}</h1>
    <form action="{{route('events.update', $event)}}" method="POST">
            {{ csrf_field() }}

            {{ method_field('PUT') }}

            @include('events/layouts/partials-event/_form',['submitButtonText' => "Modifier cet évènement"])


        </form>
        <a href="{{route('home')}}"><button>Retour</button></a>
@endsection
