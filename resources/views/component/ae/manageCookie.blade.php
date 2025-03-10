<section class="manageCookie d-none" data-hidden-element-name="manageCookie">
    <div class="manageCookie__container d-flex flex-column text-end bg-white p-0 rounded-3">
        <div class="overflow-y-auto px-4 py-5">
            <span class="fs-5 fw-medium">@lang('cookie.private')</span>
            <p class="mt-2">@lang('cookie.descriptionOne')</p>
            <p>@lang('cookie.descriptionTwo')</p>
            <p>@lang('cookie.descriptionThree')</p>
            <br />
            <span class="fs-5 fw-medium">@lang('cookie.manageCookieSetting')</span>

            <div class="d-flex flex-column mt-2">
                <div class="d-flex justify-content-between flex-row-reverse">
                    <a onclick="showDescription('needCookie')" class="pointer text-dark text-decoration-none">@lang('cookie.needCookie')</a>
                    <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                        <div class="form-check form-switch">
                            <input class="form-check-input manageCookie__switch" type="checkbox" role="switch" name="needCookie" id="flexSwitchCheckDefault" checked disabled>
                        </div>
                        <picture>
                            <source srcset="/files/icons/arrow.webp" type="image/webp">
                            <img src="/files/icons/arrow.png" data-description-arrow="needCookie" class="pointer me-2 manageCookie__arrow--down" onclick="showDescription('needCookie')" loading="lazy" width="20" height="20">
                        </picture>
                    </div>
                </div>
                <p class="mt-2 d-none" data-description-name="needCookie">@lang('cookie.needCookieDescription')</p>
            </div>
            <div class="d-flex flex-column mt-2">
                <div class="d-flex justify-content-between flex-row-reverse">
                    <a onclick="showDescription('preferenceCookie')" class="pointer text-dark text-decoration-none">@lang('cookie.preferenceCookie')</a>
                    <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                        <div class="form-check form-switch">
                            <input class="form-check-input manageCookie__switch" type="checkbox" name="preferenceCookie" role="switch" id="flexSwitchCheckDefault">
                        </div>
                        <picture>
                            <source srcset="/files/icons/arrow.webp" type="image/webp">
                            <img src="/files/icons/arrow.png" data-description-arrow="preferenceCookie" class="pointer me-2 manageCookie__arrow--down" onclick="showDescription('preferenceCookie')" loading="lazy" width="20" height="20">
                        </picture>
                    </div>
                </div>
                <p class="mt-2 d-none" data-description-name="preferenceCookie">@lang('cookie.preferenceCookieDescription')</p>
            </div>
            <div class="d-flex flex-column mt-2">
                <div class="d-flex justify-content-between flex-row-reverse">
                    <a onclick="showDescription('statisticCookie')" class="pointer text-dark text-decoration-none">@lang('cookie.statisticCookie')</a>
                    <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                        <div class="form-check form-switch">
                            <input class="form-check-input manageCookie__switch" type="checkbox" name="statisticCookie" value="1" role="switch" id="flexSwitchCheckDefault">
                        </div>
                        <picture>
                            <source srcset="/files/icons/arrow.webp" type="image/webp">
                            <img src="/files/icons/arrow.png" data-description-arrow="statisticCookie" class="pointer me-2 manageCookie__arrow--down" onclick="showDescription('statisticCookie')" loading="lazy" width="20" height="20">
                        </picture>
                    </div>
                </div>
                <p class="mt-2 d-none" data-description-name="statisticCookie">@lang('cookie.statisticCookieDescription')</p>
            </div>
            <div class="d-flex flex-column mt-2">
                <div class="d-flex justify-content-between flex-row-reverse">
                    <a onclick="showDescription('marketingCookie')" class="pointer text-dark text-decoration-none">@lang('cookie.marketingCookie')</a>
                    <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                        <div class="form-check form-switch">
                            <input class="form-check-input manageCookie__switch" type="checkbox" name="marketingCookie" role="switch" id="flexSwitchCheckDefault">
                        </div>
                        <picture>
                            <source srcset="/files/icons/arrow.webp" type="image/webp">
                            <img src="/files/icons/arrow.png" data-description-arrow="marketingCookie" class="pointer me-2 manageCookie__arrow--down" onclick="showDescription('marketingCookie')" loading="lazy" width="20" height="20">
                        </picture>
                    </div>
                </div>
                <p class="mt-2 d-none" data-description-name="marketingCookie">@lang('cookie.marketingCookieDescription')</p>
            </div>

        </div>
        <hr class="m-0 p-0" />
        <div class="p-3 d-flex align-items-center justify-content-between">
            <a class="btn btn-gold cookie__button" onclick="updateCookieConsentSettings()">@lang('cookie.saveClose')</a>
            <a class="btn btn-gold-inline cookie__button" onclick="hiddenElement('manageCookie')">@lang('cookie.back')</a>
        </div>
    </div>
</section>
