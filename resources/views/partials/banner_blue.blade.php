@php
$links = [
    [
        'src' => './img/buy-comics-digital-comics.png',
        'text' => 'Digital comics',
        'href' => '#',
        'height' => '70px',
    ],
    [
        'src' => './img/buy-comics-merchandise.png',
        'text' => 'Dc merchandise',
        'href' => '#',
        'height' => '70px',
    ],
    [
        'src' => './img/buy-comics-subscriptions.png',
        'text' => 'Subscription',
        'href' => '#',
        'height' => '70px',
    ],
    [
        'src' => './img/buy-comics-shop-locator.png',
        'text' => 'Comic shop location',
        'href' => '#',
        'height' => '70px',
    ],
    [
        'src' => './img/buy-dc-power-visa.svg',
        'text' => 'Dc power visa',
        'href' => '#',
        'height' => '50px',
    ],
];
@endphp
<div class="banner blue">
    <div class="container">
        <ul class="footer_list-merch uppercase">
            @foreach($links as $link)
            <li class="list_item">
                <a href="{{$link['href']}}" class="item_link">
                    <img src="{{@asset($link['src'])}}" alt="{{$link['text']}}" height="{{$link['height']}}" />
                    {{ $link['text'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
