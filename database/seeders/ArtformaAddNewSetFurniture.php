<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaAddNewSetFurniture extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("banners")
            ->where("id", 32)
            ->update([
                "active" => false
            ]);

        DB::table("banners")
            ->insert([
                "category_banner_id" => 2,
                "url" => route('product', ['product' => 'furniture-set-chrome-line']),
                "name" => "chromeLine.banner",
                "image" => "/files/bannerChromeLine",
                "image_alt" => "Furniture set - ChromeLine",
                "active" => true,
                "position" => 9,
            ]);

        DB::table("menus")
            ->insert([
                "parent_id" => 1,
                "slug" => route('product', ['product' => 'furniture-set-chrome-line']),
                "name" => "chromeLine.menu",
                "image" => "/files/bannerChromeLine",
                "position" => 8,
            ]);

        DB::table("products")
            ->insert([
                "slug" => "furniture-set-chrome-line",
                "active" => true,
                'work_name' => 'chromeLine',
                'gallery' => 5,
                'template' => true,
            ]);
        DB::table("carousels")
            ->insert([
                "name" => "decorTitle",
                "count_decor" => 11,
                "product_work_name" => "chromeLine",
                'directory' => 'decor',
                'available_catalog' => false,
            ]);
        DB::table("carousel_product")
            ->insert([
                "carousel_id" => 18,
                "product_id" => 28,
            ]);
    }
}
