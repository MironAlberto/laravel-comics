@php
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ]
    ];
@endphp

<header>
    <section class="bg-blue">
        <div class="container d-flex justify-content-end">
            <div class="py-1">
                <span class="text-white me-3">
                    <small>
                        <strong>
                            DC POWER™VISA© 
                        </strong>
                    </small>
                </span>
                <span class="ms-5 text-white">
                    <small>
                        <strong>
                            ADDITIONAL DC SITES
                        </strong>
                    </small>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <nav class="d-flex">
                <div class="py-3 logo-box">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
                </div>
                <ul class="py-5">
                    @foreach ($links as $link)
                        <li>
                            @if ($link['active'])
                                <a href="{{ $link['url'] }}">
                                    {{ $link['label'] }}
                                </a>
                            @else
                                <a>
                                    {{ $link['label'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
                <div class="py-5 ps-5 search">
                    <span>
                        Search
                    </span>
                </div>

            </nav>
        </div>
    </section>
</header>
