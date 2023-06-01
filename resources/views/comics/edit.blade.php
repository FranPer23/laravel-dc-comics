@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="my-3">
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Torna alla lista fumetti</a>
        </div>

        <h2>Aggiorna: {{ $comic->title }}</h2>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select id="type" name="type" class="form-select">
                    <option></option>
                    <option @selected($comic->type === 'graphic novel') value="graphic novel">graphic novel</option>
                    <option @selected($comic->type === 'comic book') value="comic book">comic book</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Cover</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
@endsection
