@extends('partial.ae.layout')


@section('content')
    <section class="bg-white d-f f-c jc-s ai-c" style="padding-top: 150px">
        <div class="artforma-lithebox ai-c jc-c d-n">
            <div class="artforma-lithebox__btn d-f ai-c" onclick="changeImageInGalery(-1)">
                <svg width="20px" height="20px" viewBox="0 0 20 20"><path class="artforma-lithebox__btn-svg" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788S18.707,9.212,18.271,9.212z"></path></svg>
            </div>
            <div class="artforma-lithebox-content d-f f-c">
                <div class="artforma-lithebox-content__tittle d-f">
                    <span class="d-f ai-c font18">Test value</span>
                    <div onclick="closeGalery()" class="cursor-pointer d-f ai-c">
                        <svg width="20px" height="20px" viewBox="0 0 24 24">
                            <path class="artforma-lithebox__btn-svg" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"></path>
                        </svg>
                    </div>
                </div>
                <div class="artforma-lithebox-content__image d-f ai-c jc-c" data-current-position>
                    <img class="" loading='lazy'>
                </div>
            </div>
            <div class="artforma-lithebox__btn artforma-lithebox__btn-left d-f ai-c" onclick="changeImageInGalery(1)">
                <svg width="20px" height="20px" viewBox="0 0 20 20"><path class="artforma-lithebox__btn-svg" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788S18.707,9.212,18.271,9.212z"></path></svg>
            </div>
        </div>
        <h1 class="h1 text-center my-5">@lang('smartmirror.decors.title')</h1>
        <p class="text-center font18 col-12 col-md-9 col-lg-7 mb-4">@lang('smartmirror.decors.description')</p>
        <!--<p class="text-center font18 col-12 col-md-9 col-lg-7 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
        <div class="container row ai-s">
            @php
                $colors =
                [
                    "Gray",
                    "White",
                    "Red",
                    "Light-green",
                    "Black",
                    "Purple",
                    "Pink",
                    "Olive",
                    "Makalo",
                    "Wildfire",
                    "Dark-brown",
                    "Dark-green",
                    "Black-gloss",
                    "Beige-shine",
                    "White-gloss",
                    "Brown-Elm",
                    "Acacia",
                    "Brushed-gold",
                    "Brushed-bronze",
                    "Brushed-aluminum",
                    "Brushed-copper",
                    "Silver",
                    "Gold",
                    "Copper-twilight",
                    "White-Marble",
                    "Chicago-Concrete",
                ];
            @endphp

            @foreach($colors as $color)
                <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                    <div class='min-width-100'>
                        <picture>
                            <source srcset='/files/Leaflet/colors/smartmirror/{{ $color }}.webp' type='image/webp'>
                            <img src='/files/Leaflet/colors/smartmirror/{{ $color }}.jpg' alt='{{ __("smartmirror.color.{$color}") }}' class='min-width-100 shadow' loading='lazy'>
                        </picture>
                    </div>
                    <div class='d-f f-c mt-1'><strong class="h3">{{ __("smartmirror.color.{$color}") }}</strong></div>
                </div>
            @endforeach
        </div>
    </section>

    <script>
        function getGaleryContent() {
            return document.querySelectorAll('[data-galery]');
        }

        function getImageWithTitleByElementDataGalery(element) {
            let image = element.querySelector("img.min-width-100").src;
            let title = element.querySelector("strong.h3").innerText;

            return {
                image,
                title
            }
        }

        function closeGalery() {
            document.querySelector('div.artforma-lithebox').classList.remove('d-f');
            document.querySelector('div.artforma-lithebox').classList.add('d-n');
        }

        function setValueGalery(title, image, positionElement) {
            let titleGalery = document.querySelector('div.artforma-lithebox-content__tittle span.d-f.ai-c.font18');
            let imageGalery = document.querySelector('div.artforma-lithebox-content__image img');
            let imageContainerGalery = document.querySelector('div.artforma-lithebox-content__image');

            imageContainerGalery.dataset.currentPosition = positionElement;
            imageGalery.src = image;
            titleGalery.innerText = title;
        }

        function changeGaleryClassToActive() {
            document.querySelector('div.artforma-lithebox').classList.add('d-f');
            document.querySelector('div.artforma-lithebox').classList.remove('d-n');
        }

        function activeGalery(selectContent, positionElement) {
            let { image, title } = getImageWithTitleByElementDataGalery(selectContent);
            setValueGalery(title, image, positionElement);
            changeGaleryClassToActive()
        }

        function getCountAvailablePositionsInGalery() {
            return getGaleryContent().length;
        }

        function getCurrentPositionGalery() {
            return document.querySelector('div.artforma-lithebox-content__image').dataset.currentPosition;
        }

        function getContentGaleryByPosition(position) {
            return getGaleryContent()[position];
        }

        function changeContentGaleryByPosition(position) {
            let selectPosition = getContentGaleryByPosition(position);

            activeGalery(selectPosition, position);
        }

        function changeImageInGalery(betweenPosition) {
            let countPositionsGalery = parseInt(getCountAvailablePositionsInGalery());
            let currentSelectPositionGalery = parseInt(getCurrentPositionGalery());

            let newPositionInGalery = (currentSelectPositionGalery + parseInt(betweenPosition));

            if (newPositionInGalery >= 0 && newPositionInGalery < countPositionsGalery) {
                changeContentGaleryByPosition(newPositionInGalery);
            } else if (newPositionInGalery < 0) {
                changeContentGaleryByPosition(countPositionsGalery - 1);
            } else if (newPositionInGalery >= countPositionsGalery) {
                changeContentGaleryByPosition(0);
            }
        }



        window.addEventListener('load', e => {
            let galeryContent = getGaleryContent();

            galeryContent.forEach((elementGalery, key) => {
                elementGalery.addEventListener('click', e => {
                    activeGalery(elementGalery, key);
                });
            });

            const backgroundLithebox = document.querySelector("div.artforma-lithebox");

            backgroundLithebox.addEventListener('click', (event) => {
                if (event.target === backgroundLithebox) {
                    closeGalery();
                }
            });
        });
    </script>
    <style>
        .border-gray-solid {
            border: 2px solid #e4e4e4;
        }
        .cursor-pointer {
            cursor: pointer;
        }
        .artforma-lithebox-content__tittle {
            user-select: none;
            background-color: #000;
            color: #FFF;
            justify-content: space-between;
            padding: 10px;
        }
        .artforma-lithebox__btn-left{
            transform: rotateY(180deg);
        }
        .artforma-lithebox__btn-svg{
            transition: fill .15s ease;
            fill: #ddd;
            cursor: pointer;
        }

        .artforma-lithebox__btn {
            cursor: pointer;
            margin: 15px;
            padding: 11px;
            font-size: 26px;
            background: #000;
        }

        .artforma-lithebox {
            background: linear-gradient(rgba(30, 30, 30, .9), #000 1810%);
            min-width: 100%;
            max-width: 100%;
            min-height: 100vh;
            max-height: 100vh;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }

        .artforma-lithebox-content {
            overflow: hidden;
        }
        @media (min-width: 767px) {
            .artforma-lithebox-content__image {
                max-height: 750px !important;
                min-height: 400px !important;
                min-width: 400px !important;
                max-width: none !important;
            }
        }
        .artforma-lithebox-content__image {
            max-height: 250px;
            max-width: 250px;
            overflow: hidden;
            user-select: none;
            min-height: 250px;
            min-width: 250px;
        }
        .artforma-lithebox-content__image img {
            height: 100%;
            min-width: 100%;
        }

        .min-width-100 {
            min-width: 100% !important;
        }

        li.breadcrumbs-item {
            display: none !important;
        }

        h1.mb-5 {
            display: none !important;
        }
    </style>
@endsection
