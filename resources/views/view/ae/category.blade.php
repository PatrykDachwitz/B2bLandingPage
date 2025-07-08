@extends('partial.layout',[
    'menu' => 'menu--product'
])


@section('content')

    <section class="container-fluid mt-5 pt-4 px-1 p-md-5 mx-0 overflow-hidden" id="products">
        <p class="text-center text-white m-0 fs-1 py-5">@lang($category->name)</p>

        <div class="container-1920 row g-2 g-md-5 px-1 px-md-3">
            @foreach($category->products ?? [] as $product)
                <article class="col-6 col-lg-4 smallBanners">
                    <a class="text-decoration-none" href="{{ route("product", ['product' => $product->slug]) }}">
                        <div>
                            <picture>
                                <source srcset="/files/gallery/{{ $product->work_name }}/1.webp" type="image/webp">
                                <img src="/files/gallery/{{ $product->work_name }}/1.jpg" alt="{{ $product->work_name }}" loading="lazy" class="smallBanners__image">
                            </picture>
                        </div>
                        <div class="smallBanners__containerLink d-flex flex-column text-end position-static">
                            <span class="smallBanners__title fs-4">@lang("{$product->work_name}.title")</span>
                            <span class="smallBanners__link fs-5" >@lang('mainPage.viewMore')</span>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </section>

@include('component.formContact', [
    'otherDescriptionFirst' => __("productContact.formContactFirst"),
    'otherDescriptionSecond' => __("productContact.formContactSecond")
])


@vite([
'resources/js/product.js',
])

@endsection
