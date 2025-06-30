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
              "name" => "mainPage.losano",
              "image" => "/files/bannerLosano",
              "position" => 5,
          ],
          [
              "parent_id" => 1,
              "slug" => route('product', ['product' => 'zora']),
              "name" => "mainPage.zora",
              "image" => "/files/bannerZora",
              "position" => 6,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'round-stone-frame-mirror']),
              "name" => "banner.homapalOkr",
              "image" => "/files/banner-round-stone-frame-mirror",
              "position" => 1,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'modern-irregular-stone-frame']),
              "name" => "banner.homapalRom",
              "image" => "/files/banner-modern-irregular-stone-frame",
              "position" => 2,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'irregular-stone-frame-mirror']),
              "name" => "banner.homapalObka",
              "image" => "/files/banner-irregular-stone-frame-mirror",
              "position" => 3,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'oval-stone-frame-mirror']),
              "name" => "banner.homapalPok",
              "image" => "/files/banner-oval-stone-frame-mirror",
              "position" => 4,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'asymmetric-stone-frame-mirror']),
              "name" => "banner.homapalJaj",
              "image" => "/files/banner-asymmetric-stone-frame-mirror",
              "position" => 5,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'rounded-stone-frame-mirror']),
              "name" => "banner.homapalZao",
              "image" => "/files/banner-rounded-stone-frame-mirror",
              "position" => 6,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'round-metal-frame-mirror']),
              "name" => "banner.laminatOkr",
              "image" => "/files/banner-round-metal-frame-mirror",
              "position" => 7,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'designer-metal-frame-mirror']),
              "name" => "banner.laminatRom",
              "image" => "/files/banner-designer-metal-frame-mirror",
              "position" => 8,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'irregular-metal-frame-mirror']),
              "name" => "banner.laminatObka",
              "image" => "/files/banner-irregular-metal-frame-mirror",
              "position" => 9,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'oval-metal-frame-mirror']),
              "name" => "banner.laminatPok",
              "image" => "/files/banner-oval-metal-frame-mirror",
              "position" => 10,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'asymmetrical-mirror-in-modern-metal-frame']),
              "name" => "banner.laminatJaj",
              "image" => "/files/banner-irregular-metal-frame-mirror-2",
              "position" => 11,
          ],
          [
              "parent_id" => 2,
              "slug" => route('product', ['product' => 'rounded-metal-frame-mirror']),
              "name" => "banner.laminatZao",
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

        DB::table("menus")->truncate();
        DB::table("menus")->insert($menus);
    }
}
