<?php

namespace Database\Seeders\banners;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaDecorativeWallSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners[] = [
            "category_banner_id" => 4,
            "url" => route('product', ['product' => 'steindekor']),
            "name" => "banner.antiqueEcho",
            "image" => "/files/banner-antique-echo",
            "image_alt" => "banner.antiqueEcho",
            "active" => true,
            "position" => 1,
        ];
        $banners[] = [
            "category_banner_id" => 4,
            "url" => route('product', ['product' => 'steindekor']),
            "name" => "banner.bloomingWishes",
            "image" => "/files/banner-blooming-wishes",
            "image_alt" => "banner.bloomingWishes",
            "active" => true,
            "position" => 2,
        ];
        $banners[] = [
            "category_banner_id" => 4,
            "url" => route('product', ['product' => 'steindekor']),
            "name" => "banner.carmineEmbrace",
            "image" => "/files/banner-carmine-embrace",
            "image_alt" => "banner.carmineEmbrace",
            "active" => true,
            "position" => 3,
        ];
        $banners[] = [
            "category_banner_id" => 4,
            "url" => route('product', ['product' => 'steindekor']),
            "name" => "banner.blueMelody",
            "image" => "/files/banner-blue-melody",
            "image_alt" => "banner.blueMelody",
            "active" => true,
            "position" => 4,
        ];
        $banners[] = [
            "category_banner_id" => 4,
            "url" => route('product', ['product' => 'steindekor']),
            "name" => "banner.autumnRusticSchiefer",
            "image" => "/files/banner-autumn-rustic-schiefer",
            "image_alt" => "banner.autumnRusticSchiefer",
            "active" => true,
            "position" => 5,
        ];
        $banners[] = [
            "category_banner_id" => 4,
            "url" => route('product', ['product' => 'steindekor']),
            "name" => "banner.copperSchiefer",
            "image" => "/files/banner-copper-schiefer",
            "image_alt" => "banner.copperSchiefer",
            "active" => true,
            "position" => 6,
        ];
        $banners[] = [
            "category_banner_id" => 4,
            "url" => route('product', ['product' => 'steindekor']),
            "name" => "banner.jerraGreenSchiefer",
            "image" => "/files/banner-jerra-green-schiefer",
            "image_alt" => "banner.jerraGreenSchiefer",
            "active" => true,
            "position" => 6,
        ];
        $banners[] = [
            "category_banner_id" => 4,
            "url" => route('product', ['product' => 'steindekor']),
            "name" => "banner.sandySchiefer",
            "image" => "/files/banner-sandy-schiefer",
            "image_alt" => "banner.sandySchiefer",
            "active" => true,
            "position" => 6,
        ];

        DB::table("banners")->insert($banners);
    }
}
