<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "slug" => "colorLine",
                "active" => true,
                'work_name' => 'colorLine',
                'gallery' => 6,
            ],
            [
                "slug" => "gleamLine",
                "active" => false,
                'work_name' => 'gleamLine',
                'gallery' => 6,
            ],
            [
                "slug" => "nolan",
                "active" => true,
                'work_name' => 'nolan',
                'gallery' => 8,
            ],
            [
                "slug" => "solidLine",
                "active" => true,
                'work_name' => 'solidLine',
                'gallery' => 6,
            ],
            [
                "slug" => "steindekor",
                "active" => true,
                'work_name' => 'steindekor',
                'gallery' => 8,
            ],
            [
                "slug" => "stoneLine",
                "active" => true,
                'work_name' => 'stoneLine',
                'gallery' => 12,
            ],
            [
                "slug" => "losano",
                "active" => true,
                'work_name' => 'losano',
                'gallery' => 5,
            ],
            [
                "slug" => "zora",
                "active" => true,
                'work_name' => 'zora',
                'gallery' => 6,
            ],
            [
                "slug" => "smartmirror",
                "active" => true,
                'work_name' => 'smartmirror',
                'gallery' => 3,
            ],
        ];
        /* Nowe produkty */

        $newProducts = [
            [
                "slug" => "round-stone-frame-mirror",
                "active" => true,
                'work_name' => 'homapalOkr',
                'gallery' => 4,
            ],
            [
                "slug" => "modern-irregular-stone-frame",
                "active" => true,
                'work_name' => 'homapalRom',
                'gallery' => 4,
            ],
            [
                "slug" => "irregular-stone-frame-mirror",
                "active" => true,
                'work_name' => 'homapalObka',
                'gallery' => 4,
            ],
            [
                "slug" => "oval-stone-frame-mirror",
                "active" => true,
                'work_name' => 'homapalPok',
                'gallery' => 4,
            ],
            [
                "slug" => "asymmetric-stone-frame-mirror",
                "active" => true,
                'work_name' => 'homapalJaj',
                'gallery' => 4,
            ],
            [
                "slug" => "rounded-stone-frame-mirror",
                "active" => true,
                'work_name' => 'homapalZao',
                'gallery' => 6,
            ],
            [
                "slug" => "round-metal-frame-mirror",
                "active" => true,
                'work_name' => 'laminatOkr',
                'gallery' => 4,
            ],
            [
                "slug" => "designer-metal-frame-mirror",
                "active" => true,
                'work_name' => 'laminatRom',
                'gallery' => 4,
            ],
            [
                "slug" => "irregular-metal-frame-mirror",
                "active" => true,
                'work_name' => 'laminatObka',
                'gallery' => 4,
            ],
            [
                "slug" => "oval-metal-frame-mirror",
                "active" => true,
                'work_name' => 'laminatPok',
                'gallery' => 4,
            ],
            [
                "slug" => "asymmetrical-mirror-in-modern-metal-frame",
                "active" => true,
                'work_name' => 'laminatJaj',
                'gallery' => 4,
            ],
            [
                "slug" => "rounded-metal-frame-mirror",
                "active" => true,
                'work_name' => 'laminatZao',
                'gallery' => 7,
            ],
            [
                "slug" => "smart-led-round-mirror",
                "active" => true,
                'work_name' => 'smartOkr',
                'gallery' => 4,
            ],
            [
                "slug" => "smart-led-irregular-mirror",
                "active" => true,
                'work_name' => 'smartNrg',
                'gallery' => 4,
            ],
            [
                "slug" => "led-round-wood-frame-mirror",
                "active" => true,
                'work_name' => 'popiolOkr',
                'gallery' => 6,
            ],
        ];


        /* Nowe produkty */
        DB::table("products")->truncate();
        DB::table("products")->insert($products);
        DB::table("products")->insert($newProducts);
    }
}
