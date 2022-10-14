@extends('layouts.app')

@section('metaTitle', 'Show - Comics')

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
        Comics
    </h1>

    <div>
        @foreach ($comic as $item)
            <h3>
                {{ $item['title'] }}
            </h3>
            <h4>
                {{ $item['series'] }}
            </h4>
            <img width="300" src="{{ $item['thumb'] }}" alt="copertina {{ $item['title'] }}">
            <p>
                {{ $item['description'] }}
            </p>
            <span>
                &euro; {{ $item['price'] }}
            </span>
            <span>
                {{ $item['sale_date'] }}
            </span>
            <span>
                {{ $item['type'] }}
            </span>
        @endforeach
    </div>
@endsection
