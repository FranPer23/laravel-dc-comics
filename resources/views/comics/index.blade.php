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
                            <th><img class="w-25" src="{{ $comic->thumb }}" alt="" srcset=""></th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->type }}</td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
@endsection
