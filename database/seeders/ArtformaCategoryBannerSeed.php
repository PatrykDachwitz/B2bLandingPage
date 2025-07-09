<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaCategoryBannerSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories[] = [
            "active" => false,
            "name" => "slider",
            "position" => 1,
            "type" => "slider"
        ];

        $categories[] = [
            "active" => true,
            "name" => "banner.setFurniture",
            "position" => 2,
            "type" => "product"
        ];

        $categories[] = [
            "active" => true,
            "name" => "banner.mirror",
            "position" => 3,
            "type" => "product"
        ];

        $categories[] = [
            "active" => true,
            "name" => "banner.decorativeWall",
            "position" => 4,
            "type" => "product"
        ];


        DB::table("category_banners")
            ->insert($categories);

    }
}
