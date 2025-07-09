<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaMenuSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
          [
              "parent_id" => 0,
              "slug" => "",
              "name" => "banner.setFurniture",
              "image" => "",
              "position" => 1,
          ],
          [
              "parent_id" => 0,
              "slug" => "",
              "name" => "banner.mirror",
              "image" => "",
              "position" => 2,
          ],
          [
              "parent_id" => 0,
              "slug" => "",
              "name" => "banner.decorativeWall",
              "image" => "",
              "position" => 3,
          ],
          [
              "parent_id" => 1,
              "slug" => route('product', ['product' => 'colorLine']),
              "name" => "mainPage.colorLine",
              "image" => "/files/bannerColorLine",
              "position" => 1,
          ],
          [
              "parent_id" => 1,
              "slug" => route('product', ['product' => 'stoneLine']),
              "name" => "mainPage.stoneLine",
              "image" => "/files/bannerStoneLine",
              "position" => 2,
          ],
          [
              "parent_id" => 1,
              "slug" => route('product', ['product' => 'nolan']),
              "name" => "mainPage.nolan",
              "image" => "/files/bannerNolan",
              "position" => 3,
          ],
          [
              "parent_id" => 1,
              "slug" => route('product', ['product' => 'solidLine']),
              "name" => "mainPage.solidLine",
              "image" => "/files/bannerSolidLone",
              "position" => 4,
          ],
          [
              "parent_id" => 1,
              "slug" => route('product', ['product' => 'losano']),
              "name" => "losano.title",
              "image" => "/files/bannerLosano",
              "position" => 5,
          ],
          [
              "parent_id" => 1,
              "slug" => route('product', ['product' => 'zora']),
              "name" => "zora.title",
              "image" => "/files/bannerZora",
              "position" => 6,
          ],
          [
              "parent_id" => 2,
              "slug" => route('category', ['category' => 'mirror-with-metal-frame']),
              "name" => "category.metalFrame",
              "image" => "/files/banner-rounded-stone-frame-mirror",
              "position" => 6,
          ],
          [
              "parent_id" => 2,
              "slug" => route('category', ['category' => 'mirror-with-stone-frame']),
              "name" => "category.stoneFrame",
              "image" => "/files/banner-rounded-metal-frame-mirror",
              "position" => 12,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'smart-led-round-mirror']),
              "name" => "banner.smartOkr",
              "image" => "/files/banner-smart-led-round-mirror",
              "position" => 13,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'smart-led-irregular-mirror']),
              "name" => "banner.smartNrg",
              "image" => "/files/banner-smart-led-irregular-mirror",
              "position" => 14,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'smartmirror']),
              "name" => "smartmirror.title",
              "image" => "/files/bannersmartmirror",
              "position" => 15,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'led-round-wood-frame-mirror']),
              "name" => "banner.popiolOkr",
              "image" => "/files/banner-led-round-wood-frame-mirror",
              "position" => 16,
          ],

            [
                "parent_id" => 3,
                "slug" => route('product', ['product' => 'steindekor']),
                "name" => "banner.antiqueEcho",
                "image" => "/files/banner-antique-echo",
                "position" => 1,
            ],
            [
                "parent_id" => 3,
                "slug" => route('product', ['product' => 'steindekor']),
                "name" => "banner.bloomingWishes",
                "image" => "/files/banner-blooming-wishes",
                "position" => 2,
            ],
            [
                "parent_id" => 3,
                "slug" => route('product', ['product' => 'steindekor']),
                "name" => "banner.carmineEmbrace",
                "image" => "/files/banner-carmine-embrace",
                "position" => 3,
            ],
            [
                "parent_id" => 3,
                "slug" => route('product', ['product' => 'steindekor']),
                "name" => "banner.blueMelody",
                "image" => "/files/banner-blue-melody",
                "position" => 4,
            ],
            [
                "parent_id" => 3,
                "slug" => route('product', ['product' => 'steindekor']),
                "name" => "banner.autumnRusticSchiefer",
                "image" => "/files/banner-autumn-rustic-schiefer",
                "position" => 5,
            ],
            [
                "parent_id" => 3,
                "slug" => route('product', ['product' => 'steindekor']),
                "name" => "banner.copperSchiefer",
                "image" => "/files/banner-copper-schiefer",
                "position" => 6,
            ],
            [
                "parent_id" => 3,
                "slug" => route('product', ['product' => 'steindekor']),
                "name" => "banner.jerraGreenSchiefer",
                "image" => "/files/banner-jerra-green-schiefer",
                "position" => 7,
            ],
            [
                "parent_id" => 3,
                "slug" => route('product', ['product' => 'steindekor']),
                "name" => "banner.sandySchiefer",
                "image" => "/files/banner-sandy-schiefer",
                "position" => 8,
            ],
        ];

        DB::table("menus")->insert($menus);
    }
}
