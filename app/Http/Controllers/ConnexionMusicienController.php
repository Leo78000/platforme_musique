<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ConnexionMusicienForm;

class ConnexionMusicienController extends Controller
{
    public function formulaire()
    {
        return view('musiciens.connexion');
    }

    public function traitement(ConnexionMusicienForm $request)
    {
        $resultat = Auth::guard('musicien')->attempt([
          'email'=>request('email'),
          'password'=> request('password')
        ]);

        if($resultat){
            Flashy::info('Connexion réussie !');
            return view('musiciens/mon_compte');
        }
        Flashy::error('Vos identifiants sont invalides');
        return back();
    }
}
