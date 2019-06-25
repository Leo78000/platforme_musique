@extends('events/layouts/base')

@section('content')
    <div class="split left">
        <div class="centered">
          <h2>Vous êtes un organisateur ?</h2>
            <p><a class="lien_accueil" style="color:white" href="{{route('inscription_orga')}}">Inscrivez vous ici</a></p>
            <p><a class="lien_accueil" style="color:white" href="{{route('connexion_orga')}}">Dejà inscrit ? Par ici pour se connecter =></a></p>
        </div>
      </div>

      <div class="split right">
        <div class="centered">
          <h2>Vous êtes musicien ?</h2>
            <p><a class="lien_accueil" style="color:white" href="{{route('inscription_musicien')}}">Inscrivez vous ici</a></p>
            <p><a class="lien_accueil" style="color:white" href="{{route('connexion_musicien')}}">Dejà inscrit ? Par ici pour se connecter =></a></p>
        </div>
      </div>
@endsection
