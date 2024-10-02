<section class="container-fluid mt-5 pb-5 bg-gray d-flex flex-column align-items-center" id="contactForm">
    <p class="text-center text-white fs-5 my-3">
        @lang('formContact.contactWithForm') <br />
        @lang('formContact.contact24Hours')
    </p>
    <form class="row formContact g-3">
        <div class="col-12">
            <input name="names" class="formContact__input" type="text" placeholder="@lang('formContact.names')" required>
        </div>
        <div class="col-6">
            <input name="email" class="formContact__input" type="email" placeholder="@lang('formContact.email')" required>
        </div>
        <div class="col-6">
            <input name="phone" class="formContact__input" type="text" placeholder="@lang('formContact.phone')" required>
        </div>
        <div class="col-12">
            <textarea name="message" class="formContact__input formContact__input--textarea" placeholder="@lang('formContact.message')"></textarea>
        </div>
        <div class="col-12 text-start formContact__info formContact__info--red my-0">@lang('formContact.requireInputs')</div>
        <div class="col-12 text-start formContact__info mt-2">@lang('formContact.adminData')</div>
        <div class="col-12 text-start d-flex align-items-start">
            <input class="m-1 formContact__input--checkbox" name="rule_one" type="checkbox">
            <p class="formContact__info">@lang('formContact.firstRule')</p>
        </div>
        <div class="col-12 text-start d-flex align-items-start mt-2">
            <input class="m-1 formContact__input--checkbox" name="rule_second" type="checkbox">
            <p class="formContact__info">@lang('formContact.secondRule')</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-gold formContact__button">@lang('formContact.send')</button>
        </div>
    </form>
</section>
