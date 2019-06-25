@extends('events/layouts/base')

@section('content')

    <h1>{{ $event->title}}</h1>
    <p>{{ $event->description }}</p>
    <div>
        <a class="btn btn-info" href="{{ route('events.edit', $event)}}">Modifier l'évènement</a>
        <form
        class="inline-block"
        action="{{ route('events.destroy', $event)}}"
        method="POST"
        onsubmit="return confirm('Etes-vous certain de vouloir supprimer cet évènement ?')">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}
        <input class="btn btn-warning"type="submit" value="Supprimez">
        </form>
    </div>
    <hr>
    <a href="{{ route('home')}}"> Retour à la liste des évènements</a>





@endsection
