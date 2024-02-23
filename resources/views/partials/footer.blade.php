@php
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'  
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ]
@endphp

<footer>
    <section>
        <div class="container d-flex">
            <div class="row">
                <div class="col-auto d-flex pt-5">
                    @foreach ($footerLinks as $key => $links)
                        <ul>
                            <h4>
                                {{ $key }}
                            </h4>
                            @foreach ($links as $link)
                                <li>
                                    <a href="#nogo">
                                        {{ $link }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                <div class="text col-auto">
                    All Site Content™ and © 2023 DC Entertainment, unless otherwise <span class="evid">noted here</span>. All rights reserved.
                    <span class="evid">Cookies Settings</span> 
                </div>
            </div>
            <div class="footer-bottom-image"></div>
        </div>
    </section>
    <section class="bg-gray">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <div class="button">
                <button>
                    <strong>
                        SIGN-UP NOW!
                    </strong>
                </button>
            </div>
            <div class="social-networks">
                <h4>
                    FOLLOW US
                </h4>
                @foreach ($socialNetworkLinks as $link)
                    <ul>
                        <li class="pt-2">
                            <img src="{{ Vite::asset('resources/img/' . $link ) }}" alt="{{ $link }}">
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </section>
</footer>
