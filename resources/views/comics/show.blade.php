@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-success my-4" href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text"><strong>Prezzo: </strong> {{ $comic->price }}</p>
            <p class="card-text"><strong>Data: </strong> {{ $comic->sale_date }}</p>
            <p class="card-text"> <strong>Tipo: </strong> {{ $comic->type }}</p>
            <div class="my-3">
                <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>

                <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancella</button>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection