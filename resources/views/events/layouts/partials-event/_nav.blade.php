<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="{{ route('home') }}"> <h2>MusiPlatform</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <a href="{{ route('event')}}" class="btn btn-info btn-block">Liste des évènements</a>
            </li>
            <li class="nav-item">
                    <a href="{{ route('liste_musicien')}}" class="btn btn-info btn-block">Liste des musiciens</a>
                </li>
        </ul>
    </div>
  </nav>
