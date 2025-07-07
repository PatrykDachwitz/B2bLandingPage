<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->truncate();

        $categories = [
            [
                "url" => "mirror-with-metal-frame",
                "name" => "category.metalFrame",
            ],
            [
                "url" => "mirror-with-stone-frame",
                "name" => "category.stoneFrame",
            ]
        ];

        DB::table("categories")->insert($categories);
    }
}
