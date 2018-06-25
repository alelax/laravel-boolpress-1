@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <form class="form-inline" action="#" method="get">
                <label for="name">Nome</label>
                <input type="text" name="name" placeholder="Inserisci il nome" class="form-control">

                <label for="is_confirmed">Confermato</label>
                <input type="checkbox" name="is_confirmed">

                <input type="submit" value="Filtra" class="form-control">
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Età</th>
                <th>Confermato</th>
                <th>Genere</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->is_confirmed }}</td>
                    <td>{{ $person->gender }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
