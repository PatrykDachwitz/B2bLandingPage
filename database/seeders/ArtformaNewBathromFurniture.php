<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaNewBathromFurniture extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
                "url" => "bathroom-furniture-sets",
                "name" => "bathroomSet.category",
        ];

        $menu = [
            "parent_id" => 1,
            "slug" => route('category', ['category' => 'bathroom-furniture-sets']),
            "name" => "bathroomSet.menu",
            "image" => "/files/banner-bathroom-furniture-set",
            "position" => 7,
        ];

        $products = [
           /* [
                "slug" => "bathroom-furniture-set-p1",
                "active" => true,
                'work_name' => 'bathroomSetP1',
                'gallery' => 7,
            ],
            [
                "slug" => "bathroom-furniture-set-p2",
                "active" => true,
                'work_name' => 'bathroomSetP2',
                'gallery' => 5,
            ],
            [
                "slug" => "bathroom-furniture-set-p3",
                "active" => true,
                'work_name' => 'bathroomSetP3',
                'gallery' => 5,
            ],*/
            [
                "slug" => "bathroom-furniture-set-f1",
                "active" => true,
                'work_name' => 'bathroomSetF1',
                'gallery' => 7,
            ],
            [
                "slug" => "bathroom-furniture-set-f2",
                "active" => true,
                'work_name' => 'bathroomSetF2',
                'gallery' => 7,
            ],
            [
                "slug" => "bathroom-furniture-set-f3",
                "active" => true,
                'work_name' => 'bathroomSetF3',
                'gallery' => 7,
            ],
        ];

        $banners = [
            /*[
                "category_banner_id" => 2,
                "url" => route('product', ['product' => 'bathroom-furniture-set-p1']),
                "name" => "bathroomSet.bathroomSetP1",
                "image" => "/files/bannerBathroomSetP1",
                "image_alt" => "bathroomSetP1 image",
                "active" => true,
                "position" => 7,
            ],
            [
                "category_banner_id" => 2,
                "url" => route('product', ['product' => 'bathroom-furniture-set-p2']),
                "name" => "bathroomSet.bathroomSetP2",
                "image" => "/files/bannerBathroomSetP2",
                "image_alt" => "bathroomSetP2 image",
                "active" => true,
                "position" => 8,
            ],
            [
                "category_banner_id" => 2,
                "url" => route('product', ['product' => 'bathroom-furniture-set-p3']),
                "name" => "bathroomSet.bathroomSetP3",
                "image" => "/files/bannerBathroomSetP3",
                "image_alt" => "bathroomSetP3 image",
                "active" => true,
                "position" => 9,
            ],*/
            [
                "category_banner_id" => 2,
                "url" => route('product', ['product' => 'bathroom-furniture-set-f1']),
                "name" => "bathroomSet.bathroomSetF1",
                "image" => "/files/bannerBathroomSetF1",
                "image_alt" => "bathroomSetF1 image",
                "active" => true,
                "position" => 10,
            ],
            [
                "category_banner_id" => 2,
                "url" => route('product', ['product' => 'bathroom-furniture-set-f2']),
                "name" => "bathroomSet.bathroomSetF2",
                "image" => "/files/bannerBathroomSetF2",
                "image_alt" => "bathroomSetF2 image",
                "active" => true,
                "position" => 11,
            ],
            [
                "category_banner_id" => 2,
                "url" => route('product', ['product' => 'bathroom-furniture-set-f3']),
                "name" => "bathroomSet.bathroomSetF3",
                "image" => "/files/bannerBathroomSetF3",
                "image_alt" => "bathroomSetF3 image",
                "active" => true,
                "position" => 12,
            ],
        ];

        $categoryProduct = [
            [
                'category_id' => 3,
                'product_id' => 25,
            ],
            [
                'category_id' => 3,
                'product_id' => 26,
            ],
            [
                'category_id' => 3,
                'product_id' => 27,
            ],
            /*[
                'category_id' => 3,
                'product_id' => 28,
            ],
            [
                'category_id' => 3,
                'product_id' => 29,
            ],
            [
                'category_id' => 3,
                'product_id' => 30,
            ],*/
        ];

        DB::table("products")->insert($products);
        DB::table("banners")->insert($banners);
        DB::table("menus")->insert($menu);
        DB::table("categories")->insert($category);
        DB::table("category_product")->insert($categoryProduct);
    }
}
