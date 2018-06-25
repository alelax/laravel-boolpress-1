@extends('layouts.app')

@section('content')

    <form class="form-group" action="{{ route('posts.save') }}" method="post">
        {{ csrf_field() }}

        @foreach ($categories as $category)
            <input type="checkbox" name="categories[]" value="{{ $category->id }}"> {{ $category->name }}
        @endforeach

        {{--
        <div class="form-group">
            <label for="categories[]">Categorie</label>
            <select name="categories[]" multiple class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        --}}

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" name="content"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Salva" class="form-control" />
        </div>

    </form>

@endsection
