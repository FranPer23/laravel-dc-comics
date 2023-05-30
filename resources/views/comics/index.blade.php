@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>lista fumetti</h1>
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
                @foreach ($collection as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
