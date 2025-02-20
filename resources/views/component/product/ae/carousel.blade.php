<div class="text-white mt-4 carousel position-relative" data-carousel-{{ $directory }}>


    <div class="d-flex flex-column flex-lg-row-reverse justify-content-between  me-1 me-lg-0 align-items-end">
        <span class="me-1 me-lg-5 fs-1">{{ $title }}</span>
        @if($catalog ?? true !== false)
            <a class="btn btn-gold fs-6 me-1 me-lg-0 ms-lg-2 mt-2 mt-lg-0" href="{{ route('decors', ['product' => $product]) }}{{ empty($idDecor) ? '' : '#' . $idDecor }}">@lang('mainPage.checkDecors')</a>
        @endif
    </div>
    <div class="d-flex mt-4 carousel__imagesContainer carousel__imagesContainer--ae position-relative" data-gallery="{{ $directory }}" data-carousel-length="{{ $countDecor }}">
        @for($j = 1; $j <= $countDecor; $j++)
            <div class="mx-1 carousel__imageContainer" onclick="createGallery('{{ $directory }}', {{ $j }})" data-carousel-name="{{ $directory }}" data-carousel-column="{{ $j }}" >
                <picture>
                    <source srcset="/files/{{ $directory }}/{{ $product }}/{{ $j }}.webp" type="image/webp">
                    <img src="/files/{{ $directory }}/{{ $product }}/{{ $j }}.jpg" class="carousel__image carousel__imageContainer--img" loading="lazy"/>
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

<script>
    function getImageWithTitleByElementDataGallery(name, positionElement) {
        return document.querySelector(`[data-carousel-name="${name}"][data-carousel-column="${positionElement}"] > picture > img`).src;
    }

    function setValueGallery(image, positionElement, name) {
        let imageGallery = document.querySelector('div.artforma-lithebox-content__image img');
        let imageContainerGallery = document.querySelector('div.artforma-lithebox-content__image');

        imageContainerGallery.dataset.currentPosition = positionElement;
        imageContainerGallery.dataset.nameElement = name;
        imageGallery.src = image;
    }

    function changeGalleryClassToActive() {
        document.querySelector('div.artforma-lithebox').classList.add('d-flex');
        document.querySelector('div.artforma-lithebox').classList.remove('d-none');
    }

    function createGallery(name, positionElement) {
        let image = getImageWithTitleByElementDataGallery(name, positionElement);
        setValueGallery(image, positionElement, name);
        changeGalleryClassToActive()
    }

</script>
