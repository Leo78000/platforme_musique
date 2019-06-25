@extends('events/layouts/base')

@section('content')
        <h1>{{ $musicien->name}} {{ $musicien->first_name }} </h1>
        <p style="text-align:center;"><b>Adresse mail:</b> {{ $musicien->email }}</p>
        <p style="text-align:center;"><b>Instrument de prédilection:</b>  {{ $musicien->instrument }}</p>

<form action="{{route('form_musicien', $musicien)}}" method="POST">
            <hr>
            <h2>Formulaire de Contact</h2>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="control-label">Nom & Prénom</label>
                <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Votre nom & prénom">
                {!! $errors->first('name' , '<span class="invalid-feedback"> :message </span>') !!}
            </div>

            <div class="form-group">
                <label for="email_d" class="control-label">Adresse Mail du destinataire</label>
            <input readonly value="{{ $musicien->email }}"name="email" type="text" class="form-control {{ $errors->has('email_d') ? 'is-invalid' : '' }}" placeholder="Email du destinataire">
            {!! $errors->first('email_d' , '<span class="invalid-feedback"> :message </span>') !!}
            </div>

            <div class="form-group">
                    <label for="email" class="control-label">Votre adresse Mail</label>
                <input name="email" type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Votre adresse mail">
                {!! $errors->first('email' , '<span class="invalid-feedback"> :message </span>') !!}
                </div>

            <div class="form-group">
                <label for="message" class="control-label">Message</label>
                <textarea placeholder="Votre message" name="message" type="text" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" rows="10"></textarea>
                {!! $errors->first('message' , '<span class="invalid-feedback"> :message </span>') !!}
            </div>

            <input value="Envoyez le message" type="submit" class="btn btn-primary btn-block">
        </form>

@endsection
