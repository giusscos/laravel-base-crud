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
            <input type="text" name="title" id="title" value="{{$comic['title']}}" required>
        </p>
        <p>
            <label for="series">Serie</label>
            <input type="text" name="series" value="{{$comic['series']}}" id="series">
        </p>
        <p>
            <label for="thumb">Url copertina</label>
            <input type="url" name="thumb" id="thumb" value="{{$comic['thumb']}}">
        </p>
        <p>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description">{{$comic['description']}}</textarea>
        </p>
        <p>
            <label for="sale_date">Data</label>
            <input type="date" name="sale_date" id="sale_date" value="{{$comic['sale_date']}}">
        </p>
        <p>
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{$comic['price']}}" required>
        </p>
        <p>
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" value="{{$comic['type']}}">
        </p>
        <button type="submit">
            Modifica
        </button>
    </form>
@endsection
