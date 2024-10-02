<footer class="footer d-flex flex-column mt-4 px-5">
    <div class="d-flex flex-column flex-lg-row">
        <div class="d-flex flex-column justify-content-between align-items-center align-items-lg-start text-white footer--first">
            <b class="footer__title">@lang('footer.company')</b>
            <p class="footer__text">
                @lang('footer.street')<br />
                @lang('footer.city')<br />
                @lang('footer.phone') <a class="footer__text footer__text--unstyle" href="tel: {{ config("shop.phone") }}">{{ config("shop.phone") }}</a><br />
                @lang('footer.mail') <a class="footer__text footer__text--unstyle" href="mailto: {{ config("shop.mailContact") }}">{{ config("shop.mailContact") }}</a>
            </p>
        </div>
        <div class="footer--second d-flex flex-column align-items-center align-items-lg-end">
            <ul class="d-flex flex-column flex-lg-row list-unstyled text-start">
                <li><a class="footer__title footer__title--second" href="{{ route('mainPage') }}#collaborationPath">@lang('footer.shopRules')</a></li>
                <li class="mx-lg-2"><a class="footer__title footer__title--second" href="{{ route('mainPage') }}#collaborationPath">@lang('footer.privacyPolicy')</a></li>
                <li><a class="footer__title footer__title--second" href="{{ route('mainPage') }}#collaborationPath">@lang('footer.collaborationPath')</a></li>
                <li class="mx-lg-2"><a class="footer__title footer__title--second" href="{{ route('mainPage') }}#products">@lang('footer.products')</a></li>
                <li><a class="footer__title footer__title--second" href="#contactForm">@lang('footer.formContact')</a></li>
            </ul>
            <ul class="d-flex list-unstyled">
                <li>
                    <a href="{{ config("shop.facebook") }}">
                        <picture>
                            <source srcset="/files/icons/facebook.webp" type="image/webp">
                            <img src="/files/icons/facebook.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop.instagram") }}">
                        <picture>
                            <source srcset="/files/icons/instagram.webp" type="image/webp">
                            <img src="/files/icons/instagram.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop.pinterest") }}">
                        <picture>
                            <source srcset="/files/icons/pinterest.webp" type="image/webp">
                            <img src="/files/icons/pinterest.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop.linkedin") }}">
                        <picture>
                            <source srcset="/files/icons/linkedin.webp" type="image/webp">
                            <img src="/files/icons/linkedin.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
            </ul>
            <a class="footer__text">@lang('footer.findInGoogle')</a>
        </div>
    </div>
    <hr />
    <div class="footer__text mb-3">@lang('footer.copyWriting')</div>
</footer>
