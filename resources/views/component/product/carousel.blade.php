<div class="text-white mt-4 carousel position-relative" data-carousel-decor>
    <div class="d-flex flex-column flex-lg-row justify-content-between  align-items-start align-items-lg-end">
        <span class="ms-1 ms-lg-2 ms-lg-5 fs-1">{{ $title }}</span>
        <a class="btn btn-gold fs-6 ms-1 ms-lg-0 me-lg-2 mt-2 mt-lg-0" href="{{ route('decors', [ 'product' => $product]) }}">@lang('mainPage.checkDecors')</a>
    </div>
    <div class="d-flex mt-4 carousel__imagesContainer position-relative">
        @for($j = 1; $j <= $countDecor; $j++)
            <div class="px-1" data-carousel-column="{{ $j }}">
                <picture>
                    <source srcset="/files/decor/{{ $product }}/{{ $j }}.webp" type="image/webp">
                    <img src="/files/decor/{{ $product }}/{{ $j }}.jpg" class="carousel__image" loading="lazy" height="300"/>
                </picture>
            </div>
        @endfor


    </div>

    <div class="position-absolute end-0 carousel__button carousel__button--decor carousel__button--next" data-button-next>
        <picture>
            <source srcset="/files/icons/arrow.webp" type="image/webp" >
            <img src="/files/icons/arrow.png" loading="lazy" width="90" height="90">
        </picture>
    </div>

    <div class="position-absolute start-0 carousel__button carousel__button--decor" data-button-previous>
        <picture>
            <source srcset="/files/icons/arrow.webp" type="image/webp">
            <img src="/files/icons/arrow.png" loading="lazy" class="rotate-180" width="90" height="90">
        </picture>
    </div>
</div>
