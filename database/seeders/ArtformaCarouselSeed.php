<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaCarouselSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carousels = [
            [
                "name" => "decorTitle",
                "count_decor" => 15,
                "product_work_name" => "colorLine",
            ],
            [
                "name" => "decorTitle",
                "count_decor" => 20,
                "product_work_name" => "nolan",
            ],
            [
                "name" => "decorTitle",
                "count_decor" => 14,
                "product_work_name" => "solidLine",
            ],
            [
                "name" => "decorTitle",
                "count_decor" => 11,
                "product_work_name" => "steindekor",
                "id_decor" => "glasdekor",
            ],
            [
                "name" => "decorTitle",
                "count_decor" => 20,
                "product_work_name" => "stoneLine",
            ],
            [
                "name" => "decorTitle",
                "count_decor" => 20,
                "product_work_name" => "losano",
            ],
            [
                "name" => "decorTitle",
                "count_decor" => 20,
                "product_work_name" => "zora",
            ],
            [
                "name" => "decorTitle",
                "count_decor" => 15,
                "product_work_name" => "smartmirror",
            ],
            [
                "name" => "decorTitleSecond",
                "count_decor" => 20,
                "product_work_name" => "steindekor",
                "id_decor" => "steindekor",
                'directory' => 'forms',
            ],
            [
                "name" => "availableForm",
                "count_decor" => 7,
                "product_work_name" => "stoneLine",
                'directory' => 'forms',
                'available_catalog' => false,
            ],
            [
                "name" => "availableForm",
                "count_decor" => 7,
                "product_work_name" => "smartmirror",
                'directory' => 'forms',
                'available_catalog' => false,
            ],
        ];


        DB::table("carousels")->truncate();
        foreach ($carousels as $carousel) {
            DB::table("carousels")->insert($carousel);
        }
    }
}
