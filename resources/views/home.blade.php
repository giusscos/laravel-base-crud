@extends('layouts.app')

@section('metaTitle', 'Home')

@section('content')
    <ul>
        <li>
            <a href="{{ route('comics.index') }}">
                Comics
            </a>
        </li>
    </ul>

    <h1>
        Home
    </h1>
@endsection
