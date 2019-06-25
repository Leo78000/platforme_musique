<?php

namespace App\Http\Controllers;

use App\Models\Organisateur;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateOrgaForm;

class OrganisateurController extends Controller
{
    public function create()
    {
        $organisateur = new Organisateur;
        return view('orga.inscription_orga',compact('organisateur'));
    }

    public function store(CreateOrgaForm $request)
    {
        Organisateur::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            ]);

        Flashy::info('Inscription réalisée avec succès !');

        return redirect(route('home'));
    }
}
