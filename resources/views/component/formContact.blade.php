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
    <form class="row formContact g-3" method="POST" action="{{ route('formContact') }}">
        @csrf
        <div class="col-12">
            <input name="names" class="formContact__input  @error('names') is-invalid @enderror" type="text" placeholder="{{ old('names', __('formContact.names')) }}" >
            @error('names')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-12 col-lg-6">
            <input name="email" class="formContact__input @error('email') is-invalid @enderror" type="email" placeholder="{{ old('email', __('formContact.email')) }}" >
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-12 col-lg-6">
            <input name="phone" class="formContact__input @error('phone') is-invalid @enderror" type="text" placeholder="{{ old('phone', __('formContact.phone')) }}">
            @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-12">
            <textarea name="message" class="formContact__input formContact__input--textarea @error('message') is-invalid @enderror" placeholder="@lang('formContact.message')">{{ old('message', '') }}</textarea>
            @error('message')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-12 text-start formContact__info my-0">@lang('formContact.requireInputs')</div>
        <div class="col-12 text-start formContact__info mt-2">
            <p data-rule-container="admin" class="overflow-hidden mb-1" style="max-height: 38px">@lang('formContact.adminData')</p>
            <span data-rule-span="admin" class="formContact__button--rule" data-expand-text="@lang('formContact.expandText')" data-collapse-text="@lang('formContact.collapseText')">@lang('formContact.expandText')</span>
        </div>
        <div class="col-12 text-start d-flex align-items-start">
            <input class="m-1 formContact__input--checkbox @error('rule_one') is-invalid @enderror" name="rule_one" type="checkbox" >
            <div class="formContact__info">
                <p data-rule-container="first" class="overflow-hidden mb-1" style="max-height: 38px">@lang('formContact.firstRule')</p>
                <span class="formContact__button--rule" data-rule-span="first" data-expand-text="@lang('formContact.expandText')" data-collapse-text="@lang('formContact.collapseText')">@lang('formContact.expandText')</span>
            </div>
            @error('rule_one')
            <div class="invalid-feedback" style="min-width: 100%">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-12 text-start d-flex align-items-start mt-2">
            <input class="m-1 formContact__input--checkbox @error('rule_second') is-invalid @enderror" name="rule_second" type="checkbox" >
            <div class="formContact__info">
                <p>@lang('formContact.secondRule')</p>
            </div>
            @error('rule_second')
            <div class="invalid-feedback" style="min-width: 100%">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-gold formContact__button fs-6">@lang('formContact.send')</button>
        </div>

        @if(session()->has('messageSuccess'))
            <div class="bg-success p-3 text-white text-center">
                <h4 class="fs-5 m-0">@lang('formContact.successSendMail')</h4>
            </div>
        @endif
    </form>
</section>
