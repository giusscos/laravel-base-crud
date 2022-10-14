@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('content')
    <ul>
        <li>
            <a href="{{ route('home') }}">
                Home
            </a>
        </li>
    </ul>
    <a href="{{ route('comics.create') }}">
        Aggiungi Comic
    </a>

    <h1>
        Comics
    </h1>

    <div>
        @forelse($comics as $comic)
            <h3>
                {{ $comic['title'] }}
            </h3>
            <h4>
                {{ $comic['series'] }}
            </h4>
            <img src="{{ $comic['thumb'] }}" alt="copertina {{ $comic['title'] }}">
            <p>
                {{ $comic['description'] }}
            </p>
            <span>
                {{ $comic['price'] }}
            </span>
            <span>
                {{ $comic['sale_date'] }}
            </span>
            <span>
                {{ $comic['type'] }}
            </span>
            <div>
                <a href="{{ route('comics.show', $comic['id']) }}">
                    Scopri
                </a>
            </div>
        @empty
            Nessun Comic trovato
        @endforelse
    </div>
@endsection
