<footer class="footer d-flex flex-column mt-4 px-5">
    <div class="d-flex">
        <div class="d-flex flex-column justify-content-between text-white footer--first">
            <b class="footer__title">@lang('footer.company')</b>
            <p class="footer__text">@lang('footer.street')<br />@lang('footer.city')</p>
            <a class="footer__text" href="tel: {{ config("shop.phone") }}">@lang('footer.phone') {{ config("shop.phone") }}</a>
            <a class="footer__text" href="mailto: {{ config("shop.mailContact") }}">@lang('footer.mail') {{ config("shop.mailContact") }}</a>
        </div>
        <div class="footer--second d-flex flex-column align-items-end">
            <ul class="d-flex list-unstyled">
                <li><a class="footer__title">@lang('footer.collaborationPath')</a></li>
                <li class="mx-2"><a class="footer__title">@lang('footer.products')</a></li>
                <li><a class="footer__title">@lang('footer.formContact')</a></li>
            </ul>
            <ul class="d-flex list-unstyled">
                <li>
                    <a href="{{ config("shop.facebook") }}">
                        <picture>
                            <source srcset="/files/icons/facebook.webp" type="image/webp">
                            <img src="/files/icons/facebook.png" width="30" height="30" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li>
                    <a href="{{ config("shop.instagram") }}">
                        <picture>
                            <source srcset="/files/icons/instagram.webp" type="image/webp">
                            <img src="/files/icons/instagram.png" width="30" height="30" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li>
                    <a href="{{ config("shop.pinterest") }}">
                        <picture>
                            <source srcset="/files/icons/pinterest.webp" type="image/webp">
                            <img src="/files/icons/pinterest.png" width="30" height="30" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
                <li>
                    <a href="{{ config("shop.linkedin") }}">
                        <picture>
                            <source srcset="/files/icons/linkedin.webp" type="image/webp">
                            <img src="/files/icons/linkedin.png" width="30" height="30" class="footer__icon" loading="lazy">
                        </picture>
                    </a>
                </li>
            </ul>
            <a class="footer__link">@lang('footer.findInGoogle')</a>
        </div>
    </div>
    <hr />
    <div class="footer__copyWrite">@lang('footer.copyWriting')</div>
</footer>
