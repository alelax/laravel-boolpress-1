@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <a href="{{ route('categories.create') }}" class="btn btn-primary pull-right">Aggiungi nuova</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
