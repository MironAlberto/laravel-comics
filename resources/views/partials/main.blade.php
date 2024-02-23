@yield('main-content')

@php
    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ]
@endphp

<main>
    <section class="container d-flex flex-column align-items-center">
        <div class="content">
            CURRENT SERIES
        </div>
        <div class="cards">
            @foreach ($comics as $comic)
                <div class="my-card">
                    <img src="{{ $comic['thumb']}}" alt="thumb">

                    <h6>
                        {{ $comic['series']}}
                    </h6>
                </div>
            @endforeach
        </div>

        <button class="px-5">
            LOAD MORE
        </button>
    </section>
    <section class="bg-blue">
        <div class="container d-flex">
            @foreach ($mainLinks as $link)
                <div class="d-flex">
                    <div class="img-box py-4 ps-4 pe-2">
                        <img src="{{ Vite::asset('resources/img/' . $link['image']) }}" alt="{{ $link['text'] }}">
                    </div>
                    <div class="text d-flex align-items-center ps-1">
                        {{ $link['text'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>