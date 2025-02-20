<footer class="footer d-flex flex-column mt-4 px-5">
    <div class="d-flex flex-column flex-lg-row-reverse justify-content-between">
        <div class="d-flex flex-column flex-lg-row justify-content-end footer--first">

            <ul class="me-5 d-flex flex-column list-unstyled text-end my-0">
                <li><a class="footer__title footer__title--second" href="{{ route('rule') }}">@lang('footer.shopRules')</a></li>
                <li><a class="footer__title footer__title--second" href="{{ route('policePrivate') }}">@lang('footer.privacyPolicy')</a></li>
                <li><a class="footer__title footer__title--second" href="{{ route('mainPage') }}#collaborationPath">@lang('footer.collaborationPath')</a></li>
                <li><a class="footer__title footer__title--second" href="{{ route('mainPage') }}#products">@lang('footer.products')</a></li>
                <li><a class="footer__title footer__title--second" href="@if(\Illuminate\Support\Facades\Route::currentRouteName() !== "product"){{ route("mainPage") }}#contactForm @else #contactForm @endif">@lang('footer.formContact')</a></li>
            </ul>

            <div class="d-flex flex-column justify-content-start me-5 me-lg-0 align-items-end text-white">
                <b class="footer__title">@lang('footer.company')</b>
                <p class="footer__text text-end">
                    <a class="footer__text footer__text--unstyle" href="tel: {{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".phone") }}">{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".phone") }}</a> @lang('footer.phone') <br />
                    <a class="footer__text footer__text--unstyle" href="mailto: {{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".mailContact") }}">{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".mailContact") }}</a> @lang('footer.mail')
                </p>
            </div>

        </div>
        <div class="footer--second d-flex flex-column justify-content-center align-items-center align-items-lg-start">
            <hr class="d-lg-none" style="min-width: 100%">
            <ul class="d-flex list-unstyled">
                <li>
                    <a href="{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".facebook") }}" target="_blank">
                        <picture>
                            <source srcset="/files/icons/facebook.webp" type="image/webp">
                            <img src="/files/icons/facebook.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".instagram") }}" target="_blank">
                        <picture>
                            <source srcset="/files/icons/instagram.webp" type="image/webp">
                            <img src="/files/icons/instagram.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".pinterest") }}" target="_blank">
                        <picture>
                            <source srcset="/files/icons/pinterest.webp" type="image/webp">
                            <img src="/files/icons/pinterest.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li class="ms-1">
                    <a href="{{ config("shop." . \Illuminate\Support\Facades\App::getLocale() .".linkedin") }}" target="_blank">
                        <picture>
                            <source srcset="/files/icons/linkedin.webp" type="image/webp">
                            <img src="/files/icons/linkedin.png" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
            </ul>
            <a class="footer__text" href="{{ config('shop.' . \Illuminate\Support\Facades\App::getLocale() .'.google') }}" target="_blank">@lang('footer.findInGoogle')</a>
        </div>
    </div>
    <hr />
    <div class="footer__text mb-3 text-end">@lang('footer.copyWriting')</div>
</footer>
