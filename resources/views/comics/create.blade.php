@extends('layouts.app')

@section('metaTitle', 'Aggiungi Comic')

@section('content')
    <h1>
        Aggiungi Comic
    </h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <p>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" required>
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
            <textarea name="description" id="description"></textarea>
        </p>
        <p>
            <label for="sale_date">Data</label>
            <input type="date" name="sale_date" id="sale_date">
        </p>
        <p>
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" required>
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
