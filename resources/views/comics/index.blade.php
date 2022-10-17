@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('content')
    {{-- <h3>
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
            </div> --}}
    @include('partials.jumbo')
    <div class="series_wrapper container">
        <div class="btn info_btn uppercase">
            Current series
        </div>
        <a href="{{ route('comics.create') }}" class="btn viewer_btn uppercase">
            Aggiungi comic
        </a>
        @include('partials.cards')
        <div class="btn viewer_btn uppercase">
            Load more
        </div>
    </div>
@endsection
