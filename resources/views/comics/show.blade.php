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
        <img width="300" src="{{ $comic['thumb'] }}" alt="copertina {{ $comic['title'] }}">
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
    </div>
@endsection
