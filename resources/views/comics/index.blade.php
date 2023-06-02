@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Lista fumetti</h1>
        <div class="wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cover</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Tipologia</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th style="width: 20rem"><img class="w-25" src="{{ $comic->thumb }}" alt=""
                                    srcset=""></th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">
                                        <i class="fa-regular fa-eye"></i></a>
                                    <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}"><i
                                            class="fa-regular
                                    fa-pen-to-square"></i></a>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            data-comic-title='{{ $comic->title }}'><i
                                                class="fa-regular
                                    fa-trash-can"></i></button>
                                    </form>
                                </div>

                                <div>
                                    <a href="{{ route('comics.create') }}">Crea un fumetto</a>
                                </div>

                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
@endsection
