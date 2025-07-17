<section class="container-fluid mt-5 p-md-0 mx-0 overflow-hidden" id="products">
    <p class="text-center text-white m-0 fs-1 py-5">@lang($category->name)</p>

    <div class="container-1920 flex-row-reverse row g-3 px-3">
        @foreach($banners as $product)
            <article class="col-6 @if(count($banners) <= 6) col-lg-4 @else col-lg-3 @endif smallBanners">
                <a class="text-decoration-none" href="{{ $product->url }}">
                    <div>
                        <picture>
                            <source srcset="{{ $product->image }}.webp" type="image/webp">
                            <img src="{{ $product->image }}.jpg" alt="{{ $product->image_alt }}" loading="lazy" class="smallBanners__image">
                        </picture>
                    </div>
                    <div class="smallBanners__containerLink d-flex flex-column smallBanners__containerLink--ae">
                        <span class="smallBanners__title fs-4">@lang($product->name)</span>
                        <span class="smallBanners__link fs-5 pt-2" >@lang('mainPage.viewMore')</span>
                    </div>
                </a>
            </article>
        @endforeach
    </div>
</section>
