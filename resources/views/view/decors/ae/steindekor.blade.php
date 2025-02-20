@extends('partial.ae.layout')


@section('content')


    <section class="bg-white d-f f-c jc-s ai-c" style="padding-top: 150px" id="steindekor">
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
        <h1 class="h1 text-center my-5">@lang('decors.steindekor.title')</h1>
        <p class="text-center font18 col-12 col-md-9 col-lg-7 mb-4">@lang('decors.steindekor.description')</p>
        <h2 class="h2 text-center my-5">@lang('decors.steindekor.titleSupportSectionFirst')</h2>
        <!--<p class="text-center font18 col-12 col-md-9 col-lg-7 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
        <div class="container row ai-s">
            @php
                $stoneDecors =
                [
                [
                'name' => 'Silver Grey Łupek',
                'shortCode' => 'Silver Grey Schiefer'
                ],
                [
                'name' => 'Autumn Łupek',
                'shortCode' => 'Autumn Schiefer'
                ],
                [
                'name' => 'Autumn White Łupek',
                'shortCode' => 'Autumn White Schiefer'
                ],
                [
                'name' => 'D.Copper Łupek',
                'shortCode' => 'D.Copper Schiefer'
                ],
                [
                'name' => 'Jerra Green Łupek',
                'shortCode' => 'Jerra Green Schiefer'
                ],
                [
                'name' => 'Autumn Rustic Łupek',
                'shortCode' => 'Autumn Rustic Schiefer'
                ],
                [
                'name' => 'Gold Green Łupek',
                'shortCode' => 'Gold Green Schiefer'
                ],
                [
                'name' => 'Silver Shine Łupek',
                'shortCode' => 'Silver Shine Schiefer'
                ],
                [
                'name' => 'Black Slate Łupek',
                'shortCode' => 'Black Slate Schiefer'
                ],
                [
                'name' => 'Black Shimmer Łupek',
                'shortCode' => 'Black Shimmer Schiefer'
                ],
                [
                'name' => 'Silver Galaxy Łupek',
                'shortCode' => 'Silver Galaxy Schiefer'
                ],
                [
                'name' => 'Black Line Łupek',
                'shortCode' => 'Black Line Schiefer'
                ],
                [
                'name' => 'Rustic Oxido Naturalna Rdza',
                'shortCode' => 'Rustikales Oxido Naturrost'
                ],
                [
                'name' => 'Copper Łupek',
                'shortCode' => 'Copper Schiefer'
                ],
                [
                'name' => 'Burning Forest Łupek',
                'shortCode' => 'Burning Forest Schiefer'
                ],
                [
                'name' => 'Rain Forest Marmur',
                'shortCode' => 'Rain Forest Marmor'
                ],
                [
                'name' => 'Sandy Łupek',
                'shortCode' => 'Sandy Schiefer'
                ],
                [
                'name' => 'Monson Black Kwarcyt',
                'shortCode' => 'Monson Black Quarzit'
                ],
                [
                'name' => 'Mint White Piaskowiec',
                'shortCode' => 'Mint White Sandstein'
                ],
                [
                'name' => 'Marble Arctic Storm Marmur',
                'shortCode' => 'Marble Arctic Storm Marmor'
                ]
                ];
            @endphp
            @foreach($stoneDecors as $color)
                <div class='col-6 col-md-4 col-lg-3 d-f f-c ai-s jc-c mb-2 mb-md-4 cursor-pointer' data-galery>
                    <div class='min-width-100'>
                        <picture>
                            <source srcset='/files/Leaflet/colors/stone_2/{{ str_replace(" ", "-", $color["name"]) }}.webp' type='image/webp'>
                            <img src='/files/Leaflet/colors/stone_2/{{ str_replace(" ", "-", $color["name"]) }}.jpg' alt='{{ $color["shortCode"] }}' class='min-width-100' loading='lazy'>
                        </picture>
                    </div>
                    <div class='d-f f-c mt-1'><strong class="h3">{{ $color["shortCode"] }}</strong></div>
                </div>
            @endforeach
        </div>



    </section>
    <section class="bg-white d-f f-c jc-s ai-c" style="padding-top: 150px" id="glasdekor">

        <h1 class="h1 text-center my-5">@lang('decors.steindekor.titleSecond')</h1>
        <p class="text-center font18 col-12 col-md-9 col-lg-7 mb-4">@lang('decors.steindekor.descriptionSecond')</p>
        <h2 class="h2 text-center my-5">@lang('decors.steindekor.titleSupportSectionForth')</h2>
        <!--<p class="text-center font18 col-12 col-md-9 col-lg-7 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
        <div class="container row ai-s">
            @php
                $glassDecors =
                [
                    [
                    'name' => "Echo Antyku",
                    'shortCode' => "Blick der Ewigkeit"
                    ],
                    [
                    'name' => "Prześwity Nadziei",
                    'shortCode' => "Nebelwald"
                    ],
                    [
                    'name' => "Skrzydlany Kalejdoskop",
                    'shortCode' => "Flügel der Farbe"
                    ],
                    [
                    'name' => "Karminowe Objęcia",
                    'shortCode' => "Blumenharmonie"
                    ],
                    [
                    'name' => "Spektrum Natury",
                    'shortCode' => "Spektrum der Natur"
                    ],
                    [
                    'name' => "Błękitna Melodia",
                    'shortCode' => "Blaue Melodie"
                    ],
                    [
                    'name' => "Eteryczny Gaj",
                    'shortCode' => "Waldschattierungen"
                    ],
                    [
                    'name' => "Koralowe Królestwo",
                    'shortCode' => "Meeresträume"
                    ],
                    [
                    'name' => "Kwitnąca Harmonia",
                    'shortCode' => "Ruhiger Garten"
                    ],
                    [
                    'name' => "Kwiatowy Epos",
                    'shortCode' => "Blumenstrauß des Lebens"
                    ],
                    [
                    'name' => "Mistyczne Damy",
                    'shortCode' => "Geheimnisvolle Damen"
                    ],
                    [
                    'name' => "Rozkwit Pragnień",
                    'shortCode' => "Blühende Wünsche"
                    ]
                ];

            @endphp

            @foreach($glassDecors as $color)

                <div class='col-6 col-md-4 col-lg-3 d-f f-c ai-s jc-c mb-2 mb-md-4 cursor-pointer' data-galery>
                    <div class='min-width-100'>
                        <picture>
                            <source srcset='/files/Leaflet/colors/glass/{{ str_replace(" ", "-", $color["name"]) }}.webp' type='image/webp'>
                            <img src='/files/Leaflet/colors/glass/{{ str_replace(" ", "-", $color["name"]) }}.jpg' alt='{{ $color["shortCode"] }}' class='min-width-100 border-gray-solid' loading='lazy'>
                        </picture>
                    </div>
                    <div class='d-f f-c mt-1'><strong class="h3">{{ __("decors.glassDecorNames." . $color['name']) }}</strong></div>
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

        @media (min-width: 1000px) {
            .artforma-lithebox-content__image {
                min-height: 400px !important;
                min-width: 400px !important;
            }
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

        .artforma-lithebox-content__image {
            max-height: 750px !important;
            overflow: hidden;
            user-select: none;
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
