@extends('layouts.app')

@section('metaTitle', 'Modifica Comic')

@section('content')
    <div class="form_wrapper">
        <h4 class="form-title">
            Modifica Comic
        </h4>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <p>
                <label for="title">Titolo</label>
                <input class="@error('title') invalid @enderror" value="{{ old('title', $comic['title']) }}" type="text"
                    name="title" id="title">
                @error('title')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </p>
            <p>
                <label for="series">Serie</label>
                <input class="@error('series') invalid @enderror" value="{{ old('series', $comic['series']) }}"
                    type="text" name="series" id="series">
                @error('series')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </p>
            <p>
                <label for="thumb">Url copertina</label>
                <input class="@error('thumb') invalid @enderror" value="{{ old('thumb', $comic['thumb']) }}" type="url"
                    name="thumb" id="thumb">
                @error('thumb')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </p>
            <p>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description"></textarea>
            </p>
            <p>
                <label for="sale_date">Data</label>
                <input class="@error('sale_date') invalid @enderror" value="{{ old('sale_date', $comic['sale_date']) }}"
                    type="date" name="sale_date" id="sale_date">
                @error('sale_date')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </p>
            <p>
                <label for="price">Prezzo</label>
                <input class="@error('price') invalid @enderror" value="{{ old('price', $comic['price']) }}" type="text"
                    name="price" id="price">
                @error('price')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </p>
            <p>
                <label for="type">Tipo</label>
                <input class="@error('type') invalid @enderror" value="{{ old('type', $comic['type']) }}" type="text"
                    name="type" id="type">
                @error('type')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </p>
            <button class="btn edit" type="submit">
                Modifica
            </button>
        </form>
        <form action="{{route('comics.destroy', $comic)}}" method="POST">
            @csrf
            @method('DELETE')

            <button class="btn destroy">
                Elimina
            </button>
        </form>
    </div>
@endsection
