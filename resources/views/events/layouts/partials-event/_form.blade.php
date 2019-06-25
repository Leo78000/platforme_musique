<div class="form-group">
    <label class="control-label  sr-only" for="title">Titre</label>
        <input
        id="title"
        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
        name ="title"
        type="text"
        placeholder="Titre de l'évènement"
        value="{{ old('title') ?? $event->title }}">
        {{-- Message d'erreur  --}}
        {!! $errors->first('title' , '<span class="invalid-feedback"> :message </span>')!!}
</div>

<hr>
<div class="form-group">
    <label class="control-label sr-only" for="description">Description</label>
        <textarea
        id="description"
        class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
        name ="description"
        type="text"
        placeholder="Description de l'évènement">{{ old('description') ?? $event->description }}</textarea>
                   {{-- Message d'erreur  --}}
        {!! $errors->first('description' , '<span class="invalid-feedback">:message </span>')!!}
</div>

<div class="form-group">
    <input class="btn btn-info btn-block" type="submit" value="{{ $submitButtonText }}">
</div>
