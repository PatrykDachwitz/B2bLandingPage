@extends('partial.layout')


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

        <h1 class="h1 text-center mt-5 mb-3">Musterpalette - Möbel Nolan</h1>
        <p class="text-center font18 col-12 col-md-9 col-lg-7 mb-4">Stöbern Sie in unserer Designpalette und wählen Sie aus einer Vielzahl von Optionen, die Ihren Bedürfnissen entsprechen</p>
        <h2 class="h2 text-center mt-4">Verfügbare Muster von Möbelfronten</h2>
        <h3 class="font20 text-center my-3">Metalllaminate</h3>
        <!--<p class="text-center font16 col-12 col-md-9 col-lg-7 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
        <div class="container row ai-s">
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Bronzetone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Bronzetone.png' alt='Alu Brushed Bronzetone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Bronzetone</strong><span class="font14">451</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Coppertone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Coppertone.png' alt='Alu Brushed Coppertone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Coppertone</strong><span class="font14">447</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Natural.png' alt='Alu Brushed Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Natural</strong><span class="font14">441</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Stainless.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Stainless.png' alt='Alu Brushed Stainless' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Stainless Steeltone</strong><span class="font14">546</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Goldtone.png' alt='Alu Brushed Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Goldtone</strong><span class="font14">442</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Brushed-Umbra.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Brushed-Umbra.png' alt='Brushed Umbra' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Brushed Umbra</strong><span class="font14">M5312</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Medium-Bronzetone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Medium-Bronzetone.png' alt='Alu Brushed Medium Bronzetone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Medium Bronzetone</strong><span class="font14">456</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Brushed-Cupro.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Brushed-Cupro.png' alt='Brushed Cupro' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Brushed Cupro</strong><span class="font14">M6422</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Rosegold.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Rosegold.png' alt='Alu Brushed Rosegold' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Rosegold</strong><span class="font14">454</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Natural-Specia.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Natural-Specia.png' alt='Alu Brushed Natural Specia' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Natural Special</strong><span class="font14">791</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Steeltone-Special.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Steeltone-Special.png' alt='Alu Brushed Steeltone Special' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Steeltone Special</strong><span class="font14">796</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Steeltone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Steeltone.png' alt='Alu Brushed Steeltone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Steeltone</strong><span class="font14">446</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Black.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Black.png' alt='Alu Brushed Black' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Black</strong><span class="font14">448</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Brushed-Argent.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Brushed-Argent.png' alt='Brushed Argent' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Brushed Argent</strong><span class="font14">M5311</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Brushed-Brass.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Brushed-Brass.png' alt='Brushed Brass' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Brushed Brass</strong><span class="font14">M6423</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Goldtone-Special.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Goldtone-Special.png' alt='Alu Brushed Goldtone Special' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Goldtone Special</strong><span class="font14">794</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Champagne.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Champagne.png' alt='Alu Brushed Champagne' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Champagne</strong><span class="font14">325</span></div>
            </div>



            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crossbrushed-Brownish-Grey.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crossbrushed-Brownish-Grey.png' alt='Alu Crossbrushed Brownish Grey' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crossbrushed Brownish Grey</strong><span class="font14">439</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crossbrushed-Coppertone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crossbrushed-Coppertone.png' alt='Alu Crossbrushed Coppertone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crossbrushed Coppertone</strong><span class="font14">437</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crossbrushed-Natural-.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crossbrushed-Natural-.png' alt='Alu Crossbrushed Natural ' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crossbrushed Natural</strong><span class="font14">431</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crossbrushed-Stainless-Steeltone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crossbrushed-Stainless-Steeltone.png' alt='Alu Crossbrushed Stainless Steeltone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crossbrushed Stainless Steeltone</strong><span class="font14">433</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crossbrushed-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crossbrushed-Goldtone.png' alt='Alu Crossbrushed Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crossbrushed Goldtone</strong><span class="font14">434</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plain-Polished-Bronzetone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plain-Polished-Bronzetone.png' alt='Alu Plain Polished Bronzetone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plain Polished Bronzetone</strong><span class="font14">M2006</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plain-Polished-Coppertone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plain-Polished-Coppertone.png' alt='Alu Plain Polished Coppertone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plain Polished Coppertone</strong><span class="font14">347/000</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plain-Polished-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plain-Polished-Natural.png' alt='Alu Plain Polished Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plain Polished Natural</strong><span class="font14">444N</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plain-Polished-Gunmetal-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plain-Polished-Gunmetal-Matt.png' alt='Alu Plain Polished Gunmetal Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plain Polished Gunmetal Matt</strong><span class="font14">475/000</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plain-Polished-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plain-Polished-Goldtone.png' alt='Alu Plain Polished Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plain Polished Goldtone</strong><span class="font14">342/000</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Tea.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Tea.png' alt='Alu Mirror Polished Tea' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Tea</strong><span class="font14">473</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Coppertone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Coppertone.png' alt='Alu Mirror Polished Coppertone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Coppertone</strong><span class="font14">477</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Superior-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Superior-Natural.png' alt='Alu Mirror Polished Superior Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Superior Natural</strong><span class="font14">470</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Smokey-Grey.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Smokey-Grey.png' alt='Alu Mirror Polished Smokey Grey' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Smokey Grey</strong><span class="font14">474</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Goldtone.png' alt='Alu Mirror Polished Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Goldtone</strong><span class="font14">471</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plex-Bronzetone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plex-Bronzetone.png' alt='Alu Plex Bronzetone ' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plex Bronzetone</strong><span class="font14">807/980</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Plex-Copper.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Plex-Copper.png' alt='Plex Copper' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Plex Copper</strong><span class="font14">M6424</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Plex-Aluminium.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Plex-Aluminium.png' alt='Plex Aluminium' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Plex Aluminium</strong><span class="font14">M5308</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plex-Stainless-Steeltone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plex-Stainless-Steeltone.png' alt='Alu Plex Stainless Steeltone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plex Stainless Steeltone</strong><span class="font14">423/980</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Plex-Gold.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Plex-Gold.png' alt='Plex Gold' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Plex Gold</strong><span class="font14">M5309</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Plex-Brass.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Plex-Brass.png' alt='Plex Brass' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Plex Brass</strong><span class="font14">M6426</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Brass-Plain-Antique.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Brass-Plain-Antique.png' alt='Brass Plain Antique' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Brass Plain Antique</strong><span class="font14">500/491</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Stratos-Diagonal.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Stratos-Diagonal.png' alt='Copper Stratos Diagonal' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Stratos Diagonal</strong><span class="font14">695D</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Antique.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Antique.png' alt='Copper Antique' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Antique</strong><span class="font14">490</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Veil.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Veil.png' alt='Copper Veil' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Veil</strong><span class="font14">M5392</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Graphite-Veil.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Graphite-Veil.png' alt='Graphite Veil' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Graphite Veil</strong><span class="font14">M5391</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Matte-Oxibronze.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Matte-Oxibronze.png' alt='Matte Oxibronze' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Matte Oxibronze</strong><span class="font14">M8547</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Antique-Rubbed-Copper.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Antique-Rubbed-Copper.png' alt='Antique Rubbed Copper' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Antique Rubbed Copper</strong><span class="font14">M9958</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crush.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crush.png' alt='Alu Crush' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crush</strong><span class="font14">800/200</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crush-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crush-Goldtone.png' alt='Alu Crush Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crush Goldtone</strong><span class="font14">M4512</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Crush-Stipple.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Crush-Stipple.png' alt='Copper Crush Stipple' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Crush Stipple</strong><span class="font14">401/229</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Crush.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Crush.png' alt='Copper Crush' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Crush</strong><span class="font14">401/200</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Black-Patinated.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Black-Patinated.png' alt='Copper Black Patinated' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Black Patinated</strong><span class="font14">630</span></div>
            </div>




            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Moon-Turquoise.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Moon-Turquoise.png' alt='Copper Moon Turquoise' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Moon Turquoise</strong><span class="font14">635/502</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Moon-Dark.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Moon-Dark.png' alt='Copper Moon Dark' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Moon Dark</strong><span class="font14">636/502</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Brass-Moon.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Brass-Moon.png' alt='Brass Moon' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Brass Moon</strong><span class="font14">500/502</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Moon-Light.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Moon-Light.png' alt='Copper Moon Light' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Moon Light</strong><span class="font14">637/502</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Hammered-Brass.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Hammered-Brass.png' alt='Hammered Brass' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Hammered Brass</strong><span class="font14">M6430</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Hammered-Cupro.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Hammered-Cupro.png' alt='Hammered Cupro' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Hammered Cupro</strong><span class="font14">M6429</span></div>
            </div>



            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Hammered-Aluminium.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Hammered-Aluminium.png' alt='Hammered Aluminium' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Hammered Aluminium</strong><span class="font14">M6427</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Hammered-Argent.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Hammered-Argent.png' alt='Hammered Argent' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Hammered Argent</strong><span class="font14">M6428</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Hammered-Graphite.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Hammered-Graphite.png' alt='Hammered Graphite' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Hammered Graphite</strong><span class="font14">M6431</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mesh-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mesh-Natural.png' alt='Alu Mesh Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mesh Natural</strong><span class="font14">800/100</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Mesh-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Mesh-Natural.png' alt='Alu Mirror Polished Mesh Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Mesh Natural</strong><span class="font14">470/100</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Mesh-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Mesh-Goldtone.png' alt='Alu Mirror Polished Mesh Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Mesh Goldtone</strong><span class="font14">471/100</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mesh-Champagne.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mesh-Champagne.png' alt='Alu Mesh Champagne' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mesh Champagne</strong><span class="font14">825/100</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mesh-Anthracite.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mesh-Anthracite.png' alt='Alu Mesh Anthracite' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mesh Anthracite</strong><span class="font14">459/100</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mesh-Bronzetone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mesh-Bronzetone.png' alt='Alu Mesh Bronzetone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mesh Bronzetone</strong><span class="font14">451/100</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cella-Coppertone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cella-Coppertone.png' alt='Alu Mirror Polished Cella Coppertone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cella Coppertone</strong><span class="font14">477/966</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Cella-Coppertone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Cella-Coppertone.png' alt='Alu Cella Coppertone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Cella Coppertone</strong><span class="font14">447/966</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cella-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cella-Goldtone.png' alt='Alu Mirror Polished Cella Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cella Goldtone</strong><span class="font14">471/966</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Cella-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Cella-Goldtone.png' alt='Alu Cella Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Cella Goldtone</strong><span class="font14">704/966</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cella-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cella-Natural.png' alt='Alu Mirror Polished Cella Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cella Natural</strong><span class="font14">470/966</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cella-Smokey-Grey.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cella-Smokey-Grey.png' alt='Alu Mirror Polished Cella Smokey Grey' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cella Smokey Grey</strong><span class="font14">474/966</span></div>
            </div>



            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Cella-Black.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Cella-Black.png' alt='Alu Cella Black' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Cella Black</strong><span class="font14">448/966</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Smokey-Grey.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Smokey-Grey.png' alt='Alu Mirror Polished Cascade Smokey Grey' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cascade Smokey Grey</strong><span class="font14">474/124</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Natural.png' alt='Alu Mirror Polished Cascade Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cascade Natural</strong><span class="font14">470/124</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Goldtone.png' alt='Alu Mirror Polished Cascade Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cascade Goldtone</strong><span class="font14">471/124</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Coppertone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Coppertone.png' alt='Alu Mirror Polished Cascade Coppertone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cascade Coppertone</strong><span class="font14">477/124</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Tea.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Cascade-Tea.png' alt='Alu Mirror Polished Cascade Tea' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Cascade Tea</strong><span class="font14">473/124</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Natural.png' alt='Alu Mirror Polished Lava Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Lava Natural</strong><span class="font14">470/636</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plain-Polished-Lava-Gunmetal-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plain-Polished-Lava-Gunmetal-Matt.png' alt='Alu Plain Polished Lava Gunmetal Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plain Polished Lava Gunmetal Matt</strong><span class="font14">475/636</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Smokey-Grey.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Smokey-Grey.png' alt='Alu Mirror Polished Lava Smokey Grey' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Lava Smokey Grey</strong><span class="font14">474/636</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Goldtone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Goldtone.png' alt='Alu Mirror Polished Lava Goldtone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Lava Goldtone</strong><span class="font14">471/636</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Coppertone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Coppertone.png' alt='Alu Mirror Polished Lava Coppertone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Lava Coppertone</strong><span class="font14">477/636</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Tea.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Mirror-Polished-Lava-Tea.png' alt='Alu Mirror Polished Lava Tea' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Mirror Polished Lava Tea</strong><span class="font14">473/636</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Diamond-Antique.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Diamond-Antique.png' alt='Copper Diamond Antique' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Diamond Antique</strong><span class="font14">690/340</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Diamond-Bronzetone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Diamond-Bronzetone.png' alt='Alu Diamond Bronzetone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Diamond Bronzetone</strong><span class="font14">807/340</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Brass-Diamond-Antique.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Brass-Diamond-Antique.png' alt='Brass Diamond Antique' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Brass Diamond Antique</strong><span class="font14">500/340</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Sapphire-Champagne.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Sapphire-Champagne.png' alt='Alu Brushed Sapphire Champagne' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Sapphire Champagne</strong><span class="font14">325/360</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Sapphire-Bronzetone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Sapphire-Bronzetone.png' alt='Alu Brushed Sapphire Champagne' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Sapphire Bronzetone</strong><span class="font14">451/360</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Sapphire-Rosegold.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Sapphire-Rosegold.png' alt='Alu Brushed Sapphire Rosegold' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Sapphire Rosegold</strong><span class="font14">454/360</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Sapphire-Graphite.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Sapphire-Graphite.png' alt='Alu Brushed Sapphire Graphite' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Sapphire Graphite</strong><span class="font14">455/360</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Riffel-Horizontal-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Riffel-Horizontal-Natural.png' alt='Alu Riffel Horizontal Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Riffel Horizontal Natural</strong><span class="font14">444/920N</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Riffel-Horizontal-Anthracite.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Riffel-Horizontal-Anthracite.png' alt='Alu Riffel Horizontal Anthracite' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Riffel Horizontal Anthracite</strong><span class="font14">469/920N</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Riffel-Horizontal-Steeltone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Riffel-Horizontal-Steeltone.png' alt='Alu Riffel Horizontal Steeltone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Riffel Horizontal Steeltone</strong><span class="font14">446/920</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Stainless-Steel-Brushed.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Stainless-Steel-Brushed.png' alt='Stainless Steel Brushed' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Stainless Steel Brushed</strong><span class="font14">641/000</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Dots-Steeltone.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Dots-Steeltone.png' alt='Alu Dots Steeltone' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Dots Steeltone</strong><span class="font14">856</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Softmatt-Natural-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Softmatt-Natural-SRM.png' alt='Alu Softmatt Natural SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Softmatt Natural SRM</strong><span class="font14">820/000 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Natural-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Natural-SRM.png' alt='Alu Brushed Natural SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Natural SRM</strong><span class="font14">441 SRM</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Plain-Polished-Natural-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Plain-Polished-Natural-SRM.png' alt='Alu Plain Polished Natural SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Plain Polished Natural SRM</strong><span class="font14">444N SRM</span></div>
            </div>



            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Coppertone-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Coppertone-SRM.png' alt='Alu Brushed Coppertone SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Coppertone SRM</strong><span class="font14">447 SRM</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Bronzetone-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Bronzetone-SRM.png' alt='Alu Brushed Bronzetone SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Bronzetone SRM</strong><span class="font14">451 SRM</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Rosegold-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Rosegold-SRM.png' alt='Alu Brushed Rosegold SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Rosegold SRM</strong><span class="font14">454 SRM</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Champagne-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Champagne-SRM.png' alt='Alu Brushed Champagne SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Champagne SRM</strong><span class="font14">325 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Medium-Bronzetone-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Medium-Bronzetone-SRM.png' alt='Alu Brushed Medium Bronzetone SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Medium Bronzetone SRM</strong><span class="font14">456 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Steeltone-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Steeltone-SRM.png' alt='Alu Brushed Steeltone SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Steeltone SRM</strong><span class="font14">446 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Brushed-Graphite-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Brushed-Graphite-SRM.png' alt='Alu Brushed Graphite SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Brushed Graphite SRM</strong><span class="font14">455/000 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crossbrushed-Natural-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crossbrushed-Natural-SRM.png' alt='Alu Crossbrushed Natural SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crossbrushed Natural SRM</strong><span class="font14">431 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crossbrushed-Brownish-Grey-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crossbrushed-Brownish-Grey-SRM.png' alt='Alu Crossbrushed Brownish Grey SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crossbrushed Brownish Grey SRM</strong><span class="font14">439 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Crush-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Crush-SRM.png' alt='Copper Crush SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Crush SRM</strong><span class="font14">401/200 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Crush-Stipple-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Crush-Stipple-SRM.png' alt='Copper Crush Stipple SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Crush Stipple SRM</strong><span class="font14">401/229 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Alu-Crush-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Alu-Crush-SRM.png' alt='Alu Crush SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Alu Crush SRM</strong><span class="font14">800/200 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Brass-Diamond-Antique-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Brass-Diamond-Antique-SRM.png' alt='Brass Diamond Antique SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Brass Diamond Antique SRM</strong><span class="font14">500/340 SRM</span></div>
            </div>



            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Diamond-Antique-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Diamond-Antique-SRM.png' alt='Copper Diamond Antique SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Diamond Antique SRM</strong><span class="font14">690/340 SRM</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Antique-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Antique-SRM.png' alt='Copper Antique SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Antique SRM</strong><span class="font14">490 SRM</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Copper-Stratos-Diagonal-SRM.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Copper-Stratos-Diagonal-SRM.png' alt='Copper Stratos Diagonal SRM' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Copper Stratos Diagonal SRM</strong><span class="font14">695D SRM</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-White-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-White-Matt.png' alt='Magnetic Board White Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board White Matt</strong><span class="font14">8207</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-White-Glossy.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-White-Glossy.png' alt='Magnetic Board White Glossy' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board White Glossy</strong><span class="font14">8206</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-White-Glossy-with-grid-points.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-White-Glossy-with-grid-points.png' alt='Magnetic Board White Glossy with grid points' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board White Glossy with grid points</strong><span class="font14">8202</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Alu-Crossbrushed-Natural.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Alu-Crossbrushed-Natural.png' alt='Magnetic Board Alu Crossbrushed Natural' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Alu Crossbrushed Natural</strong><span class="font14">8231</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Light-Grey-Glossy.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Light-Grey-Glossy.png' alt='Magnetic Board Light Grey Glossy' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Light Grey Glossy</strong><span class="font14">8208</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-for-individual-finish.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-for-individual-finish.png' alt='Magnetic Board for individual finish' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board for individual finish</strong><span class="font14">8200</span></div>
            </div>




            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Stone-Grey-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Stone-Grey-Matt.png' alt='Magnetic Board Stone Grey Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Stone Grey Matt</strong><span class="font14">8225</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Stone-Grey-Glossy.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Stone-Grey-Glossy.png' alt='Magnetic Board Stone Grey Glossy' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Stone Grey Glossy</strong><span class="font14">8224</span></div>
            </div>
            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Curry-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Curry-Matt.png' alt='Magnetic Board Curry Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Curry Matt</strong><span class="font14">8276</span></div>
            </div>




            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Curry-Glossy.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Curry-Glossy.png' alt='Magnetic Board Curry Glossy' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Curry Glossy</strong><span class="font14">8277</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Apple-Green-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Apple-Green-Matt.png' alt='Magnetic Board Apple Green Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Apple Green Matt</strong><span class="font14">8259</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Apple-Green-Glossy.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Apple-Green-Glossy.png' alt='Magnetic Board Apple Green Glossy' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Apple Green Glossy</strong><span class="font14">8232</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Green-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Green-Matt.png' alt='Magnetic Board Green Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Green Matt</strong><span class="font14">8211</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Smokey-Blue-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Smokey-Blue-Matt.png' alt='Magnetic Board Smokey Blue Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Smokey Blue Matt</strong><span class="font14">8214</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Macchiato-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Macchiato-Matt.png' alt='Magnetic Board Macchiato Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Macchiato Matt</strong><span class="font14">8234</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Macchiato-Glossy.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Macchiato-Glossy.png' alt='Magnetic Board Macchiato Glossy' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Macchiato Glossy</strong><span class="font14">8233</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Wine-Red-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Wine-Red-Matt.png' alt='Magnetic Board Wine Red Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Wine Red Matt</strong><span class="font14">8253</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Slate-Black.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Slate-Black.png' alt='Magnetic Board Slate Black' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Slate Black</strong><span class="font14">8267</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Magnetic-Board-Black-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Magnetic-Board-Black-Matt.png' alt='Magnetic Board Black Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Magnetic Board Black Matt</strong><span class="font14">8205</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Melamine-Slate-Black.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Melamine-Slate-Black.png' alt='Melamine Slate Black' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Melamine Slate Black</strong><span class="font14">205</span></div>
            </div>


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Melamine-Black-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Melamine-Black-Matt.png' alt='Melamine Black Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Melamine Black Matt</strong><span class="font14">205/000U</span></div>
            </div>

            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        <source srcset='/files/Leaflet/colors/Melamine-Green-Matt.webp' type='image/webp'>
                        <img src='/files/Leaflet/colors/Melamine-Green-Matt.png' alt='Melamine Green Matt' class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">Melamine Green Matt</strong><span class="font14">211/000U</span></div>
            </div>


        </div>
        <h3 class="font20 text-center mt-5 mb-3">Steinlaminat</h3>
        <!--<p class="text-center font16 col-12 col-md-9 col-lg-7 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
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
                <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                    <div class='min-width-100'>
                        <picture>
                            <source srcset='/files/Leaflet/colors/stone/{{ str_replace(" ", "-", $color["name"]) }}.webp' type='image/webp'>
                            <img src='/files/Leaflet/colors/stone/{{ str_replace(" ", "-", $color["name"]) }}.jpg' alt='{{ $color["shortCode"] }}' class='min-width-100' loading='lazy'>
                        </picture>
                    </div>
                    <div class='d-f f-c mt-1'><strong class="h3">{{ $color["shortCode"] }}</strong></div>
                </div>
            @endforeach
        </div>
        <h3 class="font20 text-center mt-5 mb-3">MDF lackiert</h3>
        <!--<p class="text-center font16 col-12 col-md-9 col-lg-7 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
        <div class="container row ai-s">
            @foreach([
            "RAL 000 15 00-P",
            "RAL 000 40 00-P",
            "RAL 000 55 00-P",
            "RAL 000 55 00-P-T",
            "RAL 000 85 00-P",
            "RAL 010 30 44-P",
            "RAL 010 40 53-P",
            "RAL 010 40 53-P-T",
            "RAL 010 60 45-P",
            "RAL 010 80 20-P",
            "RAL 020 20 20-P",
            "RAL 020 30 40-P",
            "RAL 020 50 58-P",
            "RAL 020 50 58-P-T",
            "RAL 020 90 10-P",
            "RAL 030 30 20-P",
            "RAL 030 40 30-P",
            "RAL 030 40 30-P-T",
            "RAL 030 60 30-P",
            "RAL 030 80 10-P",
            "RAL 040 30 40-P",
            "RAL 040 50 60-P",
            "RAL 040 50 60-P-T",
            "RAL 040 60 60-P",
            "RAL 040 80 20-P",
            "RAL 050 30 30-P",
            "RAL 050 50 50-P",
            "RAL 050 50 78-P",
            "RAL 050 50 78-P-T",
            "RAL 050 80 20-P",
            "RAL 060 30 27-P",
            "RAL 060 50 50-P",
            "RAL 060 60 80-P",
            "RAL 060 60 80-P-T",
            "RAL 060 80 30-P",
            "RAL 070 40 40-P",
            "RAL 070 70 80-P",
            "RAL 070 70 80-P-T",
            "RAL 070 80 50-P",
            "RAL 070 90 10-P",
            "RAL 075 40 38-P",
            "RAL 075 60 70-P",
            "RAL 075 60 70-P-T",
            "RAL 075 80 20-P",
            "RAL 075 80 60-P",
            "RAL 080 30 26-P",
            "RAL 080 50 40-P",
            "RAL 080 70 50-P",
            "RAL 080 70 50-P-T",
            "RAL 080 80 20-P",
            "RAL 085 40 20-P",
            "RAL 085 60 60-P",
            "RAL 085 80 85-P",
            "RAL 085 80 85-P-T",
            "RAL 085 90 10-P",
            "RAL 090 50 40-P",
            "RAL 090 70 80-P",
            "RAL 090 80 90-P",
            "RAL 090 80 90-P-T",
            "RAL 090 90 30-P",
            "RAL 095 50 50-P",
            "RAL 095 60 70-P",
            "RAL 095 60 70-P-T",
            "RAL 095 70 70-P",
            "RAL 095 90 40-P",
            "RAL 100 40 40-P",
            "RAL 100 60 60-P",
            "RAL 100 80 70-P",
            "RAL 100 80 70-P-T",
            "RAL 100 90 40-P",
            "RAL 110 50 55-P",
            "RAL 110 70 70-P",
            "RAL 110 70 70-P-T",
            "RAL 110 80 70-P",
            "RAL 110 90 30-P",
            "RAL 120 40 40-P",
            "RAL 120 50 40-P",
            "RAL 120 60 60-P",
            "RAL 120 60 60-P-T",
            "RAL 120 80 30-P",
            "RAL 130 30 20-P",
            "RAL 130 60 50-P",
            "RAL 130 60 50-P-T",
            "RAL 130 80 40-P",
            "RAL 130 90 10-P",
            "RAL 140 20 20-P",
            "RAL 140 40 50-P",
            "RAL 140 60 70-P",
            "RAL 140 60 70-P-T",
            "RAL 140 80 20-P",
            "RAL 150 30 20-P",
            "RAL 150 30 20-P-T",
            "RAL 150 50 20-P",
            "RAL 150 60 20-P",
            "RAL 150 70 10-P",
            "RAL 160 30 40-P",
            "RAL 160 50 60-P",
            "RAL 160 50 60-P-T",
            "RAL 160 70 45-P",
            "RAL 160 80 30-P",
            "RAL 170 30 20-P",
            "RAL 170 30 20-P-T",
            "RAL 170 40 20-P",
            "RAL 170 60 20-P",
            "RAL 170 80 10-P",
            "RAL 180 40 45-P",
            "RAL 180 60 50-P",
            "RAL 180 60 50-P-T",
            "RAL 180 70 25-P",
            "RAL 180 90 10-P",
            "RAL 190 30 20-P",
            "RAL 190 30 20-P-T",
            "RAL 190 40 20-P",
            "RAL 190 50 20-P",
            "RAL 190 70 20-P",
            "RAL 200 30 33-P",
            "RAL 200 50 45-P",
            "RAL 200 60 35-P",
            "RAL 200 80 10-P",
            "RAL 210 40 20-P",
            "RAL 210 50 20-P",
            "RAL 210 60 30-P",
            "RAL 210 70 35-P",
            "RAL 210 70 35-P-T",
            "RAL 220 30 30-P",
            "RAL 220 40 40-P",
            "RAL 220 40 40-P-T",
            "RAL 220 50 40-P",
            "RAL 220 70 35-P",
            "RAL 230 30 25-P",
            "RAL 230 40 20-P",
            "RAL 230 50 30-P",
            "RAL 230 50 30-P-T",
            "RAL 230 70 20-P",
            "RAL 240 20 22-P",
            "RAL 240 30 35-P",
            "RAL 240 60 40-P",
            "RAL 240 80 20-P",
            "RAL 250 30 20-P",
            "RAL 250 50 30-P",
            "RAL 250 50 30-P-T",
            "RAL 250 60 30-P",
            "RAL 250 80 20-P",
            "RAL 260 20 20-P",
            "RAL 260 40 45-P",
            "RAL 260 40 45-P-T",
            "RAL 260 50 40-P",
            "RAL 260 80 15-P",
            "RAL 270 30 20-P",
            "RAL 270 30 20-P-T",
            "RAL 270 40 20-P",
            "RAL 270 60 20-P",
            "RAL 270 70 10-P",
            "RAL 280 30 40-P",
            "RAL 280 30 40-P-T",
            "RAL 280 40 40-P",
            "RAL 280 50 30-P",
            "RAL 280 80 10-P",
            "RAL 290 30 30-P",
            "RAL 290 30 30-P-T",
            "RAL 290 50 30-P",
            "RAL 290 60 20-P",
            "RAL 290 70 10-P",
            "RAL 300 20 30-P",
            "RAL 300 40 40-P",
            "RAL 300 40 40-P-T",
            "RAL 300 70 20-P",
            "RAL 300 90 05-P",
            "RAL 310 40 20-P",
            "RAL 310 50 30-P",
            "RAL 310 50 30-P-T",
            "RAL 310 60 20-P",
            "RAL 310 70 10-P",
            "RAL 320 20 20-P",
            "RAL 320 30 37-P",
            "RAL 320 30 37-P-T",
            "RAL 320 50 30-P",
            "RAL 320 80 15-P",
            "RAL 330 30 20-P",
            "RAL 330 50 40-P",
            "RAL 330 50 40-P-T",
            "RAL 330 60 20-P",
            "RAL 330 70 10-P",
            "RAL 340 30 38-P",
            "RAL 340 40 45-P",
            "RAL 340 40 45-P-T",
            "RAL 340 60 40-P",
            "RAL 340 80 20-P",
            "RAL 350 20 20-P",
            "RAL 350 40 20-P",
            "RAL 350 50 40-P",
            "RAL 350 50 40-P-T",
            "RAL 350 60 20-P",
            "RAL 360 30 15-P",
            "RAL 360 30 30-P",
            "RAL 360 50 40-P",
            "RAL 360 50 40-P-T",
            "RAL 360 70 15-P"
            ] as $colorRal)
                <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                    <div class='min-width-100'>
                        <picture>
                            <source srcset='/files/Leaflet/colors/ral/{{ str_replace(" ", "-", $colorRal) }}.webp' type='image/webp'>
                            <img src='/files/Leaflet/colors/ral/{{ str_replace(" ", "-", $colorRal) }}.jpg' alt='{{ $colorRal }}' class='min-width-100' loading='lazy'>
                        </picture>
                    </div>
                    <div class='d-f f-c mt-1'><strong class="h3">{{ $colorRal }}</strong></div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="bg-white d-f f-c jc-s ai-c">
        <h2 class="h2 text-center mt-5 mb-2">Verfügbare Designs der Möbelseiten</h2>
        <h3 class="font20 text-center mb-4 mt-2">MDF lackiert</h3>
        <!--<p class="text-center font16 col-12 col-md-9 col-lg-7 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
        <div class="container row ai-s">
            @foreach([
            "RAL 000 15 00-P",
            "RAL 000 40 00-P",
            "RAL 000 55 00-P",
            "RAL 000 55 00-P-T",
            "RAL 000 85 00-P",
            "RAL 010 30 44-P",
            "RAL 010 40 53-P",
            "RAL 010 40 53-P-T",
            "RAL 010 60 45-P",
            "RAL 010 80 20-P",
            "RAL 020 20 20-P",
            "RAL 020 30 40-P",
            "RAL 020 50 58-P",
            "RAL 020 50 58-P-T",
            "RAL 020 90 10-P",
            "RAL 030 30 20-P",
            "RAL 030 40 30-P",
            "RAL 030 40 30-P-T",
            "RAL 030 60 30-P",
            "RAL 030 80 10-P",
            "RAL 040 30 40-P",
            "RAL 040 50 60-P",
            "RAL 040 50 60-P-T",
            "RAL 040 60 60-P",
            "RAL 040 80 20-P",
            "RAL 050 30 30-P",
            "RAL 050 50 50-P",
            "RAL 050 50 78-P",
            "RAL 050 50 78-P-T",
            "RAL 050 80 20-P",
            "RAL 060 30 27-P",
            "RAL 060 50 50-P",
            "RAL 060 60 80-P",
            "RAL 060 60 80-P-T",
            "RAL 060 80 30-P",
            "RAL 070 40 40-P",
            "RAL 070 70 80-P",
            "RAL 070 70 80-P-T",
            "RAL 070 80 50-P",
            "RAL 070 90 10-P",
            "RAL 075 40 38-P",
            "RAL 075 60 70-P",
            "RAL 075 60 70-P-T",
            "RAL 075 80 20-P",
            "RAL 075 80 60-P",
            "RAL 080 30 26-P",
            "RAL 080 50 40-P",
            "RAL 080 70 50-P",
            "RAL 080 70 50-P-T",
            "RAL 080 80 20-P",
            "RAL 085 40 20-P",
            "RAL 085 60 60-P",
            "RAL 085 80 85-P",
            "RAL 085 80 85-P-T",
            "RAL 085 90 10-P",
            "RAL 090 50 40-P",
            "RAL 090 70 80-P",
            "RAL 090 80 90-P",
            "RAL 090 80 90-P-T",
            "RAL 090 90 30-P",
            "RAL 095 50 50-P",
            "RAL 095 60 70-P",
            "RAL 095 60 70-P-T",
            "RAL 095 70 70-P",
            "RAL 095 90 40-P",
            "RAL 100 40 40-P",
            "RAL 100 60 60-P",
            "RAL 100 80 70-P",
            "RAL 100 80 70-P-T",
            "RAL 100 90 40-P",
            "RAL 110 50 55-P",
            "RAL 110 70 70-P",
            "RAL 110 70 70-P-T",
            "RAL 110 80 70-P",
            "RAL 110 90 30-P",
            "RAL 120 40 40-P",
            "RAL 120 50 40-P",
            "RAL 120 60 60-P",
            "RAL 120 60 60-P-T",
            "RAL 120 80 30-P",
            "RAL 130 30 20-P",
            "RAL 130 60 50-P",
            "RAL 130 60 50-P-T",
            "RAL 130 80 40-P",
            "RAL 130 90 10-P",
            "RAL 140 20 20-P",
            "RAL 140 40 50-P",
            "RAL 140 60 70-P",
            "RAL 140 60 70-P-T",
            "RAL 140 80 20-P",
            "RAL 150 30 20-P",
            "RAL 150 30 20-P-T",
            "RAL 150 50 20-P",
            "RAL 150 60 20-P",
            "RAL 150 70 10-P",
            "RAL 160 30 40-P",
            "RAL 160 50 60-P",
            "RAL 160 50 60-P-T",
            "RAL 160 70 45-P",
            "RAL 160 80 30-P",
            "RAL 170 30 20-P",
            "RAL 170 30 20-P-T",
            "RAL 170 40 20-P",
            "RAL 170 60 20-P",
            "RAL 170 80 10-P",
            "RAL 180 40 45-P",
            "RAL 180 60 50-P",
            "RAL 180 60 50-P-T",
            "RAL 180 70 25-P",
            "RAL 180 90 10-P",
            "RAL 190 30 20-P",
            "RAL 190 30 20-P-T",
            "RAL 190 40 20-P",
            "RAL 190 50 20-P",
            "RAL 190 70 20-P",
            "RAL 200 30 33-P",
            "RAL 200 50 45-P",
            "RAL 200 60 35-P",
            "RAL 200 80 10-P",
            "RAL 210 40 20-P",
            "RAL 210 50 20-P",
            "RAL 210 60 30-P",
            "RAL 210 70 35-P",
            "RAL 210 70 35-P-T",
            "RAL 220 30 30-P",
            "RAL 220 40 40-P",
            "RAL 220 40 40-P-T",
            "RAL 220 50 40-P",
            "RAL 220 70 35-P",
            "RAL 230 30 25-P",
            "RAL 230 40 20-P",
            "RAL 230 50 30-P",
            "RAL 230 50 30-P-T",
            "RAL 230 70 20-P",
            "RAL 240 20 22-P",
            "RAL 240 30 35-P",
            "RAL 240 60 40-P",
            "RAL 240 80 20-P",
            "RAL 250 30 20-P",
            "RAL 250 50 30-P",
            "RAL 250 50 30-P-T",
            "RAL 250 60 30-P",
            "RAL 250 80 20-P",
            "RAL 260 20 20-P",
            "RAL 260 40 45-P",
            "RAL 260 40 45-P-T",
            "RAL 260 50 40-P",
            "RAL 260 80 15-P",
            "RAL 270 30 20-P",
            "RAL 270 30 20-P-T",
            "RAL 270 40 20-P",
            "RAL 270 60 20-P",
            "RAL 270 70 10-P",
            "RAL 280 30 40-P",
            "RAL 280 30 40-P-T",
            "RAL 280 40 40-P",
            "RAL 280 50 30-P",
            "RAL 280 80 10-P",
            "RAL 290 30 30-P",
            "RAL 290 30 30-P-T",
            "RAL 290 50 30-P",
            "RAL 290 60 20-P",
            "RAL 290 70 10-P",
            "RAL 300 20 30-P",
            "RAL 300 40 40-P",
            "RAL 300 40 40-P-T",
            "RAL 300 70 20-P",
            "RAL 300 90 05-P",
            "RAL 310 40 20-P",
            "RAL 310 50 30-P",
            "RAL 310 50 30-P-T",
            "RAL 310 60 20-P",
            "RAL 310 70 10-P",
            "RAL 320 20 20-P",
            "RAL 320 30 37-P",
            "RAL 320 30 37-P-T",
            "RAL 320 50 30-P",
            "RAL 320 80 15-P",
            "RAL 330 30 20-P",
            "RAL 330 50 40-P",
            "RAL 330 50 40-P-T",
            "RAL 330 60 20-P",
            "RAL 330 70 10-P",
            "RAL 340 30 38-P",
            "RAL 340 40 45-P",
            "RAL 340 40 45-P-T",
            "RAL 340 60 40-P",
            "RAL 340 80 20-P",
            "RAL 350 20 20-P",
            "RAL 350 40 20-P",
            "RAL 350 50 40-P",
            "RAL 350 50 40-P-T",
            "RAL 350 60 20-P",
            "RAL 360 30 15-P",
            "RAL 360 30 30-P",
            "RAL 360 50 40-P",
            "RAL 360 50 40-P-T",
            "RAL 360 70 15-P"
            ] as $colorRal)
                <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                    <div class='min-width-100'>
                        <picture>
                            <source srcset='/files/Leaflet/colors/ral/{{ str_replace(" ", "-", $colorRal) }}.webp' type='image/webp'>
                            <img src='/files/Leaflet/colors/ral/{{ str_replace(" ", "-", $colorRal) }}.jpg' alt='{{ $colorRal }}' class='min-width-100' loading='lazy'>
                        </picture>
                    </div>
                    <div class='d-f f-c mt-1'><strong class="h3">{{ $colorRal }}</strong></div>
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
