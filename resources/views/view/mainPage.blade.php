@extends('partial.layout')


@section('content')

    <section class="container-fluid d-flex justify-content-between p-0">

        <div class="slider__container d-flex flex-column justify-content-center align-items-center">
            <h1 class="fs-4 text-white text-center mx-5">@lang('mainPage.sliderContent')</h1>
            <div class="mt-2">
                <button class="btn btn-gold me-1 slider__button">@lang('mainPage.viewProduct')</button>
                <button class="ms-2 btn btn-gold-inline slider__button">@lang('mainPage.sendRequest')</button>
            </div>
        </div>

        <div class="slider__container">
            <picture>
                <source srcset="/files/slider.webp" type="image/webp">
                <img src="/files/slider.jpg" class="slider__image" loading="lazy">
            </picture>
        </div>

    </section>


    <section class="container-fluid">
        <h2 class="text-center text-white my-5 fs-3">@lang('mainPage.ourProducts')</h2>
        <div class="container-1920 row g-3 px-3">
            @for($i = 0; $i < 6; $i++)
                <div class="col-6 col-md-4 smallBanners">
                    <div>
                        <picture>
                            <source srcset="/files/banner_small.webp" type="image/webp">
                            <img src="/files/banner_small.jpg" loading="lazy" class="smallBanners__image">
                        </picture>
                    </div>
                    <div class="smallBanners__containerLink d-flex flex-column">
                        <span class="smallBanners__title fs-5">@lang('mainPage.oliver')</span>
                        <a class="smallBanners__link">@lang('mainPage.viewMore')</a>
                    </div>

                </div>
            @endfor
        </div>
    </section>

    <section class="bg-gray container-fluid py-5 mt-5 d-flex flex-column collaboration">
        <p class="text-center text-white mb-5 fs-1">@lang('mainPage.cooperation')</p>
        <div class="container-1920 row mx-1 mx-md-5 px-md-5 g-5 g-md-0 collaboration">
            @for($i = 1; $i < 5; $i++)
                <div class="col-6 col-md-3 d-flex collaboration__column">
                    <b class="collaboration__number mb-5 ps-3">{{ $i }}</b>
                    <p class="ps-2 fs-7">
                        @switch($i)
                            @case('1')
                                @lang('mainPage.contactAboutProduct')
                                @break;
                            @case('2')
                                @lang('mainPage.sendOffers')
                                @break;
                            @case('3')
                                @lang('mainPage.sendCompleteOrder')
                                @break;
                            @case('4')
                                @lang('mainPage.realizationOrder')
                                @break;
                        @endswitch
                    </p>
                </div>
            @endfor
        </div>
    </section>

    @include('component.formContact')
@endsection
