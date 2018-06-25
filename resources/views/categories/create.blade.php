@extends('layouts.app')

@section('content')

    <form class="form-group" action="{{ route('categories.save') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" placeholder="Inserisci il nome della categoria" />
        </div>

        <div class="form-group">
            <input type="submit" value="Salva" class="form-control" />
        </div>

    </form>

@endsection
