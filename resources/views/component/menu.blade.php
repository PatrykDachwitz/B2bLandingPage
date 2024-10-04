<nav class="py-0 container-fluid navbar flex-column navbar-expand-lg position-fixed top-0 menu {{$menu ?? ''}}">
    <div class="container-fluid py-3 position-relative">
        <a class="navbar-brand" href="/">
            <picture>
                <source srcset="/files/logo.webp" type="image/webp">
                <img src="/files/logo.png" loading="lazy" height="40">
            </picture>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon menu__icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu__list">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mainPage') }}#collaborationPath">@lang('menu.collaborationPath')</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link dropdown-toggle menu__additional--activate" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang('menu.ourProducts')</a>
                    <div class="container-fluid justify-content-start justify-content-lg-end py-1 py-lg-4 menu__additional">
                        <div class="d-none d-lg-block">
                            <picture>
                                <source srcset="/files/menu.webp" type="image/webp">
                                <img src="/files/menu.jpg" loading="lazy" height="300">
                            </picture>
                        </div>
                        <div class="mx-lg-5">
                            <ul class="list-unstyled">
                                <li><b class="d-none d-lg-block fs-4 text-white fw-semibold pb-2">Kolekcja</b></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" href="#">Zestaw Oliver</a></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" href="#">Zestaw Oliver</a></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" href="#">Zestaw Oliver</a></li>
                                <li><a class="fs-6 dropdown-item text-gray-footer" href="#">Zestaw Oliver</a></li>
                            </ul>
                        </div>
                    </div>                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactForm">@lang('menu.contact')</a>
                </li>
            </ul>
        </div>
    </div>


</nav>
