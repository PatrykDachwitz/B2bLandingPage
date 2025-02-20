<section class="container-fluid mt-5 pb-5 bg-gray d-flex flex-column align-items-center" id="contactForm">
    <p class="text-center text-white fs-5 my-3">
        @if(isset($otherDescriptionFirst))
            {{ $otherDescriptionFirst }}
        @else
            @lang('formContact.contactWithForm')
        @endif
        <br />
        @if(isset($otherDescriptionSecond))
            {{ $otherDescriptionSecond }}
        @else
            @lang('formContact.contact24Hours')
        @endif
    </p>
    <form class="row formContact g-3" method="POST" action="{{ route('formContact') }}" data-form-contact>

        @csrf
        <div class="col-12">
            <input name="names" class="formContact__input formContact__input--ae @error('names') is-invalid @enderror" type="text" placeholder="{{ old('names', __('formContact.names')) }}*" >
            <div class="invalid-feedback text-end" data-form="names">
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <input name="email" class="formContact__input formContact__input--ae @error('email') is-invalid @enderror" type="email" placeholder="{{ old('email', __('formContact.email')) }}*" >
            <div class="invalid-feedback text-end" data-form="email">
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <input name="phone" class="formContact__input formContact__input--ae @error('phone') is-invalid @enderror" type="text" placeholder="{{ old('phone', __('formContact.phone')) }}">
            <div class="invalid-feedback text-end" data-form="phone"></div>
        </div>
        <div class="col-12">
            <textarea name="message" class="formContact__input formContact__input--ae formContact__input--textarea @error('message') is-invalid @enderror" placeholder="@lang('formContact.message')">{{ old('message', '') }}</textarea>
            <div class="invalid-feedback text-end" data-form="message">  </div>
        </div>
        <div class="col-12 text-start formContact__info my-0 text-end">@lang('formContact.requireInputs')</div>
        <div class="col-12 text-start formContact__info mt-2 text-end">
            <p data-rule-container="admin" class="overflow-hidden mb-1" style="max-height: 38px">@lang('formContact.adminData')</p>
            <span data-rule-span="admin" class="formContact__button--rule" data-expand-text="@lang('formContact.expandText')" data-collapse-text="@lang('formContact.collapseText')">@lang('formContact.expandText')</span>
        </div>
        <div class="col-12 text-start d-flex align-items-start justify-content-end">
            <div class="formContact__info text-end">
                <p data-rule-container="first" class="overflow-hidden mb-1" style="max-height: 38px">@lang('formContact.firstRule')</p>
                <span class="formContact__button--rule" data-rule-span="first" data-expand-text="@lang('formContact.expandText')" data-collapse-text="@lang('formContact.collapseText')">@lang('formContact.expandText')</span>
            </div>
            <input class="m-1 formContact__input--checkbox @error('rule_one') is-invalid @enderror" name="rule_one" type="checkbox" >
        </div>
        <div class="invalid-feedback text-end col-12" data-form="rule_one"></div>
        <div class="col-12 text-start d-flex align-items-start mt-2 justify-content-end">
            <div class="formContact__info text-end">
                <p>@lang('formContact.secondRule')</p>
            </div>
            <input class="m-1 formContact__input--checkbox @error('rule_second') is-invalid @enderror" name="rule_second" type="checkbox" >
        </div>
        <div class="invalid-feedback text-end col-12" data-form="rule_second"></div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-gold formContact__button fs-6">@lang('formContact.send')</button>
        </div>

        <div class="bg-success p-3 text-white text-center" style="display:none;" data-form-success>
            <h4 class="fs-5 m-0"></h4>
        </div>
        <div class="bg-danger p-3 text-white text-center" style="display:none;" data-form-danger>
            <h4 class="fs-5 m-0">@lang('formContact.errorSendMail')</h4>
        </div>
    </form>
</section>
