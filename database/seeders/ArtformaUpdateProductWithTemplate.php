<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaUpdateProductWithTemplate extends Seeder
{
    const NAME_TABLE = "products";
    const NAME_UPDATE_COLUMN = "name_template";
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::NAME_TABLE)
            ->where("id", 25)
            ->update([
                self::NAME_UPDATE_COLUMN => "bathroomFurnitureSetSeriesF"
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 26)
            ->update([
                self::NAME_UPDATE_COLUMN => "bathroomFurnitureSetSeriesF"
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 27)
            ->update([
                self::NAME_UPDATE_COLUMN => "bathroomFurnitureSetSeriesF"
            ]);

        DB::table(self::NAME_TABLE)
            ->where("id", 28)
            ->update([
                self::NAME_UPDATE_COLUMN => "furnitureSetChromeLine"
            ]);
    }
}
