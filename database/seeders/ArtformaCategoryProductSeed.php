<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaCategoryProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table("category_product")->truncate();

        $categoryProductRelations = [
            [
                'category_id' => 1,
                'product_id' => 10,
            ],
            [
                'category_id' => 1,
                'product_id' => 11,
            ],
            [
                'category_id' => 1,
                'product_id' => 12,
            ],
            [
                'category_id' => 1,
                'product_id' => 13,
            ],
            [
                'category_id' => 1,
                'product_id' => 14,
            ],
            [
                'category_id' => 1,
                'product_id' => 15,
            ],
            [
                'category_id' => 2,
                'product_id' => 16,
            ],
            [
                'category_id' => 2,
                'product_id' => 17,
            ],
            [
                'category_id' => 2,
                'product_id' => 18,
            ],
            [
                'category_id' => 2,
                'product_id' => 19,
            ],
            [
                'category_id' => 2,
                'product_id' => 20,
            ],
            [
                'category_id' => 2,
                'product_id' => 21,
            ],
        ];

        DB::table("category_product")->insert($categoryProductRelations);
    }
}
