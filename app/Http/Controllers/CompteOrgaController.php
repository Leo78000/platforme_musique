<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteOrgaController extends Controller
{
    public function accueil(){

        if(Auth::guard('organisateur')->guest()){
            Flashy::error('Vous devez être connecté pour accéder à cette page');
            return redirect('orga/connexion');
        }
        return view('orga/mon_compte');
    }

    public function deconnexion(){
        Auth::guard('organisateur')->logout();

        Flashy::error('Vous vous êtes déconnecté');
        return redirect('/');
    }
}
