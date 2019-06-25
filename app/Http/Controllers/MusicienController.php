<?php

namespace App\Http\Controllers;

use App\Models\Musicien;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\CreateMusicienForm;
use Illuminate\Support\Facades\Mail;

class MusicienController extends Controller
{
    public function create()
    {
        $musicien = new Musicien;
        return view('musiciens.inscription_musicien',compact('musicien'));
    }

    public function store(CreateMusicienForm $request)
    {
        Musicien::create([
            'name'=>$request->name,
            'first_name' =>$request->first_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'city'=>$request->city,
            'instrument'=>$request->instrument,
            'birth_year'=>$request->birth_year,
            ]);


        Flashy::info('Inscription réalisée avec succès !');

        return redirect(route('home'));
    }

    public function liste()

    {
        $musiciens = Musicien::paginate(10);
        return view('musiciens/liste_musicien',compact('musiciens'));
    }

    public function show(Musicien $musicien)
    {
        return view('musiciens.show' ,compact('musicien'));
    }

    public function form(ContactFormRequest $request){

        $musicien = new Musicien;
        Mail::send('emails.contact-message',[
            'message'=> $request->message
        ], function($mail) use($request){
            $mail->from($request->email,$request->name);
            $mail->to('test@mail.com')->subject('Contact Message');
        }
    );
    Flashy::info('Message envoyé');
    return redirect()->back();

    }
}
