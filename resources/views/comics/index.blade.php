@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('content')
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
            <div>
                <a href="{{ route('comics.show', $comic->id) }}">
                    Scopri
                </a>
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
        @empty
            Nessun Comic trovato
        @endforelse
    </div>
@endsection
