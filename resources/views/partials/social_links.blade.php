@php
$links = [
    [
        'href' => '#',
        'src' => './img/footer-facebook.png',
        'text' => 'Facebook',
    ],
    [
        'href' => '#',
        'src' => './img/footer-twitter.png',
        'text' => 'Twitter',
    ],
    [
        'href' => '#',
        'src' => './img/footer-youtube.png',
        'text' => 'Youtube',
    ],
    [
        'href' => '#',
        'src' => './img/footer-pinterest.png',
        'text' => 'Pinterest',
    ],
    [
        'href' => '#',
        'src' => './img/footer-periscope.png',
        'text' => 'Periscope',
    ],
];
@endphp
<ul class="social_list">
    @foreach ($links as $link)
        <li class="list_item">
            <a href="{{ $link['href'] }}" class="item_link">
                <img src="{{ @asset($link['src']) }}" alt="{{ $link['text'] }}" />
            </a>
        </li>
    @endforeach
</ul>
