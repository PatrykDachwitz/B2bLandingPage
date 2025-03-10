
@include('component.ae.manageCookie')
<section class="bg-white fs-6 rounded-3 cookie cookie--ae position-fixed bottom-0 end-0 m-2 p-3 d-none" data-cooke-container>
    <span class="fs-5 fw-medium">@lang('cookie.title')</span>
    <p class="mt-2 text-end">@lang('cookie.description')</p>
    <div>
        <a class="btn btn-gold" onclick="hiddenElement('manageCookie')">@lang('cookie.private')</a>
        <a class="btn btn-gold" data-cooke-button>@lang('cookie.accept')</a>
    </div>
</section>
