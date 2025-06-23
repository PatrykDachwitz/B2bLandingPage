<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaCarouselProductPivotSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pivots = [
            [
                "carousel_id" => 1,
                "product_id" => 1,
            ],
            [
                "carousel_id" => 2,
                "product_id" => 3,
            ],
            [
                "carousel_id" => 3,
                "product_id" => 4,
            ],
            [
                "carousel_id" => 4,
                "product_id" => 5,
            ],
            [
                "carousel_id" => 9,
                "product_id" => 5,
            ],
            [
                "carousel_id" => 5,
                "product_id" => 6,
            ],
            [
                "carousel_id" => 10,
                "product_id" => 6,
            ],
            [
                "carousel_id" => 6,
                "product_id" => 7,
            ],
            [
                "carousel_id" => 7,
                "product_id" => 8,
            ],
            [
                "carousel_id" => 8,
                "product_id" => 9,
            ],
            [
                "carousel_id" => 11,
                "product_id" => 9,
            ],
        ];


        DB::table("carousel_product")->truncate();
        DB::table("carousel_product")->insert($pivots);
    }
}
