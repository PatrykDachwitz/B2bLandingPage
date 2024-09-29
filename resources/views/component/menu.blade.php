<nav class="container-fluid navbar navbar-expand-lg position-fixed menu">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <picture>
                <source srcset="/files/logo.webp" type="image/webp">
                <img src="/files/logo.png" loading="lazy" height="50">
            </picture>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu__list">
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('menu.collaborationPath')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang('menu.ourProducts')</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Zestaw Oliver</a></li>
                        <li><a class="dropdown-item" href="#">Lustro Smart</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" >@lang('menu.contact')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
