<div class="form-group">
    <label for="name" class="control-label sr-only">Nom</label>
        <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Votre nom">
            {!! $errors->first('name' , '<span class="invalid-feedback">:message </span>') !!}
</div>

<div class="form-group">
        <label for="first_name" class="control-label sr-only">Prénom</label>
            <input name="first_name" type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" placeholder="Votre prénom">
            {!! $errors->first('first_name' , '<span class="invalid-feedback">:message </span>') !!}
</div>

<div class="form-group">
        <label for="email" class="control-label sr-only">E-mail</label>
            <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Votre adresse mail">
            {!! $errors->first('email' , '<span class="invalid-feedback">:message </span>') !!}
</div>

<div class="form-group">
        <label for="password" class="control-label sr-only">Mot de Passe</label>
            <input name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Votre mot de passe">
            {!! $errors->first('password' , '<span class="invalid-feedback">:message </span>') !!}
</div>

<div class="form-group">
        <label for="password_confirmation" class="control-label sr-only">Mot de Passe</label>
            <input name="password_confirmation" type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"  placeholder="Confirmez votre mot de passe">
            {!! $errors->first('password_confirmation' , '<span class="invalid-feedback">:message </span>') !!}
</div>

<div class="form-group">
        <label for="city" class="control-label sr-only">Ville</label>
            <input name="city" type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" placeholder="Ville sur laquelle vous souhaitez travailler">
            {!! $errors->first('city' , '<span class="invalid-feedback">:message </span>') !!}
</div>

<div class="form-group">
        <label for="instrument" class="control-label sr-only">Instrument de prédilection</label>
            <input name="instrument" type="text" class="form-control {{ $errors->has('instrument') ? 'is-invalid' : '' }}" placeholder="Votre instrument de prédilection(1 seul choix)">
            {!! $errors->first('instrument' , '<span class="invalid-feedback"> :message </span>') !!}
</div>

<div class="form-group">
        <label for="birth_year" class="control-label">Date de naissance</label>
            <input name="birth_year" type="date" class="form-control" placeholder="Date de naissance">
</div>

<div class="form-group">
    <input class="btn btn-info btn-block" type="submit" value="{{ $submitButtonText }}">
</div>
