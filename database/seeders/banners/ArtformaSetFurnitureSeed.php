<?php

namespace Database\Seeders\banners;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaSetFurnitureSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners[] = [
            "category_banner_id" => 2,
            "url" => route('product', ['product' => 'colorLine']),
            "name" => "mainPage.colorLine",
            "image" => "/files/bannerColorLine",
            "image_alt" => "colorLine image",
            "active" => true,
            "position" => 1,
        ];
        $banners[] = [
            "category_banner_id" => 2,
            "url" => route('product', ['product' => 'stoneLine']),
            "name" => "mainPage.stoneLine",
            "image" => "/files/bannerStoneLine",
            "image_alt" => "stoneLine image",
            "active" => true,
            "position" => 2,
        ];
        $banners[] = [
            "category_banner_id" => 2,
            "url" => route('product', ['product' => 'nolan']),
            "name" => "mainPage.nolan",
            "image" => "/files/bannerNolan",
            "image_alt" => "nolan image",
            "active" => true,
            "position" => 3,
        ];
        $banners[] = [
            "category_banner_id" => 2,
            "url" => route('product', ['product' => 'solidLine']),
            "name" => "mainPage.solidLine",
            "image" => "/files/bannerSolidLone",
            "image_alt" => "solidLine image",
            "active" => true,
            "position" => 4,
        ];
        $banners[] = [
            "category_banner_id" => 2,
            "url" => route('product', ['product' => 'losano']),
            "name" => "losano.title",
            "image" => "/files/bannerLosano",
            "image_alt" => "losano image",
            "active" => true,
            "position" => 5,
        ];
        $banners[] = [
            "category_banner_id" => 2,
            "url" => route('product', ['product' => 'zora']),
            "name" => "zora.title",
            "image" => "/files/bannerZora",
            "image_alt" => "zora image",
            "active" => true,
            "position" => 6,
        ];

        DB::table("banners")->insert($banners);
    }
}
