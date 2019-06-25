@extends('events/layouts.base')

@section('content')
    <h1>Events</h1>
    <h3>Actuellement {{$count_event->count()}}
       {{ ($count_event->count() <= 1) ? 'évènement' :'évènements'}}   de prévus</h3>

    @if(! $events-> isEmpty())
    <ul>
        @foreach ($events as $event)
        <li><a class="list_event" href="{{ route('events.show', $event) }}"> {{ $event->title }} </a></li>
        @endforeach
    </ul>
    @else
    <p>Il n'y a aucun évènements de prévus.</p>
    @endif
    {{ $events->links()}}
    <a class="btn btn-primary btn-block" href="{{ route('events.create') }}">Créer un évènement <i aria-hidden="true" class="fa fa-plus"></i></a>
@endsection
