@extends('layouts.app')

@section('metaTitle', 'Show - Comics')

@section('content')
    {{-- <h1>
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
    </div> --}}
    @include('partials.jumbo')
    <div class="comic_wrapper">
        <div class="container">
            <div class="comic-thumb">
                <img src="{{ $comic['thumb'] }}">
            </div>
            <div class="comic-info">
                <div class="info">
                    <h3 class="title uppercase">
                        {{ $comic['title'] }}
                    </h3>
                    <span class="price">
                        <span>U.S. Price:</span>
                        {{ $comic['price'] }}
                        <span class="store uppercase">available</span>
                        <select>
                            <option>Check availability</option>
                        </select>
                    </span>
                    <p class="desc">
                        {{ $comic['description'] }}
                    </p>
                    <div class="edit_wrapper">
                        <form action="{{ route('comics.edit', $comic) }}" method="get">
                            @csrf
                            <button class="btn edit">
                                Modifica
                            </button>
                        </form>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn destroy">
                                Elimina
                            </button>
                        </form>
                    </div>
                </div>
                <div class="adv">
                    <span class="uppercase">advertisement</span>
                    <img src="{{ @asset('./img/adv.jpg') }}" alt="adv" />
                </div>
            </div>
        </div>
        {{-- <div class="detail_wrapper">
            <div class="container">
                <div class="cat-detail">
                    <div class="cat-title">
                        <h4>
                            Talent
                        </h4>
                    </div>
                    <ul class="list detail-list">
                        <li class="list-item">
                            <span class="title">
                                Art by:
                            </span>
                            <div class="content">
                                @foreach ($comic['artists'] as $artist)
                                    <a href="#" class="item-link artist">
                                        {{ $artist }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                        <li class="list-item">
                            <span class="title">
                                Written by:
                            </span>
                            <div class="content">
                                @foreach ($comic['writers'] as $writer)
                                    <a href="#" class="item-link writters">
                                        {{ $writer }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cat-detail">
                    <div class="cat-title">
                        <h4>
                            Specs
                        </h4>
                    </div>
                    <ul class="list detail-list">
                        <li class="list-item">
                            <span class="title">
                                Series:
                            </span>
                            <div class="content">
                                <a href="#" class="uppercase">
                                {{ $comic['series'] }}
                                </a>
                            </div>
                        </li>
                        <li class="list-item">
                            <span class="title">
                                U.S. Price:
                            </span>
                            <div class="content">
                                <span class="price">
                                    {{ $comic['price'] }}
                                </span>
                            </div>
                        </li>
                        <li class="list-item">
                            <span class="title capitalize">
                                On sale date:
                            </span>
                            <div class="content">
                                <span class="price">
                                    {{ $comic['sale_date'] }}
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
