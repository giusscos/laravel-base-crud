@php
$links = [
    [
        'title' => 'Dc comics',
        'links' => [
            [
                'href' => '#',
                'text' => 'Characters',
            ],
            [
                'href' => '#',
                'text' => 'Comics',
            ],
            [
                'href' => '#',
                'text' => 'Movies',
            ],
            [
                'href' => '#',
                'text' => 'Tv',
            ],
            [
                'href' => '#',
                'text' => 'Games',
            ],
            [
                'href' => '#',
                'text' => 'Videos',
            ],
            [
                'href' => '#',
                'text' => 'News',
            ],
        ],
        'title2' => 'Shop',
        'links2' => [
            [
                'href' => '#',
                'text' => 'Shop DC',
            ],
            [
                'href' => '#',
                'text' => 'Shop DC Collectibles',
            ],
        ],
    ],
    [
        'title' => 'Dc',
        'links' => [
            [
                'href' => '#',
                'text' => 'Terms of use',
            ],
            [
                'href' => '#',
                'text' => 'Privacy policy (New)',
            ],
            [
                'href' => '#',
                'text' => 'Ad Choices',
            ],
            [
                'href' => '#',
                'text' => 'Advertising',
            ],
            [
                'href' => '#',
                'text' => 'Jobs',
            ],
            [
                'href' => '#',
                'text' => 'Subscriptions',
            ],
            [
                'href' => '#',
                'text' => 'Talent Workshops',
            ],
            [
                'href' => '#',
                'text' => 'CPSC Certificates',
            ],
            [
                'href' => '#',
                'text' => 'Ratings',
            ],
            [
                'href' => '#',
                'text' => 'Shop help',
            ],
            [
                'href' => '#',
                'text' => 'Contact us',
            ],
        ],
        'title2' => '',
        'links2' => [],
    ],
    [
        'title' => 'Sites',
        'links' => [
            [
                'href' => '#',
                'text' => 'Dc',
            ],
            [
                'href' => '#',
                'text' => 'MAD Magazine',
            ],
            [
                'href' => '#',
                'text' => 'DC Kids',
            ],
            [
                'href' => '#',
                'text' => 'DC Universe',
            ],
            [
                'href' => '#',
                'text' => 'DC Power visa',
            ],
        ],
        'title2' => '',
        'links2' => [],
    ],
];
@endphp
<div class="banner menu">
    <div class="container">
        <div class="footer_menu">
            @foreach ($links as $link)
                <div class="menu_item">
                    <h3 class="item_title">
                        {{ $link['title'] }}
                    </h3>
                    <ul class="item_list-wrapper">
                        @foreach ($link['links'] as $item)
                            <li class="list_item">
                                <a href="{{ $item['href'] }}" class="item_link capitalize">
                                    {{ $item['text'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <h3 class="item_title">
                        {{ $link['title2'] }}
                    </h3>
                    <ul class="item_list-wrapper">
                        @foreach ($link['links2'] as $item2)
                            <li class="list_item">
                                <a :href="{{ $item2['href'] }}" class="item_link capitalize">
                                    {{ $item2['text'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <p class="info_footer-menu">
            All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href='#' class="info_link">noted here</a>. All rights reserved.<br>
            <a href="#" class="info_link">Cookie Settings</a>
        </p>
    </div>
</div>
