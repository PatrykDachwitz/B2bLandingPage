@extends('partial.layout',[
    'menu' => 'menu--product'
])


@section('content')

<section class="row container-1920 mb-0 mx-0" style="margin-top: 150px !important;">
    <div class="col-12 col-lg-6 position-relative">
        <div class="gallery flex-column-reverse flex-lg-row d-flex">
            <div class="d-flex gallery__container--miniImage overflow-hidden flex-lg-column mx-lg-3 mt-2 mt-lg-0">
                <div class="gallery__miniContainer--main flex-lg-column d-flex position-relative">
                    @for($i = 1; $i <= $gallery; $i++)
                        <div class="mb-lg-2 me-2 me-lg-0 d-lg-none gallery__mainContainer--image" data-gallery-small="{{ $i }}">
                            <img src="/files/gallery/{{ $product }}/{{ $i }}.jpg" width="80">
                        </div>
                    @endfor
                </div>
                <div class="position-absolute gallery__button--down gallery__button" >
                    <picture>
                        <source srcset="/files/icons/arrow.webp" type="image/webp" >
                        <img src="/files/icons/arrow.png" loading="lazy" width="40" height="40">
                    </picture>
                </div>

                <div class="position-absolute gallery__button gallery__button--up" style="display: none">
                    <picture>
                        <source srcset="/files/icons/arrow.webp" type="image/webp" >
                        <img src="/files/icons/arrow.png" loading="lazy" width="40" height="40">
                    </picture>
                </div>
            </div>
            <div class="gallery__mainContainer">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-galler-index="1">
                            <img src="/files/gallery/{{ $product }}/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        @for($i = 2; $i <= $gallery; $i++)
                            <div class="carousel-item" data-galler-index="{{ $i }}">
                                <img src="/files/gallery/{{ $product }}/{{ $i }}.jpg" class="d-block w-100" alt="...">
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-5 d-flex flex-column align-items-start text-white">
        <h1 class="fs-2 m-0 py-3 py-lg-0">{{ __($product . ".title") }}</h1>
        <p class="fs-6 text-gray-footer">{{ __($product . ".description") }}</p>
        @if(is_array(__($product . ".sizes")))
        <h2 class="fs-5">{{ __($product . ".standardSize") }} <span class="text-gray-footer">[cm]</span></h2>
        <div class="row g-5">
                @foreach(__($product . ".sizes") ?? [] as $size)
                    <div class="col-4">
                        <h3 class="fs-6">{{ $size['title'] }} <span class="text-gray-footer">{{ $size['titleSecond'] }}</span></h3>
                        <ul class="list-unstyled">
                            @foreach($size['option'] ?? [] as $optionSize)
                                <li class="fs-6">{{ $optionSize }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
        </div>
        @endif
        <ul class="list-unstyled fs-6">
            <li>
                <picture>
                    <source srcset="/files/icons/check.webp" type="image/webp">
                    <img src="/files/icons/check.png" alt="arrow" loading="lazy" height="20" width="20">
                </picture> {!! __($product . ".ProductionForClient") !!}
            </li>
            <li>
                <picture>
                    <source srcset="/files/icons/check.webp" type="image/webp">
                    <img src="/files/icons/check.png" alt="arrow" loading="lazy" height="20" width="20">
                </picture> {!! __($product . ".colorAvailable") !!}
            </li>
            <li>
                <picture>
                    <source srcset="/files/icons/check.webp" type="image/webp">
                    <img src="/files/icons/check.png" alt="arrow" loading="lazy" height="20" width="20">
                </picture> <a class="text-decoration-underline text-white">{!! __($product . ".downloadMaterial") !!}</a>
            </li>
        </ul>
        <div><a href="#contactForm" class="btn btn-gold fs-6">{{ __($product . ".getPriceProduct") }}</a></div>
        <div>
            <h3 class="fs-5 mt-3"><i>{{ __($product . ".contact") }}</i></h3>
            <ul class="d-flex flex-column flex-xl-row justify-content-start list-unstyled">
                <li>
                    <a href="{{ config("shop.whatsApp") }}" class="text-decoration-none text-white fs-6">
                        <picture>
                            <source srcset="/files/icons/whatsapp.webp" type="image/webp">
                            <img src="/files/icons/whatsapp.png" alt="arrow" loading="lazy" height="30" width="30">
                        </picture>  <i>WhatsApp</i>
                    </a>
                </li>
                <li class="mt-3 mt-lg-0 ms-lg-3">
                    <a href="tel: {{ config("shop.phone") }}" class="text-decoration-none text-white fs-6">
                    <picture>
                        <source srcset="/files/icons/telephone.webp" type="image/webp">
                        <img src="/files/icons/telephone.png" alt="arrow" loading="lazy" height="30" width="30">
                    </picture> <i>{{ config("shop.phone") }}</i>
                    </a>
                </li>
                <li class="mt-3 mt-lg-0 ms-lg-3">
                    <a href="mailto: {{ config("shop.mailContact") }}" class="text-decoration-none text-white fs-6">
                        <picture>
                            <source srcset="/files/icons/email.webp" type="image/webp">
                            <img src="/files/icons/email.png" alt="arrow" loading="lazy" height="30" width="30">
                        </picture> <i>{{ config("shop.mailContact") }}</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="container-1920 overflow-hidden d-flex flex-column mt-2">
    <div class="border-bottom fw-bold">
        <button class="btn btn-gold px-5 fs-6">{{ __($product . ".descriptionAdditional") }}</button>
    </div>


    @include('component.product.carousel', [
        'title' => __($product . ".decorTitle"),
        'countDecor' => $countDecor,
        'product' => $product,
    ])

    <div class="text-white mt-4">
        <span class="fs-1 ms-2 ms-lg-5">{{ __($product . ".availableForm") }}</span>
        <div class="d-flex mt-4">
            @for($j = 0; $j < 20; $j++)
                <div class="mx-1">
                    <picture>
                        <source srcset="/files/sliderProduct.webp" type="image/webp">
                        <img src="/files/sliderProduct.jpg" loading="lazy" height="300"/>
                    </picture>
                </div>
            @endfor
        </div>
    </div>
</section>

    @include('component.formContact', [
    'otherDescriptionFirst' => __($product . ".formContactFirst"),
    'otherDescriptionSecond' => __($product . ".formContactSecond")
])


@vite([
'resources/js/product.js',
])

@endsection
