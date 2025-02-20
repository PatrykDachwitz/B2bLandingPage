@extends('partial.ae.layout')


@section('content')

    <section class="container-fluid d-flex flex-column flex-md-row justify-content-between p-0 px-md-3">

        <div class="slider__container">
            <picture>
                <source srcset="/files/slider_mobile.webp" media="(max-width:768px)" type="image/webp">
                <source srcset="/files/slider_mobile.jpg" media="(max-width:768px)" type="image/jpg">
                <source srcset="/files/slider_pc.webp" type="image/webp">
                <img src="/files/slider_pc.jpg" class="slider__image" loading="lazy">
            </picture>
        </div>

        <div class="slider__container d-flex flex-column justify-content-center align-items-center">
            <h1 class="fs-4 text-white text-center mx-5 mt-3 mt-md-0 fw-normal">@lang('mainPage.sliderContent')</h1>
            <div class="mt-2 d-flex flex-column flex-md-row align-items-center">
                <a class="btn btn-gold me-md-1 slider__button fs-6" href="{{ route('mainPage') }}#products">@lang('mainPage.viewProduct')</a>
                <a class="ms-md-2 btn btn-gold-inline slider__button fs-6 mt-2 mt-md-0" href="#contactForm">@lang('mainPage.sendRequest')</a>
            </div>
        </div>



    </section>


    <section class="container-fluid mt-5 p-md-0 mx-0 overflow-hidden" id="products">
        <div class="container-1920 row g-3 px-3">
            <div class="col-6 col-lg-3 smallBanners">
               <a class="text-decoration-none" href="{{ route('product', ['product' => 'colorLine']) }}">
                   <div>
                       <picture>
                           <source srcset="/files/bannerColorLine.webp" type="image/webp">
                           <img src="/files/bannerColorLine.jpg" loading="lazy" class="smallBanners__image">
                       </picture>
                   </div>
                   <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                       <span class="smallBanners__title fs-4">@lang('mainPage.colorLine')</span>
                       <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                   </div>
               </a>

            </div>
            <div class="col-6 col-lg-3 smallBanners">
                <a class="text-decoration-none" href="{{ route('product', ['product' => 'stoneLine']) }}">
                    <div>
                        <picture>
                            <source srcset="/files/bannerStoneLine.webp" type="image/webp">
                            <img src="/files/bannerStoneLine.jpg" loading="lazy" class="smallBanners__image">
                        </picture>
                    </div>
                    <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                        <span class="smallBanners__title fs-4">@lang('mainPage.stoneLine')</span>
                        <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                    </div>
                </a>

            </div>
            <div class="col-6 col-lg-3 smallBanners">
                <a class="text-decoration-none" href="{{ route('product', ['product' => 'nolan']) }}">
                    <div>
                        <picture>
                            <source srcset="/files/bannerNolan.webp" type="image/webp">
                            <img src="/files/bannerNolan.jpg" loading="lazy" class="smallBanners__image">
                        </picture>
                    </div>
                    <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                        <span class="smallBanners__title fs-4">@lang('mainPage.nolan')</span>
                        <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                    </div>
                </a>

            </div>
            <div class="col-6 col-lg-3 smallBanners">
               <a class="text-decoration-none" href="{{ route('product', ['product' => 'solidLine']) }}">
                   <div>
                       <picture>
                           <source srcset="/files/bannerSolidLone.webp" type="image/webp">
                           <img src="/files/bannerSolidLone.jpg" loading="lazy" class="smallBanners__image">
                       </picture>
                   </div>
                   <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                       <span class="smallBanners__title fs-4">@lang('mainPage.solidLine')</span>
                       <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                   </div>
               </a>

            </div>
            {{--<div class="col-6 col-lg-3 smallBanners">
                <a class="text-decoration-none" href="{{ route('product', ['product' => 'gleamLine']) }}">
                    <div>
                        <picture>
                            <source srcset="/files/bannerGleamLine.webp" type="image/webp">
                            <img src="/files/bannerGleamLine.jpg" loading="lazy" class="smallBanners__image">
                        </picture>
                    </div>
                    <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                        <span class="smallBanners__title fs-4">@lang('mainPage.gleamLine')</span>
                        <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                    </div>
                </a>

            </div>--}}

            <div class="col-6 col-lg-3 smallBanners">
                <a class="text-decoration-none" href="{{ route('product', ['product' => 'losano']) }}">
                    <div>
                        <picture>
                            <source srcset="/files/bannerLosano.webp" type="image/webp">
                            <img src="/files/bannerLosano.jpg" loading="lazy" class="smallBanners__image">
                        </picture>
                    </div>
                    <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                        <span class="smallBanners__title fs-4">Losano</span>
                        <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                    </div>
                </a>

            </div>
            <div class="col-6 col-lg-3 smallBanners">
                <a class="text-decoration-none" href="{{ route('product', ['product' => 'zora']) }}">
                    <div>
                        <picture>
                            <source srcset="/files/bannerZora.webp" type="image/webp">
                            <img src="/files/bannerZora.jpg" loading="lazy" class="smallBanners__image">
                        </picture>
                    </div>
                    <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                        <span class="smallBanners__title fs-4">Zora</span>
                        <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                    </div>
                </a>

            </div>
            <div class="col-6 col-lg-3 smallBanners">
                <a class="text-decoration-none" href="{{ route('product', ['product' => 'steindekor']) }}">
                    <div>
                        <picture>
                            <source srcset="/files/bannerSteindekor.webp" type="image/webp">
                            <img src="/files/bannerSteindekor.jpg" loading="lazy" class="smallBanners__image">
                        </picture>
                    </div>
                    <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                        <span class="smallBanners__title fs-4">@lang('mainPage.steindekor')</span>
                        <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section class="bg-gray container-fluid pb-5 mt-5 d-flex flex-column collaboration" id="collaborationPath">
        <p class="text-center text-white m-0 fs-1 py-5">@lang('mainPage.cooperation')</p>
        <div class="container-1920 row mx-1 mx-md-5 px-md-5 g-5 g-md-0 collaboration flex-row-reverse">
            @for($i = 1; $i < 5; $i++)
                <div class="col-12 col-md-3 d-flex collaboration__column flex-row-reverse justify-content-md-start flex-md-column align-items-end align-items-md-start pe-md-3">
                    <b class="collaboration__number mb-md-5 ps-3">{{ $i }}</b>
                    <p class="ps-5 ps-md-2 fs-6">
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

    @include('component.ae.formContact')
@endsection
