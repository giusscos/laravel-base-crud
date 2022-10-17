@extends('layouts.app')

@section('metaTitle', 'Modifica Comic')

@section('content')
    <h1>
        Modifica Comic
    </h1>

    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="title">Titolo</label>
            <input class="@error('title') invalid @enderror" type="text" name="title" id="title"
                value="{{ old('title', $comic['title']) }}" required>
            @error('title')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="series">Serie</label>
            <input class="@error('series') invalid @enderror" type="text" name="series"
                value="{{ old('series', $comic['series']) }}" id="series">
            @error('series')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="thumb">Url copertina</label>
            <input class="@error('thumb') invalid @enderror" type="url" name="thumb" id="thumb"
                value="{{ old('thumb', $comic['thumb']) }}">
            @error('thumb')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description">{{ $comic['description'] }}</textarea>
        </p>
        <p>
            <label for="sale_date">Data</label>
            <input class="@error('sale_date') invalid @enderror" type="date" name="sale_date" id="sale_date"
                value="{{ old('sale_date', $comic['sale_date']) }}">
            @error('sale_date')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="price">Prezzo</label>
            <input class="@error('price') invalid @enderror" type="text" name="price" id="price"
                value="{{ old('price', $comic['price']) }}" required>
            @error('price')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="type">Tipo</label>
            <input class="@error('type') invalid @enderror" type="text" name="type" id="type"
                value="{{ old('type', $comic['type']) }}">
            @error('type')
                {{ $message }}
            @enderror
        </p>
        <button type="submit">
            Modifica
        </button>
    </form>

    <form action="{{route('comics.destroy', $comic)}}" method="post">
        @csrf
        @method('DELETE')
        <button>
            Elimina
        </button>

    </form>

    <style>
        .invalid {
            border: 2px solid red;
        }

        .error {
            color: red;
        }
    </style>
@endsection
