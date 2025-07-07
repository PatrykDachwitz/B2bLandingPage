<header class="py-3 py-lg-0 container-fluid navbar flex-column navbar-expand-lg position-fixed top-0 menu {{$menu ?? ''}}">
    <div class="container-fluid position-relative px-3 px-lg-5">
        <a class="navbar-brand" href="{{ route('mainPage') }}">
            <picture>
                <source srcset="/files/logo.webp" type="image/webp">
                <img src="/files/logo.png" loading="lazy" class="menu__image" height="45">
            </picture>
        </a>
        <div class="d-flex">
            @include('component.changeCountry', [
                    'class' => "d-flex d-lg-none align-items-center"
                ])
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon menu__icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse menu__container--option" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mt-3 mt-lg-0 mb-lg-0 menu__list">
                <li class="nav-item menu__option">
                    <a class="nav-link" href="{{ route('mainPage') }}#collaborationPath">@lang('menu.collaborationPath')</a>
                </li>
                <li class="nav-item menu__option mx-lg-4 menu__container--submenu">
                    <a class="d-none d-lg-flex nav-link dropdown-toggle menu__additional--activate" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang('menu.ourProducts')</a>
                    <div class="container-fluid justify-content-start justify-content-lg-end p-0 py-lg-4 menu__additional">
                        <div class="d-none d-lg-block">
                            <img src="/files/bannerColorLine.jpg" loading="lazy" class="menu__image-change" height="300">
                        </div>
                        <nav class="border-0 p-0 mx-lg-5 d-flex flex-column flex-lg-row dropdown-menu position-relative">

                            @foreach($menus ?? [] as $menu)
                                <div class="d-lg-flex flex-lg-column">
                                    <h2 class="dropdown-item nav-link dropdown-toggle menu__additional--activate fs-lg-4 fw-lg-semibold pb-0 pb-lg-2 d-lg-none" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang($menu->name)</h2>
                                    <ul class="dropdown-menu border-0 list-unstyled me-lg-5 d-lg-flex flex-lg-column position-lg-static">
                                        <li><h2 class="text-white fs-4 fw-semibold pb-2 d-none d-lg-block">@lang($menu->name)</h2></li>
                                        @foreach($menu->children ?? [] as $children)
                                            <li><a class="fs-6 dropdown-item text-gray-footer px-lg-0" data-src="{{ $children->image ?? "" }}.jpg" href="{{ $children->slug ?? "" }}">@lang($children->name)</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </nav>
                    </div>
                </li>
                <li class="nav-item menu__option">
                    <a class="nav-link" href="@if(\Illuminate\Support\Facades\Route::currentRouteName() !== "product"){{ route("mainPage") }}#contactForm @else #contactForm @endif">@lang('menu.contact')</a>
                </li>
                @include('component.changeCountry', [
                    'class' => "d-none d-lg-block"
                ])
            </ul>
        </div>
    </div>


</header>
