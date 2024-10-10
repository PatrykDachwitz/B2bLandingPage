<footer class="footer d-flex flex-column mt-4 px-5">
    <div class="d-flex flex-column flex-lg-row justify-content-between">
        <div class="d-flex flex-column flex-lg-row justify-content-start footer--first">
            <div class="d-flex flex-column justify-content-start align-items-center align-items-lg-start text-white">
                <b class="footer__title mt-2">@lang('footer.company')</b>
                <p class="footer__text">
                    {{--@lang('footer.street')<br />
                    @lang('footer.city')<br />--}}
                    @lang('footer.phone') <a class="footer__text footer__text--unstyle" href="tel: {{ config("shop.phone") }}">{{ config("shop.phone") }}</a><br />
                    @lang('footer.mail') <a class="footer__text footer__text--unstyle" href="mailto: {{ config("shop.mailContact") }}">{{ config("shop.mailContact") }}</a>
                </p>
            </div>
            <ul class="ms-5 d-flex flex-column list-unstyled text-start my-0">
                <li><a class="footer__title footer__title--second" href="{{ route('rule', ['lang' => \Illuminate\Support\Facades\App::getLocale(),]) }}">@lang('footer.shopRules')</a></li>
                <li><a class="footer__title footer__title--second" href="{{ route('policePrivate', ['lang' => \Illuminate\Support\Facades\App::getLocale(),]) }}">@lang('footer.privacyPolicy')</a></li>
                <li><a class="footer__title footer__title--second" href="{{ route('mainPage', ['lang' => \Illuminate\Support\Facades\App::getLocale(),]) }}#collaborationPath">@lang('footer.collaborationPath')</a></li>
                <li><a class="footer__title footer__title--second" href="{{ route('mainPage', ['lang' => \Illuminate\Support\Facades\App::getLocale(),]) }}#products">@lang('footer.products')</a></li>
                <li><a class="footer__title footer__title--second" href="#contactForm">@lang('footer.formContact')</a></li>
            </ul>
        </div>
        <div class="footer--second d-flex flex-column justify-content-center align-items-center align-items-lg-end">
            <hr class="d-lg-none" style="min-width: 100%">
            <ul class="d-flex list-unstyled">
                <li>
                    <a href="{{ config("shop.facebook") }}" target="_blank">
                        <picture>
                            <source srcset="/files/icons/facebook.webp" type="image/webp">
                            <img src="/files/icons/facebook.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop.instagram") }}" target="_blank">
                        <picture>
                            <source srcset="/files/icons/instagram.webp" type="image/webp">
                            <img src="/files/icons/instagram.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop.pinterest") }}" target="_blank">
                        <picture>
                            <source srcset="/files/icons/pinterest.webp" type="image/webp">
                            <img src="/files/icons/pinterest.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop.linkedin") }}" target="_blank">
                        <picture>
                            <source srcset="/files/icons/linkedin.webp" type="image/webp">
                            <img src="/files/icons/linkedin.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
            </ul>
            <a class="footer__text" href="{{ config('shop.google') }}" target="_blank">@lang('footer.findInGoogle')</a>
        </div>
    </div>
    <hr />
    <div class="footer__text mb-3">@lang('footer.copyWriting')</div>
</footer>
