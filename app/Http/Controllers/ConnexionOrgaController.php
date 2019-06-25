<?php

namespace App\Http\Controllers;

use App\Models\Organisateur;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ConnexionOrgaForm;

class ConnexionOrgaController extends Controller
{
    public function formulaire()
    {
        return view('orga.connexion');
    }

    public function traitement(ConnexionOrgaForm $request)
    {
        $resultat =  Auth::guard('organisateur')->attempt([
          'email'=>request('email'),
          'password'=> request('password')
        ]);

        if($resultat){
            Flashy::info('Connexion réussie !');
            return view('orga/mon_compte');
        }
        Flashy::error('Vos identifiants sont invalides');
        return back();
    }
}
