@extends('events/layouts/base')

@section('content')
    <h1>Voici la liste des musiciens recensés sur la plateforme :</h1>

    @if(! $musiciens->isEmpty())
    <ul>
        @foreach ($musiciens as $musicien)
        <li><a href="{{ route('infos_musicien', $musicien) }}">{{$musicien->name}} - {{$musicien->instrument}}</a>  </li>
        @endforeach
    </ul>
    @else
    <p>Il n'y a actuellement aucun musicien recensé sur la plateforme</p>
    @endif
    <a class="btn btn-block" href="{{route('home')}}"><button >Retour</button></a>
@endsection
