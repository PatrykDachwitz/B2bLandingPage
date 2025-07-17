@extends('partial.layout')


@section('content')

    @include("component.banner.slider")

    @foreach($categoriesBanner as $categoryBanner)
        @include("component.banner.{$categoryBanner->type}", [
        "category" => $categoryBanner,
        "banners" => $categoryBanner->banner
    ])
    @endforeach

    <section class="bg-gray container-fluid pb-5 mt-5 d-flex flex-column collaboration" id="collaborationPath">
        <p class="text-center text-white m-0 fs-1 py-5">@lang('mainPage.cooperation')</p>
        <div class="container-1920 row mx-1 mx-md-5 px-md-5 g-5 g-md-0 collaboration">
            @for($i = 1; $i < 5; $i++)
                <div class="col-12 col-md-3 d-flex collaboration__column d-flex flex-row justify-content-md-start flex-md-column align-items-end align-items-md-start pe-md-3">
                    <b class="collaboration__number mb-md-5 ps-3">{{ $i }}</b>
                    <p class="ps-5 ps-md-2 fs-6">
                        @switch($i)
                            @case('1')
                                @lang('mainPage.contactAboutProduct')
                                @break;
                            @case('2')
                                @lang('mainPage.sendOffers')
                                @break;
                            @case('3')
                                @lang('mainPage.sendCompleteOrder')
                                @break;
                            @case('4')
                                @lang('mainPage.realizationOrder')
                                @break;
                        @endswitch
                    </p>
                </div>
            @endfor
        </div>
    </section>

    @include('component.formContact')
@endsection
