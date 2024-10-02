@extends('partial.layout')


@section('content')
<section class="container-1920 d-flex justify-content-start fs-7 fw-bold my-2">
    <picture>
        <source srcset="/files/icons/home.webp" type="image/webp">
        <img src="/files/icons/home.png" alt="home" loading="lazy" width="10" height="10">
    </picture>
    <span class="mx-3">Strona główna</span>
    <picture>
        <source srcset="/files/icons/arrow.webp" type="image/webp">
        <img src="/files/icons/arrow.png" alt="arrow" loading="lazy" height="10" width="10">
    </picture>
    <span class="mx-3">Lustro Stone Line</span>
</section>


<section class="row container-1920">
    <div class="col-6">
        <div class="gallery d-flex">
            <div class="d-flex flex-column mx-3">
                @for($i = 0; $i < 9; $i++)
                    <div class="mb-2">
                        <img src="/files/gallery/m_1.jpg" width="80">
                    </div>
                @endfor
            </div>
            <div class="gallery__mainContainer">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/files/gallery/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/files/gallery/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/files/gallery/3.jpg" class="d-block w-100" alt="...">
                        </div>
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
    <div class="col-6 d-flex flex-column align-items-start text-white">
        <h1 class="fs-3">StoneLine</h1>
        <p class="fs-7 text-gray-footer">Zestaw mebli łazienkowych wykończony fornirem kamiennym z naturalnych łupków to doskonałe połączenie nowoczesności i elegancji. W skład zestawu wchodzi szafka podumywalkowa oraz lustro, którego rama wykończona jest naturalnym kamieniem. Szeroka gama struktur i odcieni kamienia sprawia, że każdy element zestawu jest unikatowy i niepowtarzalny. Lustro dostępne jest w dwóch wersjach głębokości – 9 cm lub 4 cm.</p>
        <h2 class="fs-5">Standardowe rozamiry <span class="text-gray-footer">[cm]</span></h2>
        <div class="row">
            @for($i = 1; $i < 4; $i++)
                <div class="col-3">
                    <h3 class="fs-6">Szafka <span class="text-gray-footer">LxWxH</span></h3>
                    <ul class="list-unstyled">
                        @for($j = 0; $j < 3; $j++)
                            <li class="fs-6">100x100x100</li>
                        @endfor
                    </ul>
                </div>
            @endfor
        </div>
        <ul class="">
            <li>Produkt wykonujemy na zamówienie, dostosowując go do wybranego rozmiaru.</li>
            <li>Kolory obudowy i kształty dostępne w opisie</li>
            <li>Cena za zestaw: od 3000€ </li>
            <li>Czas realizacji do 40 dni roboczych</li>
        </ul>
        <div><button class="btn btn-gold fs-6">Uzyskaj wycenę</button></div>
        <div>
            <h3 class="fs-6 mt-3"><i>Potrzebujesz pomocy?</i></h3>
            <ul class="d-flex justify-content-start list-unstyled">
                <li>
                    <a href="https://wa.me/+48781637661">
                        <picture>
                            <source srcset="/files/icons/whatsapp.webp" type="image/webp">
                            <img src="/files/icons/whatsapp.png" alt="arrow" loading="lazy" height="20" width="20">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="tel: {{ config("shop.phone") }}" class="text-decoration-none text-white fs-7">
                    <picture>
                        <source srcset="/files/icons/telephone.webp" type="image/webp">
                        <img src="/files/icons/telephone.png" alt="arrow" loading="lazy" height="20" width="20">
                    </picture> <i>{{ config("shop.phone") }}</i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="mailto: {{ config("shop.mailContact") }}" class="text-decoration-none text-white fs-7">
                        <picture>
                            <source srcset="/files/icons/email.webp" type="image/webp">
                            <img src="/files/icons/email.png" alt="arrow" loading="lazy" height="20" width="20">
                        </picture> <i>{{ config("shop.mailContact") }}</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="d-flex flex-column">
    <div class="border-bottom fw-bold">
        <button class="btn btn-gold px-5">Opis produktu</button>
    </div>

    <div class="text-white mt-4">
        <span class="ms-5 fs-1">Kolekcja dekorów</span>
        <a class="text-white fw-light" href="/">Sprawdz pełen wzorni</a>
        <div class="d-flex mt-4">
            @for($j = 0; $j < 20; $j++)
                <div class="mx-1">
                    <picture>
                        <source srcset="/files/sliderColor.webp" type="image/webp">
                        <img src="/files/sliderColor.jpg" loading="lazy" height="200"/>
                    </picture>
                </div>
            @endfor
        </div>
    </div>

    <div class="text-white mt-4">
        <span class="fs-1 ms-5">Dostępne warianty</span>
        <div class="d-flex mt-4">
            <div class="d-flex position-absolute top-50 start-0">
                <picture>
                    <source srcset="/files/icons/arrow.webp" type="image/webp">
                    <img src="/files/icons/arrow.png" alt="arrow" loading="lazy" height="50" width="50">
                </picture>
            </div>
            @for($j = 0; $j < 20; $j++)
                <div class="mx-1">
                    <picture>
                        <source srcset="/files/sliderProduct.webp" type="image/webp">
                        <img src="/files/sliderProduct.jpg" loading="lazy" height="200"/>
                    </picture>
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection
