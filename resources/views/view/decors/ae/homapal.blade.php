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

        <h1 class="h1 text-center mt-5 mb-3">@lang('decors.nolan.titleSupportSectionFirst')</h1>
        <div class="container row ai-s">
            @php
                $products = [
                    [
                        'imageSrc' => '205-000U Melamine Black Matt',
                        'kod_producenta' => '205-000U',
                        'title' => 'Melamine Black Matt'
                    ],
                    [
                        'imageSrc' => '205_Melamine Slate Black',
                        'kod_producenta' => '205',
                        'title' => 'Melamine Slate Black'
                    ],
                    [
                        'imageSrc' => '211-000U Melamine Green Matt',
                        'kod_producenta' => '211-000U',
                        'title' => 'Melamine Green Matt'
                    ],
                    [
                        'imageSrc' => '325 Alu Brushed Champagne',
                        'kod_producenta' => '325',
                        'title' => 'Alu Brushed Champagne'
                    ],
                    [
                        'imageSrc' => '325_SRM Alu Brushed Champagne SRM',
                        'kod_producenta' => '325_SRM',
                        'title' => 'Alu Brushed Champagne SRM'
                    ],
                    [
                        'imageSrc' => '342-000 Alu Plain Polished Goldtone',
                        'kod_producenta' => '342-000',
                        'title' => 'Alu Plain Polished Goldtone'
                    ],
                    [
                        'imageSrc' => '347 Alu Plain Polished Coppertone',
                        'kod_producenta' => '347',
                        'title' => 'Alu Plain Polished Coppertone'
                    ],
                    [
                        'imageSrc' => '401 200 Copper Crush',
                        'kod_producenta' => '401 200',
                        'title' => 'Copper Crush'
                    ],
                    [
                        'imageSrc' => '401_200_SRM_Copper Crush SRM',
                        'kod_producenta' => '401_200_SRM',
                        'title' => 'Copper Crush SRM'
                    ],
                    [
                        'imageSrc' => '401_229 Copper Crush Stipple SRM',
                        'kod_producenta' => '401_229',
                        'title' => 'Copper Crush Stipple SRM'
                    ],
                    [
                        'imageSrc' => '401_229 Copper Crush Stipple',
                        'kod_producenta' => '401_229',
                        'title' => 'Copper Crush Stipple'
                    ],
                    [
                        'imageSrc' => '423-980_Alu-Plex-Stainless-Steeltone',
                        'kod_producenta' => '423-980',
                        'title' => 'Alu-Plex-Stainless-Steeltone'
                    ],
                    [
                        'imageSrc' => '431 Alu Crossbrushed Natural',
                        'kod_producenta' => '431',
                        'title' => 'Alu Crossbrushed Natural'
                    ],
                    [
                        'imageSrc' => '431_SRM_Alu Crossbrushed Natural SRM',
                        'kod_producenta' => '431_SRM',
                        'title' => 'Alu Crossbrushed Natural SRM'
                    ],
                    [
                        'imageSrc' => '433 Alu Crossbrushed Stainless Steeltone',
                        'kod_producenta' => '433',
                        'title' => 'Alu Crossbrushed Stainless Steeltone'
                    ],
                    [
                        'imageSrc' => '434 Alu Crossbrushed Goldtone',
                        'kod_producenta' => '434',
                        'title' => 'Alu Crossbrushed Goldtone'
                    ],
                    [
                        'imageSrc' => '437 Alu Crossbrushed Coppertone',
                        'kod_producenta' => '437',
                        'title' => 'Alu Crossbrushed Coppertone'
                    ],
                    [
                        'imageSrc' => '439 Alu Crossbrushed Brownish Grey',
                        'kod_producenta' => '439',
                        'title' => 'Alu Crossbrushed Brownish Grey'
                    ],
                    [
                        'imageSrc' => '439_SRM Alu Crossbrushed Brownish Grey',
                        'kod_producenta' => '439_SRM',
                        'title' => 'Alu Crossbrushed Brownish Grey'
                    ],
                    [
                        'imageSrc' => '441 Alu Brushed Natural',
                        'kod_producenta' => '441',
                        'title' => 'Alu Brushed Natural'
                    ],
                    [
                        'imageSrc' => '441_SRM Alu Brushed Natural SRM',
                        'kod_producenta' => '441_SRM',
                        'title' => 'Alu Brushed Natural SRM'
                    ],
                    [
                        'imageSrc' => '442 Alu Brushed Goldtone',
                        'kod_producenta' => '442',
                        'title' => 'Alu Brushed Goldtone'
                    ],
                    [
                        'imageSrc' => '444-920 Alu Riffel Horizontal Natural',
                        'kod_producenta' => '444-920',
                        'title' => 'Alu Riffel Horizontal Natural'
                    ],
                    [
                        'imageSrc' => '444N Alu Plain Polished Natural',
                        'kod_producenta' => '444N',
                        'title' => 'Alu Plain Polished Natural'
                    ],
                    [
                        'imageSrc' => '446 Alu Brushed Steeltone',
                        'kod_producenta' => '446',
                        'title' => 'Alu Brushed Steeltone'
                    ],
                    [
                        'imageSrc' => '446-920 Alu Riffel Horizontal Steeltone',
                        'kod_producenta' => '446-920',
                        'title' => 'Alu Riffel Horizontal Steeltone'
                    ],
                    [
                        'imageSrc' => '446_SRM_Alu Brushed Steeltone SRM',
                        'kod_producenta' => '446_SRM',
                        'title' => 'Alu Brushed Steeltone SRM'
                    ],
                    [
                        'imageSrc' => '447 Alu Brushed Coppertone',
                        'kod_producenta' => '447',
                        'title' => 'Alu Brushed Coppertone'
                    ],
                    [
                        'imageSrc' => '447-966 Alu Cella Coppertone',
                        'kod_producenta' => '447-966',
                        'title' => 'Alu Cella Coppertone'
                    ],
                    [
                        'imageSrc' => '447_SRM_Alu Brushed Coppertone SRM',
                        'kod_producenta' => '447_SRM',
                        'title' => 'Alu Brushed Coppertone SRM'
                    ],
                    [
                        'imageSrc' => '448 Alu Brushed Black',
                        'kod_producenta' => '448',
                        'title' => 'Alu Brushed Black'
                    ],
                    [
                        'imageSrc' => '448-966 Alu Cella Black',
                        'kod_producenta' => '448-966',
                        'title' => 'Alu Cella Black'
                    ],
                    [
                        'imageSrc' => '451 Alu Brushed Bronzetone',
                        'kod_producenta' => '451',
                        'title' => 'Alu Brushed Bronzetone'
                    ],
                    [
                        'imageSrc' => '451-100 Alu Mesh Bronzetone',
                        'kod_producenta' => '451-100',
                        'title' => 'Alu Mesh Bronzetone'
                    ],
                    [
                        'imageSrc' => '451-360 Alu Brushed Sapphire Bronzetone',
                        'kod_producenta' => '451-360',
                        'title' => 'Alu Brushed Sapphire Bronzetone'
                    ],
                    [
                        'imageSrc' => '451_Alu Brushed Bronzetone SRM',
                        'kod_producenta' => '451',
                        'title' => 'Alu Brushed Bronzetone SRM'
                    ],
                    [
                        'imageSrc' => '454 Alu Brushed Rosegoltone',
                        'kod_producenta' => '454',
                        'title' => 'Alu Brushed Rosegoltone'
                    ],
                    [
                        'imageSrc' => '454-360 Alu Brushed Sapphire Rosegold',
                        'kod_producenta' => '454-360',
                        'title' => 'Alu Brushed Sapphire Rosegold'
                    ],
                    [
                        'imageSrc' => '455-360 Alu Brushed Sapphire Graphite',
                        'kod_producenta' => '455-360',
                        'title' => 'Alu Brushed Sapphire Graphite'
                    ],
                    [
                        'imageSrc' => '455_000 Alu Brushed Graphite SRM',
                        'kod_producenta' => '455_000',
                        'title' => 'Alu Brushed Graphite SRM'
                    ],
                    [
                        'imageSrc' => '456 Alu Brushed Medium Bronzetone',
                        'kod_producenta' => '456',
                        'title' => 'Alu Brushed Medium Bronzetone'
                    ],
                    [
                        'imageSrc' => '456_SRM_Alu Brushed Medium Bronzetone SRM',
                        'kod_producenta' => '456_SRM',
                        'title' => 'Alu Brushed Medium Bronzetone SRM'
                    ],
                    [
                        'imageSrc' => '459 100 Alu Mesh Anthracite',
                        'kod_producenta' => '459 100',
                        'title' => 'Alu Mesh Anthracite'
                    ],
                    [
                        'imageSrc' => '469-920 Alu Riffel Horizontal Anthracite',
                        'kod_producenta' => '469-920',
                        'title' => 'Alu Riffel Horizontal Anthracite'
                    ],
                    [
                        'imageSrc' => '470 Alu Mirror Polished',
                        'kod_producenta' => '470',
                        'title' => 'Alu Mirror Polished'
                    ],
                    [
                        'imageSrc' => '470-100 Alu Mirror Polished Mesh Natural',
                        'kod_producenta' => '470-100',
                        'title' => 'Alu Mirror Polished Mesh Natural'
                    ],
                    [
                        'imageSrc' => '470-124 Alu Mirror Polished Cascade Natural',
                        'kod_producenta' => '470-124',
                        'title' => 'Alu Mirror Polished Cascade Natural'
                    ],
                    [
                        'imageSrc' => '470-636 Alu Mirror Polished Lava Natural',
                        'kod_producenta' => '470-636',
                        'title' => 'Alu Mirror Polished Lava Natural'
                    ],
                    [
                        'imageSrc' => '470-966 Alu Mirror Polished Cella Natural',
                        'kod_producenta' => '470-966',
                        'title' => 'Alu Mirror Polished Cella Natural'
                    ],
                    [
                        'imageSrc' => '471 Alu Mirror Polished Goldtone',
                        'kod_producenta' => '471',
                        'title' => 'Alu Mirror Polished Goldtone'
                    ],
                    [
                        'imageSrc' => '471-100 Alu Mirror Polished Mesh Goldtone',
                        'kod_producenta' => '471-100',
                        'title' => 'Alu Mirror Polished Mesh Goldtone'
                    ],
                    [
                        'imageSrc' => '471-124 Alu Mirror Polished Cascade Goldtone',
                        'kod_producenta' => '471-124',
                        'title' => 'Alu Mirror Polished Cascade Goldtone'
                    ],
                    [
                        'imageSrc' => '471-636 Alu Mirror Polished Lava Goldtone',
                        'kod_producenta' => '471-636',
                        'title' => 'Alu Mirror Polished Lava Goldtone'
                    ],
                    [
                        'imageSrc' => '471-966_Alu Mirror Polished Cella Goldtone',
                        'kod_producenta' => '471-966',
                        'title' => 'Alu Mirror Polished Cella Goldtone'
                    ],
                    [
                        'imageSrc' => '473 Alu Mirror Polished Tea',
                        'kod_producenta' => '473',
                        'title' => 'Alu Mirror Polished Tea'
                    ],
                    [
                        'imageSrc' => '473-124 Alu Mirror Polished Cascade Tea',
                        'kod_producenta' => '473-124',
                        'title' => 'Alu Mirror Polished Cascade Tea'
                    ],
                    [
                        'imageSrc' => '473-636 Alu Mirror Polished Lava Tea',
                        'kod_producenta' => '473-636',
                        'title' => 'Alu Mirror Polished Lava Tea'
                    ],
                    [
                        'imageSrc' => '474 Alu Mirror Polished Smokey Grey',
                        'kod_producenta' => '474',
                        'title' => 'Alu Mirror Polished Smokey Grey'
                    ],
                    [
                        'imageSrc' => '474-124 Alu Mirror Polished Cascade Smokey Grey',
                        'kod_producenta' => '474-124',
                        'title' => 'Alu Mirror Polished Cascade Smokey Grey'
                    ],
                    [
                        'imageSrc' => '474-636 Alu Mirror Polished Lava Smokey Grey',
                        'kod_producenta' => '474-636',
                        'title' => 'Alu Mirror Polished Lava Smokey Grey'
                    ],
                    [
                        'imageSrc' => '474-966 Alu Mirror Polished Cella Smokey Grey',
                        'kod_producenta' => '474-966',
                        'title' => 'Alu Mirror Polished Cella Smokey Grey'
                    ],
                    [
                        'imageSrc' => '475 Alu Plain Polished Gunmetal Matt',
                        'kod_producenta' => '475',
                        'title' => 'Alu Plain Polished Gunmetal Matt'
                    ],
                    [
                        'imageSrc' => '475-636_Alu Plain Polished Lava Gunmetal Matt',
                        'kod_producenta' => '475-636',
                        'title' => 'Alu Plain Polished Lava Gunmetal Matt'
                    ],
                    [
                        'imageSrc' => '477 Alu Mirror Polished Coppertone',
                        'kod_producenta' => '477',
                        'title' => 'Alu Mirror Polished Coppertone'
                    ],
                    [
                        'imageSrc' => '477-124 Alu Mirror Polished Cascade Coppertone',
                        'kod_producenta' => '477-124',
                        'title' => 'Alu Mirror Polished Cascade Coppertone'
                    ],
                    [
                        'imageSrc' => '477-636 Alu Mirror Polished Lava Coppertone',
                        'kod_producenta' => '477-636',
                        'title' => 'Alu Mirror Polished Lava Coppertone'
                    ],
                    [
                        'imageSrc' => '477_966 Alu Mirror Polished Cella Coppertone',
                        'kod_producenta' => '477_966',
                        'title' => 'Alu Mirror Polished Cella Coppertone'
                    ],
                    [
                        'imageSrc' => '490 Copper Antique',
                        'kod_producenta' => '490',
                        'title' => 'Copper Antique'
                    ],
                    [
                        'imageSrc' => '490_SRM_Copper Antique SRM',
                        'kod_producenta' => '490_SRM',
                        'title' => 'Copper Antique SRM'
                    ],
                    [
                        'imageSrc' => '500-491Brass Plain Antique',
                        'kod_producenta' => '500-491',
                        'title' => 'Brass Plain Antique'
                    ],
                    [
                        'imageSrc' => '500-502 Brass Moon',
                        'kod_producenta' => '500-502',
                        'title' => 'Brass Moon'
                    ],
                    [
                        'imageSrc' => '500_340_Brass Diamond Antique SRM',
                        'kod_producenta' => '500_340',
                        'title' => 'Brass Diamond Antique SRM'
                    ],
                    [
                        'imageSrc' => '5312 Brushed Umbra',
                        'kod_producenta' => '5312',
                        'title' => 'Brushed Umbra'
                    ],
                    [
                        'imageSrc' => '546 Alu Brushed Stainless Steeltone',
                        'kod_producenta' => '546',
                        'title' => 'Alu Brushed Stainless Steeltone'
                    ],
                    [
                        'imageSrc' => '630 Copper Black Patinated',
                        'kod_producenta' => '630',
                        'title' => 'Copper Black Patinated'
                    ],
                    [
                        'imageSrc' => '635-502 Copper Moon Turquoise',
                        'kod_producenta' => '635-502',
                        'title' => 'Copper Moon Turquoise'
                    ],
                    [
                        'imageSrc' => '636-502 Copper Moon Dark',
                        'kod_producenta' => '636-502',
                        'title' => 'Copper Moon Dark'
                    ],
                    [
                        'imageSrc' => '641-100_Stainless Steel Brushed',
                        'kod_producenta' => '641-100',
                        'title' => 'Stainless Steel Brushed'
                    ],
                    [
                        'imageSrc' => '690-340 Copper Diamond Antique',
                        'kod_producenta' => '690-340',
                        'title' => 'Copper Diamond Antique'
                    ],
                    [
                        'imageSrc' => '690-340_Copper Diamond Antique SRM',
                        'kod_producenta' => '690-340',
                        'title' => 'Copper Diamond Antique SRM'
                    ],
                    [
                        'imageSrc' => '690-360 Brass Diamond Antique',
                        'kod_producenta' => '690-360',
                        'title' => 'Brass Diamond Antique'
                    ],
                    [
                        'imageSrc' => '695 Copper Stratos Diagonal',
                        'kod_producenta' => '695',
                        'title' => 'Copper Stratos Diagonal'
                    ],
                    [
                        'imageSrc' => '695D_SRM Copper Stratos Diagonal SRM',
                        'kod_producenta' => '695D_SRM',
                        'title' => 'Copper Stratos Diagonal SRM'
                    ],
                    [
                        'imageSrc' => '704-966 Alu Cella Goldtone',
                        'kod_producenta' => '704-966',
                        'title' => 'Alu Cella Goldtone'
                    ],
                    [
                        'imageSrc' => '791 Alu Brushed Natural Special',
                        'kod_producenta' => '791',
                        'title' => 'Alu Brushed Natural Special'
                    ],
                    [
                        'imageSrc' => '794 Alu Brushed Goldtone Special',
                        'kod_producenta' => '794',
                        'title' => 'Alu Brushed Goldtone Special'
                    ],
                    [
                        'imageSrc' => '796 Alu Brushed Steeltone Special',
                        'kod_producenta' => '796',
                        'title' => 'Alu Brushed Steeltone Special'
                    ],
                    [
                        'imageSrc' => '800 100 Alu Mesh Natural',
                        'kod_producenta' => '800 100',
                        'title' => 'Alu Mesh Natural'
                    ],
                    [
                        'imageSrc' => '800-200 Alu Crush',
                        'kod_producenta' => '800-200',
                        'title' => 'Alu Crush'
                    ],
                    [
                        'imageSrc' => '800_200_Alu Crush SRM',
                        'kod_producenta' => '800_200',
                        'title' => 'Alu Crush SRM'
                    ],
                    [
                        'imageSrc' => '807-340 Alu Diamond Bronzetone',
                        'kod_producenta' => '807-340',
                        'title' => 'Alu Diamond Bronzetone'
                    ],
                    [
                        'imageSrc' => '807-980_Alu-Plex-Bronzetone',
                        'kod_producenta' => '807-980',
                        'title' => 'Alu-Plex-Bronzetone'
                    ],
                    [
                        'imageSrc' => '8200 Magnetic Board for individual finish',
                        'kod_producenta' => '8200',
                        'title' => 'Magnetic Board for individual finish'
                    ],
                    [
                        'imageSrc' => '8205_Magnetic Board Black Matt',
                        'kod_producenta' => '8205',
                        'title' => 'Magnetic Board Black Matt'
                    ],
                    [
                        'imageSrc' => '8206 Magnetic Board White Glossy',
                        'kod_producenta' => '8206',
                        'title' => 'Magnetic Board White Glossy'
                    ],
                    [
                        'imageSrc' => '8207_Magnetic Board White Matt',
                        'kod_producenta' => '8207',
                        'title' => 'Magnetic Board White Matt'
                    ],
                    [
                        'imageSrc' => '8208 Magnetic Board Light Grey Glossy',
                        'kod_producenta' => '8208',
                        'title' => 'Magnetic Board Light Grey Glossy'
                    ],
                    [
                        'imageSrc' => '820_000  Alu Softmatt Natural SRM',
                        'kod_producenta' => '820_000',
                        'title' => 'Alu Softmatt Natural SRM'
                    ],
                    [
                        'imageSrc' => '8211_Magnetic Board Green Matt',
                        'kod_producenta' => '8211',
                        'title' => 'Magnetic Board Green Matt'
                    ],
                    [
                        'imageSrc' => '8214_Magnetic Board Smokey Blue Matt',
                        'kod_producenta' => '8214',
                        'title' => 'Magnetic Board Smokey Blue Matt'
                    ],
                    [
                        'imageSrc' => '8231_Magnetic Board Alu Crossbrushed Natural',
                        'kod_producenta' => '8231',
                        'title' => 'Magnetic Board Alu Crossbrushed Natural'
                    ],
                    [
                        'imageSrc' => '8232 Magnetic Board Apple Green Glossy',
                        'kod_producenta' => '8232',
                        'title' => 'Magnetic Board Apple Green Glossy'
                    ],
                    [
                        'imageSrc' => '8234 Magnetic Board Macchiato Matt',
                        'kod_producenta' => '8234',
                        'title' => 'Magnetic Board Macchiato Matt'
                    ],
                    [
                        'imageSrc' => '825 100 Alu Mesh Champagne',
                        'kod_producenta' => '825 100',
                        'title' => 'Alu Mesh Champagne'
                    ],
                    [
                        'imageSrc' => '8253Magnetic Board Wine Red Matt',
                        'kod_producenta' => '8253',
                        'title' => 'Magnetic Board Wine Red Matt'
                    ],
                    [
                        'imageSrc' => '8267Magnetic Board Slate Black',
                        'kod_producenta' => '8267',
                        'title' => 'Magnetic Board Slate Black'
                    ],
                    [
                        'imageSrc' => '856_ Alu Dots Steeltone',
                        'kod_producenta' => '856_',
                        'title' => 'Alu Dots Steeltone'
                    ],
                    [
                        'imageSrc' => 'csm_8259MAgnetic Board Apple Green Matt Chalk',
                        'kod_producenta' => 'csm_8259M',
                        'title' => 'Agnetic Board Apple Green Matt Chalk'
                    ],
                    [
                        'imageSrc' => 'csm_8277Magnetic Board Curry Glossy',
                        'kod_producenta' => 'csm_8277',
                        'title' => 'Magnetic Board Curry Glossy'
                    ],
                    [
                        'imageSrc' => 'M2006_Alu-Plain-Polished-Bronzeton',
                        'kod_producenta' => 'M2006',
                        'title' => 'Alu-Plain-Polished-Bronzeton'
                    ],
                    [
                        'imageSrc' => 'M4512_Alu-Crush-Goldtone_',
                        'kod_producenta' => 'M4512',
                        'title' => 'Alu-Crush-Goldtone_'
                    ],
                    [
                        'imageSrc' => 'M5308_Plex_Aluminum',
                        'kod_producenta' => 'M5308',
                        'title' => 'Plex_Aluminum'
                    ],
                    [
                        'imageSrc' => 'M5309_Plex-Gold_',
                        'kod_producenta' => 'M5309',
                        'title' => 'Plex-Gold_'
                    ],
                    [
                        'imageSrc' => 'M5311_Brushed_Argent',
                        'kod_producenta' => 'M5311',
                        'title' => 'Brushed_Argent'
                    ],
                    [
                        'imageSrc' => 'M5391_Graphite_Veil',
                        'kod_producenta' => 'M5391',
                        'title' => 'Graphite_Veil'
                    ],
                    [
                        'imageSrc' => 'M5392_Copper-Veil',
                        'kod_producenta' => 'M5392',
                        'title' => 'Copper-Veil'
                    ],
                    [
                        'imageSrc' => 'M6422 Brushed Cupro',
                        'kod_producenta' => 'M6422',
                        'title' => 'Brushed Cupro'
                    ],
                    [
                        'imageSrc' => 'M6423_Brushed-Brass',
                        'kod_producenta' => 'M6423',
                        'title' => 'Brushed-Brass'
                    ],
                    [
                        'imageSrc' => 'M6424_Plex-Coppe',
                        'kod_producenta' => 'M6424',
                        'title' => 'Plex-Coppe'
                    ],
                    [
                        'imageSrc' => 'M6426_Plex-Brass',
                        'kod_producenta' => 'M6426',
                        'title' => 'Plex-Brass'
                    ],
                    [
                        'imageSrc' => 'M6427_Hammered-Aluminium',
                        'kod_producenta' => 'M6427',
                        'title' => 'Hammered-Aluminium'
                    ],
                    [
                        'imageSrc' => 'M6428_Hammered-Aluminium',
                        'kod_producenta' => 'M6428',
                        'title' => 'Hammered-Aluminium'
                    ],
                    [
                        'imageSrc' => 'M6429_Hammered-Cupro',
                        'kod_producenta' => 'M6429',
                        'title' => 'Hammered-Cupro'
                    ],
                    [
                        'imageSrc' => 'M6430_Hammered-Brass_',
                        'kod_producenta' => 'M6430',
                        'title' => 'Hammered-Brass_'
                    ],
                    [
                        'imageSrc' => 'M6431_Hammered-Graphite',
                        'kod_producenta' => 'M6431',
                        'title' => 'Hammered-Graphite'
                    ],
                    [
                        'imageSrc' => 'M8547_Oxibronze',
                        'kod_producenta' => 'M8547',
                        'title' => 'Oxibronze'
                    ],
                    [
                        'imageSrc' => 'M9958_Antique-Rubbed-Copper',
                        'kod_producenta' => 'M9958',
                        'title' => 'Antique-Rubbed-Copper'
                    ],
                    [
                        'imageSrc' => '_8276 Magnetic Board Curry Matt',
                        'kod_producenta' => '8276',
                        'title' => 'Magnetic Board Curry Matt'
                    ]
                ];
            @endphp
            @foreach($products as $product)


            <div class='col-6 col-md-4 col-lg-2 d-f f-c ai-s jc-c mb-2 mb-md-4 pointer' data-galery>
                <div class='min-width-100'>
                    <picture>
                        {{--<source srcset="/files/Leaflet/colors/nolan/{{ $product["imageSrc"] }}.webp" type="image/webp">--}}
                        <img src='/files/Leaflet/colors/nolan/{{ $product["imageSrc"] }}.jpg' alt='Alu Brushed Bronzetone' height="200" class='min-width-100' loading='lazy'>
                    </picture>
                </div>
                <div class='d-f f-c mt-1'><strong class="h3">{{ $product["title"] }}</strong><span class="font14">{{ $product["kod_producenta"] }}</span></div>
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

        @media (max-width: 992px) {
            .artforma-lithebox-content__image > img {
                min-height: 300px;
            }
        }
    </style>

@endsection
