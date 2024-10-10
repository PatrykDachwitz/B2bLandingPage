<nav class="py-3 py-lg-0 container-fluid navbar flex-column navbar-expand-lg position-fixed top-0 menu {{$menu ?? ''}}">
    <div class="container-fluid position-relative px-3 px-lg-5">
        <a class="navbar-brand" href="/">
            <picture>
                <source srcset="/files/logo.webp" type="image/webp">
                <img src="/files/logo.png" loading="lazy" class="menu__image" height="45">
            </picture>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon menu__icon"></span>
        </button>
        <div class="collapse navbar-collapse menu__container--option" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mt-3 mt-lg-0 mb-lg-0 menu__list">
                <li class="nav-item menu__option">
                    <a class="nav-link" href="{{ route('mainPage', ['lang' => \Illuminate\Support\Facades\App::getLocale(),]) }}#collaborationPath">@lang('menu.collaborationPath')</a>
                </li>
                <li class="nav-item menu__option mx-lg-4 menu__container--submenu">
                    <a class="nav-link dropdown-toggle menu__additional--activate" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang('menu.ourProducts')</a>
                    <div class="container-fluid justify-content-start justify-content-lg-end py-lg-4 menu__additional">
                        <div class="d-none d-lg-block">
                            <img src="/files/bannerColorLine.jpg" loading="lazy" class="menu__image-change" height="300">
                        </div>
                        <div class="mx-lg-5">
                            <ul class="list-unstyled">
                                <li><b class="d-none d-lg-block fs-4 text-white fw-semibold pb-2">@lang('menu.collection')</b></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" data-src="/files/bannerColorLine.jpg" href="{{ route('product', ['lang' => \Illuminate\Support\Facades\App::getLocale(),'product' => 'colorLine']) }}">@lang('mainPage.colorLine')</a></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" data-src="/files/bannerStoneLine.jpg" href="{{ route('product', ['lang' => \Illuminate\Support\Facades\App::getLocale(),'product' => 'stoneLine']) }}">@lang('mainPage.stoneLine')</a></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" data-src="/files/bannerNolan.jpg" href="{{ route('product', ['lang' => \Illuminate\Support\Facades\App::getLocale(),'product' => 'nolan']) }}">@lang('mainPage.nolan')</a></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" data-src="/files/bannerSolidLone.jpg" href="{{ route('product', ['lang' => \Illuminate\Support\Facades\App::getLocale(),'product' => 'solidLine']) }}">@lang('mainPage.solidLine')</a></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" data-src="/files/bannerGleamLine.jpg" href="{{ route('product', ['lang' => \Illuminate\Support\Facades\App::getLocale(),'product' => 'gleamLine']) }}">@lang('mainPage.gleamLine')</a></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" data-src="/files/bannerSteindekor.jpg" href="{{ route('product', ['lang' => \Illuminate\Support\Facades\App::getLocale(),'product' => 'steindekor']) }}">@lang('mainPage.steindekor')</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item menu__option">
                    <a class="nav-link" href="#contactForm">@lang('menu.contact')</a>
                </li>
            </ul>
        </div>
    </div>


</nav>
