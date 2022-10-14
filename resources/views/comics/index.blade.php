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

    <h1>
        Comics
    </h1>
@endsection
