<nav class="container-fluid navbar navbar-expand-lg position-fixed top-0 menu {{$menu ?? ''}}">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <picture>
                <source srcset="/files/logo.webp" type="image/webp">
                <img src="/files/logo.png" loading="lazy" height="40">
            </picture>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu__list">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mainPage') }}#collaborationPath">@lang('menu.collaborationPath')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang('menu.ourProducts')</a>
                    {{--<div class="dropdown-menu show menu__additionalList">
                        <li class="d-flex">
                            --}}{{--<picture>
                                <source srcset="/files/menu.webp" type="image/webp">
                                <img src="/files/menu.jpg" loading="lazy" height="150">
                            </picture>--}}{{--
                            <a class="dropdown-item" href="#">Zestaw Oliver</a>
                        </li>
                        <li>
                            --}}{{--<picture>
                                <source srcset="/files/menu.webp" type="image/webp">
                                <img src="/files/menu.jpg" loading="lazy" height="150">
                            </picture>--}}{{--
                            <a class="dropdown-item" href="#">Lustro Smart</a>
                        </li>
                    </div>--}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactForm">@lang('menu.contact')</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
