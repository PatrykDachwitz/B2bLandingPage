<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("category_banners")->truncate();
        DB::table("category_product")->truncate();
        DB::table("carousel_product")->truncate();
        DB::table("banners")->truncate();
        DB::table("carousels")->truncate();
        DB::table("categories")->truncate();
        DB::table("menus")->truncate();
        DB::table("products")->truncate();


        $this->call([
           ArtformaCategoryBannerSeed::class,
           ArtformaBannerSeed::class,
           ArtformaProductsSeed::class,
           ArtformaCarouselSeed::class,
           ArtformaCarouselProductPivotSeed::class,
           ArtformaMenuSeed::class,
           ArtformaCategorySeed::class,
           ArtformaCategoryProductSeed::class,
        ]);
    }
}
