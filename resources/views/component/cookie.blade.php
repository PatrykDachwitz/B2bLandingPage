@include('component.manageCookie')
<section class="bg-white fs-6 rounded-3 cookie position-fixed bottom-0 m-2 px-5 py-4 d-none" data-cooke-container>
    <span class="fs-5 fw-medium">@lang('cookie.title')</span>
    <p class="mt-2">@lang('cookie.description')</p>
    <div>
        <a class="btn btn-gold" data-cooke-button>@lang('cookie.accept')</a>
        <a class="btn btn-gold" onclick="hiddenElement('manageCookie')">@lang('cookie.private')</a>
    </div>
</section>
