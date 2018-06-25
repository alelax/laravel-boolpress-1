@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <a href="{{ route('posts.create') }}" class="btn btn-primary pull-right">Aggiungi nuovo</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
