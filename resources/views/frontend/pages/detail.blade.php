@extends('frontend.layout.master')
@section('title', 'Hostels Details')
@section('filter-css')

    <link href="{{ url('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css') }}"
        rel="stylesheet" />
    <link href="{{ url('https://www.insightindia.com/mcss/icon-font.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/extra/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/extra/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/extra/assets/css/detail.css') }}">


@endsection
@section('main-content')


<div class="hostel_panel">
    <div class="hostel_store">

        <div class="htld__wrap">
            <div class="htld__easymenu">
                <ul class="easymenu__list" id="nav">
                    <li class="easymenu__item">
                        <a href="#"> Photos </a>
                    </li>

                    <li class="easymenu__item">
                        <a href="#"> Map </a>
                    </li>
                    <li class="easymenu__item">
                        <a href="#"> Nearby Landmarks </a>
                    </li>

                </ul>
            </div>
            <div class="list__item" id="detail">
                <div class="room__images demo-gallery">
                    <span class="percent__off">
                        <span class="percent__val">
                            <a href="" style="text-decoration: none; color: white;"> Call</a>
                        </span>

                    </span>
                    <div class="main-img-slider">
                        <a data-fancybox="gallery" href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                            <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}" class="img-fluid">
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                            <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}" class="img-fluid">
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                            <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}" class="img-fluid">
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                            <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}" class="img-fluid">
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                            <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}" class="img-fluid">
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                            <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}" class="img-fluid">
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                            <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}" class="img-fluid">
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                            <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}" class="img-fluid">
                        </a>
                    </div>

                </div>
            </div>
            <div class="htld__content">
                <div class="hostel_row">
                    <div class="col-md-8 col-sm-12 col-12">
                        <div class="htld__master">
                            <div class="htld__info">
                                <div class="htld__detail">
                                    <h1 class="htld__name">
                                        Hostel Himal
                                    </h1>
                                    <span class="htld__loc">
                                        Kathmandu Nepal
                                    </span>
                                </div>
                                <div class="htld__rate__wrap">
                                    <div class="htld__rateT">
                                        4.1
                                        <span class="rate__icon">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="htld__rateD">
                                        159
                                        <span>Ratings</span>
                                    </div>
                                </div>
                            </div>
                            <div class="htld__info">
                                <div class="inc_htld_info" id="">
                                    <div name="">
                                        <div class="">
                                            <div class="inc__title">Description</div>
                                            <div itemprop="description">
                                                <div class="inc__desc">
                                                    <p>
                                                        Spend your vacation in the beautiful state of Goa at one
                                                        of the most popular hotels. Located 7 km from Aguada
                                                        Fort and 20 km from Dona Paula View Point, SPOT ON 36887
                                                        PS Guest House is a top-rated hotel in Goa. The rooms
                                                        are equipped with CCTV Cameras and Spa. Guests can enjoy
                                                        24/7 checkin and stay with comfort at affordable prices
                                                        throughout their stay.<br>
                                                        <strong><br>Special Features</strong><br>
                                                        The rooms at the hotel come
                                                        equipped with AC, TV and an attached bathroom. There is
                                                        also a fan to keep cool during the warmer
                                                        months.<br><br>Soothe your soul and comfort your body
                                                        with a stay at our hotel. With amenities like Power
                                                        backup, Housekeeping and Fire-Extinguisher; we will make
                                                        sure you have a pleasant stay.<br><br>
                                                        <strong>Location &amp; Transportation</strong><br>
                                                        The accommodation is 21 km away from Basilica of Bom
                                                        Jesus, 5 km away from
                                                        Sinquerim Beach and 43 km away from Colva Beach. Guests
                                                        will be just 39 km from Vasco-Da-Gama Railway Station.
                                                        Nearest airport is Dabolim Airport, 38 km from the
                                                        hotel.<br><br>
                                                        <strong>★</strong> Travelling with partner? You're in
                                                        luck, this hotel has served more than
                                                        3000 couple stays as an OYO Host.<br>
                                                        <strong>★</strong> SPOT ON 36887 PS Guest House has been
                                                        delighting guests
                                                        since 17 Apr 2019.<br><br>
                                                        Distance in property
                                                        description is calculated using © OpenStreetMap
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="inc__show">Show less</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="inc_htld_info" id="">
                                    <div name="">
                                        <div>
                                            <div class="inc__title">Amenities</div>
                                            <div class="inc__ammi__main">
                                                <div class="inc__ammi">
                                                    <span lazyload="true" class="ammi__icon">
                                                        <svg width="22px" height="22px" viewBox="0 0 22 22"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <!-- Generator: Sketch 52.3 (67297) - http://www.bohemiancoding.com/sketch -->
                                                            <title>checkmark</title>
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-2" stroke="none" stroke-width="1"
                                                                fill="none" fill-rule="evenodd">
                                                                <g id="new-icon-set-(exportable)"
                                                                    transform="translate(-121.000000, -698.000000)"
                                                                    fill="black">
                                                                    <path
                                                                        d="M132,720 C129.061263,720 126.299684,718.856 124.221263,716.778737 C122.142842,714.701474 121,711.938737 121,709.001158 C121,706.062421 122.144,703.300842 124.221263,701.222421 C126.298526,699.144 129.061263,698 132,698 C134.938737,698 137.700316,699.144 139.778737,701.222421 C141.857158,703.300842 143,706.062421 143,709.001158 C143,711.939895 141.856,714.701474 139.778737,716.778737 C137.701474,718.856 134.938737,720 132,720 L132,720 Z M132,699.157895 C137.427053,699.157895 141.842105,703.572947 141.842105,709 C141.842105,714.427053 137.427053,718.842105 132,718.842105 C126.572947,718.842105 122.157895,714.427053 122.157895,709 C122.157895,703.572947 126.572947,699.157895 132,699.157895 Z M129.684211,713.631579 L129.681895,713.631579 C129.830105,713.631579 129.978316,713.576 130.091789,713.462526 L138.197053,705.357263 C138.422842,705.131474 138.422842,704.764421 138.197053,704.538632 C137.971263,704.312842 137.604211,704.312842 137.378421,704.538632 L129.683053,712.234 L126.619263,709.170211 C126.393474,708.944421 126.026421,708.944421 125.800632,709.170211 C125.574842,709.396 125.574842,709.763053 125.800632,709.988842 L129.274316,713.462526 C129.387789,713.574842 129.536,713.631579 129.684211,713.631579 Z"
                                                                        id="checkmark"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ammi__item__name">AC</div>

                                                </div>
                                                <div class="inc__ammi">
                                                    <span lazyload="true" class="ammi__icon">

                                                        <svg width="22px" height="22px" viewBox="0 0 22 22"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <!-- Generator: Sketch 52.3 (67297) - http://www.bohemiancoding.com/sketch -->
                                                            <title>checkmark</title>
                                                            <desc>Created with Sketch.</desc>
                                                            <g id="Page-2" stroke="none" stroke-width="1"
                                                                fill="none" fill-rule="evenodd">
                                                                <g id="new-icon-set-(exportable)"
                                                                    transform="translate(-121.000000, -698.000000)"
                                                                    fill="black">
                                                                    <path
                                                                        d="M132,720 C129.061263,720 126.299684,718.856 124.221263,716.778737 C122.142842,714.701474 121,711.938737 121,709.001158 C121,706.062421 122.144,703.300842 124.221263,701.222421 C126.298526,699.144 129.061263,698 132,698 C134.938737,698 137.700316,699.144 139.778737,701.222421 C141.857158,703.300842 143,706.062421 143,709.001158 C143,711.939895 141.856,714.701474 139.778737,716.778737 C137.701474,718.856 134.938737,720 132,720 L132,720 Z M132,699.157895 C137.427053,699.157895 141.842105,703.572947 141.842105,709 C141.842105,714.427053 137.427053,718.842105 132,718.842105 C126.572947,718.842105 122.157895,714.427053 122.157895,709 C122.157895,703.572947 126.572947,699.157895 132,699.157895 Z M129.684211,713.631579 L129.681895,713.631579 C129.830105,713.631579 129.978316,713.576 130.091789,713.462526 L138.197053,705.357263 C138.422842,705.131474 138.422842,704.764421 138.197053,704.538632 C137.971263,704.312842 137.604211,704.312842 137.378421,704.538632 L129.683053,712.234 L126.619263,709.170211 C126.393474,708.944421 126.026421,708.944421 125.800632,709.170211 C125.574842,709.396 125.574842,709.763053 125.800632,709.988842 L129.274316,713.462526 C129.387789,713.574842 129.536,713.631579 129.684211,713.631579 Z"
                                                                        id="checkmark"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ammi__item__name">WiFi</div>
                                                </div>
                                                <div class="inc__ammi">
                                                    <span lazyload="true" class="ammi__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="21" viewBox="0 0 22 21">
                                                            <path fill="black" fill-rule="evenodd"
                                                                d="M20.62 0H1.38C.619 0 0 .619 0 1.38V13.76c0 .761.619 1.38 1.38 1.38h9.131v1.97c-1.547.05-2.993.334-4.113.814-1.369.587-2.122 1.417-2.122 2.339 0 .27.219.489.489.489h12.47c.27 0 .49-.219.49-.489 0-.922-.755-1.752-2.123-2.339-1.12-.48-2.566-.764-4.113-.813v-1.97h9.131c.761 0 1.38-.62 1.38-1.38V1.38C22 .619 21.38 0 20.62 0zm-4.049 19.775H5.429c.238-.34.708-.674 1.354-.951 1.119-.48 2.616-.743 4.217-.743 1.6 0 3.098.264 4.217.743.646.277 1.116.612 1.354.951zm4.451-6.014c0 .222-.18.402-.402.402H1.38a.402.402 0 0 1-.402-.402V1.38c0-.222.18-.402.402-.402h19.24c.222 0 .402.18.402.402V13.76zM19.284 2.227H2.716a.489.489 0 0 0-.489.489v9.71c0 .27.219.488.489.488h16.568c.27 0 .49-.219.49-.489v-9.71a.489.489 0 0 0-.49-.488zm-.489 9.71H3.205V3.204h15.59v8.731z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <div class="ammi__item__name">TV</div>

                                                </div>
                                                <div class="inc__ammi">
                                                    <span lazyload="true" class="ammi__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            id="power-back-up" viewBox="0 0 18 16">
                                                            <path
                                                                d="M17.55 2.175H16.5v-.337C16.5.9 15.75.15 14.812.15c-.937 0-1.687.75-1.687 1.688v.337h-8.25v-.337C4.875.9 4.125.15 3.187.15 2.25.15 1.5.9 1.5 1.838v.337H.45c-.225 0-.375.15-.375.375v12.075c0 .225.15.375.375.375h17.063c.224 0 .374-.15.374-.375V2.55c.038-.225-.15-.375-.337-.375zm-3.675-.337c0-.526.412-.938.938-.938.524 0 .937.412.937.937v.338h-1.875v-.337zm-11.588 0c0-.526.413-.938.938-.938.525 0 .937.412.937.937v.338H2.288v-.337zM17.175 14.25H.825V2.925h16.313V14.25h.037z">
                                                            </path>
                                                            <path
                                                                d="M7.088 9h2.887l-3.112 3.113c-.376.375.187.862.524.524l3.75-3.75c.263-.262.113-.637-.225-.637H8.025l3.15-3.15c.337-.337-.188-.9-.525-.525l-3.825 3.75C6.6 8.588 6.75 9 7.088 9z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <div class="ammi__item__name">Power backup</div>
                                                </div>
                                                <div class="inc__ammi">
                                                    <span lazyload="true" class="ammi__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="15" viewBox="0 0 22 15">
                                                            <path fill="black" fill-opacity=".999"
                                                                fill-rule="evenodd"
                                                                d="M0 1.25a.5.5 0 0 0 .031.164l3.25 9.25A.5.5 0 0 0 3.75 11h3v2.25c0 .424-.326.75-.75.75H2.75a.5.5 0 1 0 0 1H6c.96 0 1.75-.79 1.75-1.75V11H18a.5.5 0 0 0 .5-.5V9.25h3a.5.5 0 0 0 .5-.5v-6.5a.5.5 0 0 0-.5-.5h-3V.5A.5.5 0 0 0 18 0H1.25C.566 0 0 .566 0 1.25zm1.351-.15H17.4v8.8H7.37a.499.499 0 0 0-.193 0h-3.01L1.12 1.305c.02-.118.105-.207.231-.207zM15 2c-.823 0-1.5.677-1.5 1.5S14.177 5 15 5s1.5-.677 1.5-1.5S15.823 2 15 2zm3.4.75H21v5.5h-2.6v-5.5zM15 2.9c.338 0 .6.261.6.6 0 .338-.262.6-.6.6a.591.591 0 0 1-.6-.6c0-.339.262-.6.6-.6z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <div class="ammi__item__name">CCTV Cameras</div>

                                                </div>
                                                <div class="inc__ammi">
                                                    <span lazyload="true" class="ammi__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" id="spa"
                                                            viewBox="0 0 22 21">
                                                            <path
                                                                d="M3.41 14.467l2.117-6.435c.37-1.12 1.416-1.878 2.595-1.878 1.18 0 2.224.763 2.582 1.888.742 2.333 1.3 4.083 1.67 5.25l.41-.055c1.577-.207 3.023.905 3.23 2.482.016.123.024.25.024.374 0 1.614-1.308 2.923-2.923 2.923h-10.5C1.447 19.017.5 18.07.5 16.9c0-1.174.87-2.167 2.037-2.32l.874-.114zm6.122-.804l-.42-.903-.405 1.01.825-.107zm1.83-.24c-.01-.038-.013-.058-.014-.06L9.75 8.346c-.225-.71-.883-1.19-1.628-1.19-.748 0-1.41.48-1.645 1.19l-1.964 5.97 3.063-.408.78-1.948c.075-.19.22-.344.404-.43.4-.186.877-.012 1.063.39l.74 1.588.78-.082.02-.003zm-1.88-7.885c-1.393 0-2.52-1.127-2.52-2.52C6.962 1.63 8.09.5 9.482.5 10.87.5 12 1.628 12 3.02c0 1.39-1.128 2.518-2.52 2.518zm0-1c.838 0 1.518-.68 1.518-1.52C11 2.18 10.32 1.5 9.48 1.5c-.838 0-1.518.68-1.518 1.52 0 .838.68 1.518 1.52 1.518zm9.69 14.73c-1.39 0-2.518-1.127-2.518-2.518 0-1.39 1.128-2.52 2.52-2.52 1.39 0 2.518 1.13 2.518 2.52 0 1.39-1.128 2.52-2.52 2.52zm0-1c.84 0 1.52-.68 1.52-1.518 0-.84-.68-1.52-1.52-1.52-.838 0-1.518.68-1.518 1.52s.68 1.52 1.52 1.52zM3.41 14.47v.002l5.293-.69.004-.01-5.296.696zm8.964-1.177l-1.01.133-.02.003-1.812.237 2.843-.368v-.003zm2.664 2.804c0-.082-.005-.164-.015-.245-.136-1.03-1.08-1.756-2.11-1.62L2.667 15.57C2 15.66 1.5 16.228 1.5 16.902c0 .615.5 1.115 1.115 1.115h10.5c1.062 0 1.923-.86 1.923-1.923zM1.808 21c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h18.647c.276 0 .5.224.5.5s-.224.5-.5.5H1.808z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <div class="ammi__item__name">Spa</div>

                                                </div>
                                            </div>
                                            <div class="c-1vevh8c"><span>Show More</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="htld__avlwrap">
                            <div class="htld__avl__top">
                                <div class="avl__top__wrap">
                                    <div class="avl__top__left">

                                        <span class="avl__title">
                                            Search Hostels
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="htld__avl__bottom">

                                <div class="avl__selectroom">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('filter-js')
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/extra/assets/js/app.js') }}"></script>
@endsection
