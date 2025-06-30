<section class="container-fluid d-flex flex-column-reverse flex-md-row justify-content-between p-0">
    <div class="swiperText slider__container">
        <ul class="swiper-wrapper list-unstyled">
            <li class="swiper-slide d-flex flex-column justify-content-center align-items-center">
                <h1 class="fs-4 text-white text-center mx-5 mt-3 mt-md-0 fw-normal">@lang('mainPage.sliderContent')</h1>
                <div class="mt-2 d-flex flex-column flex-md-row align-items-center">
                    <a class="btn btn-gold me-md-1 slider__button fs-6" href="{{ route('mainPage') }}#products">@lang('mainPage.viewProduct')</a>
                    <a class="ms-md-2 btn btn-gold-inline slider__button fs-6 mt-2 mt-md-0" href="#contactForm">@lang('mainPage.sendRequest')</a>
                </div>
            </li>
            <li class="swiper-slide d-flex flex-column justify-content-center align-items-center">
                <h1 class="fs-4 text-white text-center mx-5 mt-3 mt-md-0 fw-normal">@lang('mainPage.sliderContent')</h1>
                <div class="mt-2 d-flex flex-column flex-md-row align-items-center">
                    <a class="btn btn-gold me-md-1 slider__button fs-6" href="{{ route('mainPage') }}#products">@lang('mainPage.viewProduct')</a>
                    <a class="ms-md-2 btn btn-gold-inline slider__button fs-6 mt-2 mt-md-0" href="#contactForm">@lang('mainPage.sendRequest')</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="swiperImage slider__container position-relative">
        <div class="slider__control slider__control--previous">
            <picture>
                <source srcset="/files/icons/slider-control.webp" type="image/webp">
                <img src="/files/icons/slider-control.jpg" loading="lazy" width="25" height="25" type="image/jpeg" alt="Slider control next slide">
            </picture>
        </div>

        <div class="slider__control slider__control--next">
            <picture>
                <source srcset="/files/icons/slider-control.webp" type="image/webp">
                <img src="/files/icons/slider-control.jpg" loading="lazy" width="25" height="25" type="image/jpeg" alt="Slider control next slide">
            </picture>
        </div>
        <ul class="swiper-wrapper list-unstyled">
            <li class="swiper-slide"><!--TODO tu może jakieś 2 inne warinaty-->
                <video autoplay loop muted class="slider__video--mobile slider__video">
                    <source src="/files/slider-mobile.mp4" type="video/mp4" />
                </video>
                <video autoplay loop muted class="slider__video--desktop slider__video">
                    <source src="/files/slider-desktop.mp4" type="video/mp4" />
                </video>
            </li>
            <li class="swiper-slide">
                <picture>
                    <source srcset="/files/slider_mobile.webp" media="(max-width:768px)" type="image/webp">
                    <source srcset="/files/slider_mobile.jpg" media="(max-width:768px)" type="image/jpg">
                    <source srcset="/files/slider_pc.webp" type="image/webp">
                    <img src="/files/slider_pc.jpg" class="slider__image" loading="lazy">
                </picture>
            </li>
        </ul>
    </div>
</section>
