@extends('layouts.app')

@section('metaTitle', 'Show - Comics')

@section('content')
    <h1>
        Comics
    </h1>

    <div>
        <h3>
            {{ $comic['title'] }}
        </h3>
        <h4>
            {{ $comic['series'] }}
        </h4>
        <img width="200" src="{{ $comic['thumb'] }}" alt="copertina {{ $comic['title'] }}">
        <p>
            {{ $comic['description'] }}
        </p>
        <span>
            &euro; {{ $comic['price'] }}
        </span>
        <span>
            {{ $comic['sale_date'] }}
        </span>
        <span>
            {{ $comic['type'] }}
        </span>

        <form action="{{ route('comics.edit', $comic) }}" method="get">
            @csrf
            <button>
                Modifica
            </button>
        </form>
        <form action="{{ route('comics.destroy', $comic) }}" method="post">
            @csrf
            @method('DELETE')
            <button>
                Elimina
            </button>
        </form>
    </div>
@endsection
