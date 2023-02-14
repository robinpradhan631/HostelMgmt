@extends('frontend.layout.master')
@section('title', 'Hostels')
@section('filter-css')

    <link href="{{ url('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css') }}"
        rel="stylesheet" />
    <link href="{{ url('https://www.insightindia.com/mcss/icon-font.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/extra/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/extra/assets/css/responsive.css') }}">

@endsection
@section('main-content')

    <div class="hostel_store">
        <div class="hostel_panel">
            <div class="hostel_row">
                <div class="col-md-3 col-sm-12 col-12 tab_none">
                    <aside class="bar__wrap shadow-sm">

                        <div class="bar__filters">
                            <div class="bar__filters__wrap">
                                <div class="bar__filters__item">
                                    <div class="range__picker">
                                        <h4> Hostels Name </h4>

                                    </div>
                                </div>
                            </div>
                            <div class="bar__filters__wrap">
                                <div class="bar__filters__item">
                                    <div class="range__picker">
                                        <h4> Districts </h4>

                                    </div>
                                </div>
                            </div>
                            <div class="bar__filters__wrap">
                                <div class="bar__filters__item">
                                    <div class="checkBoxGroup">
                                        <h4> City </h4>
                                        <div class="form__wrap">

                                        </div>
                                    </div>
                                </div>
                                <div class="bar__filters__item">
                                    <div class="checkBoxGroup">
                                        <h4> Gender </h4>
                                        <div class="form__wrap">
                                            <div class="form-check">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9 col-sm-12 col-12">
                    <div class="listing__content">
                        <div class="listing__cnt__wrap">
                            <div class="listingCntHeader">
                                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Nepal</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href=""> Kathmandu </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <a href="">
                                                Hostels
                                            </a>
                                        </li>
                                    </ol>
                                </nav>
                                <div class="listingCntTitle">
                                    <span>
                                        <h4>
                                            Hostels in Lazimpat
                                        </h4>
                                    </span>
                                    <div class="dropdown media__show">
                                        <span class="dropdown__label">Sort By</span>
                                        <span tabindex="-1" class="dropdown__select">Popularity
                                            <span lazyload="true" class="dropdown__icon">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                            <ul class="dropdown__list">
                                                <li class="dropdown__item"><span>Popularity &nbsp;</span></li>
                                                <li class="dropdown__item"><span>Guest Ratings &nbsp;</span></li>
                                                <li class="dropdown__item"><span>Price Low to High &nbsp;</span>
                                                </li>
                                                <li class="dropdown__item"><span>Price High to Low &nbsp;</span>
                                                </li>
                                                <li class="dropdown__item"><span>Show Closest Hostel &nbsp;</span></li>
                                            </ul>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="listCnt__divider"></div>
                            <div class="list__item" id="filter">
                                <div class="hostel_row">
                                    <div class="col-md-4 col-12">
                                        <div class="room__images demo-gallery">

                                            <div class="main-img-slider">
                                                <a data-fancybox="gallery"
                                                    href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                                                    <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}"
                                                        class="img-fluid">
                                                </a>
                                                <a data-fancybox="gallery"
                                                    href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                                                    <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}"
                                                        class="img-fluid">
                                                </a>
                                                <a data-fancybox="gallery"
                                                    href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                                                    <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}"
                                                        class="img-fluid">
                                                </a>
                                                <a data-fancybox="gallery"
                                                    href="{{ asset('frontend/extra/assets/images/pic.webp') }}">
                                                    <img src="{{ asset('frontend/extra/assets/images/pic.webp') }}"
                                                        class="img-fluid">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12">
                                        <div class="list__disc">
                                            <div class="htl_amenity_disc">
                                                <div class="htl__name">
                                                    <a href="">
                                                        Brothers Apartment
                                                    </a>
                                                </div>
                                                <div class="htl__address">
                                                    <span title="">Near Lazimpat, Ranibari, Kathmandu</span>
                                                    <span title="view map" class="view__map">
                                                        <i class="fas fa-map-marker-alt text-danger"></i>
                                                    </span>

                                                </div>
                                                <div class="htl__rating">
                                                    <div class="htl__rateVal">
                                                        <span>3.5</span>
                                                        <span class="rating__star">
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <div class="rating__summary">(24 Ratings)</div>
                                                    <span class="htlRating__dot">·</span>

                                                </div>
                                                <div class="htl__amenity_wrap">
                                                    <div class="htl_amenity_item">
                                                        <span class="htl_amenity_icon">
                                                            <i class="far fa-wifi"></i>
                                                        </span>
                                                        <span class="htl_amenity_title">
                                                            Free WIFI
                                                        </span>
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="htl_amenity_price">
                                                <div class="hostel_row item_sketchs">
                                                    <div class="col-md-5">
                                                        <div class="listPrice">
                                                            <div class="listPrice__perRoomNight">per month
                                                            </div>
                                                            <div class="listPrice__numbers">
                                                                <span class="listPrice__finalPrice">NPR1504</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="list__btnwrap">
                                                            <a href="" class="view_details"> View Details </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-filter">
                <div class="block-item">
                    <i class="fas fa-sort-amount-down"></i>
                    <span> Sort </span>
                </div>
                <div class="block-item sknav bk-color" id="bg_filter">
                    <i class="fas fa-filter"></i>
                    <span> Filter </span>
                </div>
            </div>
        </div>

        <div class="vis_toc"></div>
        <div class="sticky-side-menu side-open">
            <span class="closeThes" style="display: inline;"><i class="fas fa-times"></i></span>
            <div class="sidemnu">
                <div class="bar__filters">
                    <div class="bar__filters__wrap">
                        <div class="bar__filters__item">
                            <div class="range__picker">
                                <h4> Price </h4>
                                <div class="price-slider">Rs. <span>
                                        <input type="number" value="5000" min="0" max="200000" />
                                        <input type="number" value="50000" min="0" max="200000" /></span>
                                    <input value="25000" min="0" max="200000" step="500"
                                        type="range" />
                                    <input value="50000" min="0" max="200000" step="500"
                                        type="range" />
                                    <svg width="100%" height="25">
                                        <line x1="5" y1="0" x2="300" y2="0"
                                            stroke="#ee2a24" stroke-width="12" stroke-dasharray="3 28"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bar__filters__wrap">
                        <div class="bar__filters__item">
                            <div class="checkBoxGroup">
                                <h4> Collections </h4>
                                <div class="form__wrap">
                                    <div class="form-check">
                                        <input class="check-input" type="checkbox" value="" id="flexCheck1">
                                        <label class="check-label" for="flexCheck1">
                                            Heritage OYO's
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="check-input" type="checkbox" value="" id="flexCheck2">
                                        <label class="check-label" for="flexCheck2">
                                            Heritage OYO's
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="check-input" type="checkbox" value="" id="flexCheck3">
                                        <label class="check-label" for="flexCheck3">
                                            Heritage OYO's
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="check-input" type="checkbox" value="" id="flexCheck4">
                                        <label class="check-label" for="flexCheck4">
                                            Heritage OYO's
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bar__filters__item">
                            <div class="checkBoxGroup">
                                <h4> Catagories </h4>
                                <div class="form__wrap">
                                    <div class="form-check">
                                        <input class="check-input" type="checkbox" value="" id="flexCheck5">
                                        <label class="check-label" for="flexCheck5">
                                            Heritage OYO's
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="check-input" type="checkbox" value="" id="flexCheck6">
                                        <label class="check-label" for="flexCheck6">
                                            Heritage OYO's
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="check-input" type="checkbox" value="" id="flexCheck7">
                                        <label class="check-label" for="flexCheck7">
                                            Heritage OYO's
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="check-input" type="checkbox" value="" id="flexCheck8">
                                        <label class="check-label" for="flexCheck8">
                                            Heritage OYO's
                                        </label>
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
