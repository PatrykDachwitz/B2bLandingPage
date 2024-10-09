
@if(isset($names))
    @lang('formContact.names'): {{ $names }} <br />
@endif
@if(isset($phone))
    @lang('footer.phone') {{ $phone }} <br />
@endif

@if(isset($mail))
    @lang('footer.mail'): {{ $mail }} <br />
@endif

@if(isset($messageMail))
    @lang('footer.message'): {{ $messageMail }} <br />
@endif
