<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;

class CompteMusicienController extends Controller
{
    public function accueil(){

        if(Auth::guard('musicien')->guest()){
            Flashy::error('Vous devez être connecté pour accéder à cette page');
            return redirect('musiciens/connexion');
        }
        return view('musiciens/mon_compte');
    }

    public function deconnexion(){
        Auth::guard('musicien')->logout();

        Flashy::error('Vous vous êtes déconnecté');
        return redirect('/');
    }
}
