<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaUpdatePositionsMenu extends Seeder
{
    const NAME_TABLE = "menus";
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::NAME_TABLE)
            ->where("id", 4)
            ->update([
                "position" => 2
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 5)
            ->update([
                "position" => 3
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 6)
            ->update([
                "position" => 4
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 7)
            ->update([
                "position" => 5
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 8)
            ->update([
                "position" => 6
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 9)
            ->update([
                "position" => 7
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 24)
            ->update([
                "position" => 8
            ]);
        DB::table(self::NAME_TABLE)
            ->where("id", 25)
            ->update([
                "position" => 1
            ]);
    }
}
