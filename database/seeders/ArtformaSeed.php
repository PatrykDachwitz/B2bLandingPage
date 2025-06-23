<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtformaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
           ArtformaCategoryBannerSeed::class,
           ArtformaBannerSeed::class,
           ArtformaProductsSeed::class,
           ArtformaCarouselSeed::class,
           ArtformaCarouselProductPivotSeed::class,
           ArtformaMenuSeed::class,
        ]);
    }
}
