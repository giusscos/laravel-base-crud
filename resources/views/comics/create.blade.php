@extends('layouts.app')

@section('metaTitle', 'Aggiungi Comic')

@section('content')
    <ul>
        <li>
            <a href="{{ route('home') }}">
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('comics.index') }}">
                Comics
            </a>
        </li>
    </ul>

    <h1>
        Aggiungi Comic
    </h1>

    <form action="/" method="POST">
        @csrf
        <p>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series">
        </p>
        <p>
            <label for="thumb">Url copertina</label>
            <input type="url" name="thumb" id="thumb">
        </p>
        <p>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description">
            </textarea>
        </p>
        <p>
            <label for="sale_date">Data</label>
            <input type="date" name="sale_date" id="sale_date">
        </p>
        <p>
            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price">
        </p>
        <p>
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type">
        </p>
        <button type="submit">
            Aggiungi
        </button>
    </form>

@endsection
