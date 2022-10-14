@php
$links = [
    [
        'href' => null,
        'text' => 'Characters',
    ],
    [
        'href' => 'comics.index',
        'text' => 'Comics',
    ],
    [
        'href' => null,
        'text' => 'Movies',
    ],
    [
        'href' => null,
        'text' => 'Tv',
    ],
    [
        'href' => null,
        'text' => 'Games',
    ],
    [
        'href' => null,
        'text' => 'Collectibles',
    ],
    [
        'href' => null,
        'text' => 'Videos',
    ],
    [
        'href' => null,
        'text' => 'Fans',
    ],
    [
        'href' => null,
        'text' => 'News',
    ],
    [
        'href' => null,
        'text' => 'Shop',
    ],
];
@endphp
<ul class="nav_list uppercase">
    @foreach ($links as $link)
        <li class="list_item {{ Route::currentRouteName() == $link['href'] ? 'active' : ''}}">
            <a class="item_link" href="{{ $link['href'] != null ? route($link['href']) : route('home') }}">
                {{ $link['text'] }}
            </a>
        </li>
    @endforeach
</ul>
