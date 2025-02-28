@extends('partial.ae.layout',[
    'menu' => 'menu--product'
])


@section('content')

<section class="row container-1920 mb-0 mx-0 flex-row-reverse" style="margin-top: 150px !important;">
    <div class="col-12 col-lg-6 position-relative">
        <div class="gallery flex-column-reverse flex-lg-row-reverse justify-content-lg-end d-flex">
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
                        <img src="/files/icons/arrow.png" class="gallery__button--down--img" loading="lazy" width="40" height="40">
                    </picture>
                </div>

                <div class="position-absolute gallery__button gallery__button--up" style="display: none">
                    <picture>
                        <source srcset="/files/icons/arrow.webp" type="image/webp" >
                        <img src="/files/icons/arrow.png" class="gallery__button--up--img" loading="lazy" width="40" height="40">
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
    <div class="col-12 col-lg-5 d-flex flex-column align-items-end text-end text-white">
        <h1 class="fs-2 m-0 py-3 py-lg-0">{{ __($product . ".title") }}</h1>
        <p class="fs-6 text-gray-footer">{{ __($product . ".description") }}</p>

        @if(__($product . ".titleSecond") !== $product . ".titleSecond")
            <h1 class="fs-2 m-0 py-3 py-lg-0">{{ __($product . ".titleSecond") }}</h1>
        @endif

        @if(__($product . ".descriptionSecond") !== $product . ".descriptionSecond")
            <p class="fs-6 text-gray-footer">{{ __($product . ".descriptionSecond") }}</p>
        @endif

        @if(is_array(__($product . ".sizes")))
        <h2 class="fs-5">{{ __($product . ".standardSize") }} <span class="text-gray-footer">[@lang('mainPage.cm')]</span></h2>
        <div class="d-flex @if(count(__($product . ".sizes") ?? []) > 2) flex-column flex-lg-row @endif">
                @foreach(__($product . ".sizes") ?? [] as $size)
                    <div class="@if($loop->index > 0 & count(__($product . ".sizes") ?? []) <= 2) ms-4 @elseif($loop->index > 0) ms-lg-4 @endif">
                        <div class="d-flex">
                            <h3 class="fs-6">{{ $size['title'] }} <span class="text-gray-footer">{{ $size['titleSecond'] }}</span></h3>
                        </div>
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
                {!! __($product . ".ProductionForClient") !!}
                <picture>
                    <source srcset="/files/icons/check.webp" type="image/webp">
                    <img src="/files/icons/check.png" alt="arrow" loading="lazy" height="20" width="20">
                </picture>
            </li>
            <li>
                {!! __($product . ".colorAvailable") !!}
                <picture>
                    <source srcset="/files/icons/check.webp" type="image/webp">
                    <img src="/files/icons/check.png" alt="arrow" loading="lazy" height="20" width="20">
                </picture>
            </li>
            <li>
                <span class="text-white">{!! __($product . ".downloadMaterial") !!}</span>
                <picture>
                    <source srcset="/files/icons/check.webp" type="image/webp">
                    <img src="/files/icons/check.png" alt="arrow" loading="lazy" height="20" width="20">
                </picture>
            </li>
        </ul>
        <div><a href="#contactForm" class="btn btn-gold fs-6">{{ __($product . ".getPriceProduct") }}</a></div>
        <div>
            <h3 class="fs-5 mt-3"><i>{{ __($product . ".contact") }}</i></h3>
            <ul class="d-flex flex-column flex-xl-row justify-content-start list-unstyled">
                <li>
                    <a href="{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".whatsApp") }}" class="text-decoration-none text-white fs-6">
                        <i>WhatsApp</i>
                        <picture>
                            <source srcset="/files/icons/whatsapp.webp" type="image/webp">
                            <img src="/files/icons/whatsapp.png" alt="arrow" loading="lazy" height="30" width="30">
                        </picture>
                    </a>
                </li>
                <li class="mt-3 mt-lg-0 ms-lg-3">
                    <a href="tel: {{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".phone") }}" class="text-decoration-none text-white fs-6">
                        <i>{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".phone") }}</i>
                        <picture>
                        <source srcset="/files/icons/telephone.webp" type="image/webp">
                        <img src="/files/icons/telephone.png" alt="arrow" loading="lazy" height="30" width="30">
                    </picture>
                    </a>
                </li>
                <li class="mt-3 mt-lg-0 ms-lg-3">
                    <a href="mailto: {{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".mailContact") }}" class="text-decoration-none text-white fs-6">
                        <i>{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".mailContact") }}</i>
                        <picture>
                            <source srcset="/files/icons/email.webp" type="image/webp">
                            <img src="/files/icons/email.png" alt="arrow" loading="lazy" height="30" width="30">
                        </picture>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="container-1920 overflow-hidden d-flex flex-column mt-2">
    <div class="border-bottom fw-bold d-flex justify-content-end">
        <button class="btn btn-gold px-5 fs-6">{{ __($product . ".descriptionAdditional") }}</button>
    </div>

    <div class="artforma-lithebox ai-c jc-c d-none">
        <div class="artforma-lithebox__btn d-f ai-c" onclick="changeImageInGallery(-1)">
            <svg width="20px" height="20px" viewBox="0 0 20 20"><path class="artforma-lithebox__btn-svg" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788S18.707,9.212,18.271,9.212z"></path></svg>
        </div>
        <div class="artforma-lithebox-content d-f f-c">
            <div class="artforma-lithebox-content__tittle d-f">
                <span class="d-f ai-c font18"></span>
                <div onclick="closeGallery()" class="cursor-pointer d-f ai-c">
                    <svg width="20px" height="20px" viewBox="0 0 24 24">
                        <path class="artforma-lithebox__btn-svg" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"></path>
                    </svg>
                </div>
            </div>
            <div class="artforma-lithebox-content__image d-f ai-c jc-c" data-current-position>
                <img class="" loading='lazy' width="150" style="min-height: 400pxh">
            </div>
        </div>
        <div class="artforma-lithebox__btn artforma-lithebox__btn-left d-f ai-c" onclick="changeImageInGallery(1)">
            <svg width="20px" height="20px" viewBox="0 0 20 20"><path class="artforma-lithebox__btn-svg" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788S18.707,9.212,18.271,9.212z"></path></svg>
        </div>
    </div>

    @include('component.product.ae.carousel', [
        'title' => __($product . ".decorTitle"),
        'countDecor' => $countDecor,
        'product' => $product,
        'directory' => 'decor',
        'idDecor' => $idDecor
    ])

    @if($product === "steindekor")
        @include('component.product.ae.carousel', [
        'title' => __($product . ".decorTitleSecond"),
        'countDecor' => 20,
        'product' => $product,
        'directory' => 'forms',
        'idDecor' => 'steindekor',
    ])
    @endif

    @if($product === "stoneLine")
        @include('component.product.ae.carousel', [
          'title' => __($product . ".availableForm"),
          'countDecor' => 7,
          'product' => $product,
          'directory' => 'forms',
          "catalog" => false,
          'langVersion' => 'ae'
        ])
    @endif

    <script>
        const backgroundLithebox = document.querySelector("div.artforma-lithebox");

        backgroundLithebox.addEventListener('click', (event) => {
            if (event.target === backgroundLithebox) {
                closeGallery();
            }
        });

        function closeGallery() {
            document.querySelector('div.artforma-lithebox').classList.remove('d-flex');
            document.querySelector('div.artforma-lithebox').classList.add('d-none');
        }

        function getCountAvailablePositionsInGallery() {
            let nameElement = document.querySelector('div.artforma-lithebox-content__image').dataset.nameElement;
            return document.querySelector(`[data-gallery="${nameElement}"]`).dataset.carouselLength;
        }

        function getCurrentPositionGallery() {
            return document.querySelector('div.artforma-lithebox-content__image').dataset.currentPosition;
        }

        function changeImageInGallery(betweenPosition) {
            let countPositionsGallery = parseInt(getCountAvailablePositionsInGallery());
            let currentSelectPositionGallery = parseInt(getCurrentPositionGallery());
            let nameElement = document.querySelector('div.artforma-lithebox-content__image').dataset.nameElement;

            let newPositionInGallery = (currentSelectPositionGallery + parseInt(betweenPosition));

            if (newPositionInGallery >= 1 && newPositionInGallery < countPositionsGallery) {
                changeContentGalleryByPosition(newPositionInGallery, nameElement);
            } else if (newPositionInGallery < 1) {
                changeContentGalleryByPosition(countPositionsGallery, nameElement);
            } else if (newPositionInGallery >= countPositionsGallery) {
                changeContentGalleryByPosition(1, nameElement);
            }
        }
        function changeContentGalleryByPosition(position, nameElement) {
            let selectPosition = getContentGalleryByPosition(position, nameElement);

            activeGallery(selectPosition, position);
        }
        function getContentGalleryByPosition(position, nameElement) {
            return document.querySelector(`[data-carousel-name="${nameElement}"][data-carousel-column="${position}"] > picture > img`);
        }
        function getGalleryContent() {
            return document.querySelectorAll('[data-galery]');
        }

        function activeGallery(selectContent, positionElement) {
            let src = selectContent.src;
            setValueGalleryOtherImage(src, positionElement);
        }
        function setValueGalleryOtherImage(image, positionElement) {
            let imageGallery = document.querySelector('div.artforma-lithebox-content__image img');
            let imageContainerGallery = document.querySelector('div.artforma-lithebox-content__image');

            imageContainerGallery.dataset.currentPosition = positionElement;
            imageGallery.src = image;
        }

    </script>
</section>

    @include('component.ae.formContact', [
    'otherDescriptionFirst' => __($product . ".formContactFirst"),
    'otherDescriptionSecond' => __($product . ".formContactSecond")
])


@vite([
'resources/js/product.js',
])

@endsection
