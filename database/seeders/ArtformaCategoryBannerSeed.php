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
            "name" => "setFurniture",
            "position" => 2,
            "type" => "product"
        ];

        $categories[] = [
            "active" => true,
            "name" => "mirror",
            "position" => 3,
            "type" => "product"
        ];

        $categories[] = [
            "active" => true,
            "name" => "decorativeWall",
            "position" => 4,
            "type" => "product"
        ];

        DB::table("category_banners")->truncate();

        DB::table("category_banners")
            ->insert($categories);

    }
}
