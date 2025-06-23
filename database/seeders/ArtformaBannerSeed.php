<?php

namespace Database\Seeders;

use Database\Seeders\banners\ArtformaDecorativeWallSeed;
use Database\Seeders\banners\ArtformaMirrorSeed;
use Database\Seeders\banners\ArtformaSetFurnitureSeed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaBannerSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("banners")->truncate();
    //TODO dodać tutuaj poprawne nazwy i linki trochęroboczy plik aktualnie
        $this->call([
            ArtformaDecorativeWallSeed::class,
            ArtformaSetFurnitureSeed::class,
            ArtformaMirrorSeed::class,
        ]);
    }
}
