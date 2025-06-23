<?php

namespace Database\Seeders\banners;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtformaMirrorSeed extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'homapalRound']),
            "name" => "homapalRound",
            "image" => "/files/bannerhomapalRound",
            "image_alt" => "homapalRound image",
            "active" => true,
            "position" => 1,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'homapalRom']),
            "name" => "homapalRom",
            "image" => "/files/bannerhomapalRom",
            "image_alt" => "homapalRom image",
            "active" => true,
            "position" => 2,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'homapalObka']),
            "name" => "homapalObka",
            "image" => "/files/bannerhomapalObka",
            "image_alt" => "homapalObka image",
            "active" => true,
            "position" => 3,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'homapalPok']),
            "name" => "homapalPok",
            "image" => "/files/bannerhomapalPok",
            "image_alt" => "homapalPok image",
            "active" => true,
            "position" => 4,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'homapalJaj']),
            "name" => "homapalJaj",
            "image" => "/files/bannerhomapalJaj",
            "image_alt" => "homapalJaj image",
            "active" => true,
            "position" => 5,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'homapalZao']),
            "name" => "homapalZao",
            "image" => "/files/bannerhomapalZao",
            "image_alt" => "homapalZao image",
            "active" => true,
            "position" => 6,
        ];

        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'laminatRound']),
            "name" => "laminatRound",
            "image" => "/files/bannerlaminatRound",
            "image_alt" => "laminatRound image",
            "active" => true,
            "position" => 7,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'laminatRom']),
            "name" => "laminatRom",
            "image" => "/files/bannerlaminatRom",
            "image_alt" => "laminatRom image",
            "active" => true,
            "position" => 8,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'laminatObka']),
            "name" => "laminatObka",
            "image" => "/files/bannerlaminatObka",
            "image_alt" => "laminatObka image",
            "active" => true,
            "position" => 9,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'laminatPok']),
            "name" => "laminatPok",
            "image" => "/files/bannerlaminatPok",
            "image_alt" => "laminatPok image",
            "active" => true,
            "position" => 10,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'laminatJaj']),
            "name" => "laminatJaj",
            "image" => "/files/bannerlaminatJaj",
            "image_alt" => "laminatJaj image",
            "active" => true,
            "position" => 11,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'laminatZao']),
            "name" => "laminatZao",
            "image" => "/files/bannerlaminatZao",
            "image_alt" => "laminatZao image",
            "active" => true,
            "position" => 12,
        ];

        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'smartRound']),
            "name" => "smartRound",
            "image" => "/files/bannersmartRound",
            "image_alt" => "smartRound image",
            "active" => true,
            "position" => 13,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'smartNrg']),
            "name" => "smartNrg",
            "image" => "/files/bannersmartNrg",
            "image_alt" => "smartNrg image",
            "active" => true,
            "position" => 14,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'smartmirror']),
            "name" => "smartmirror",
            "image" => "/files/bannersmartmirror",
            "image_alt" => "smartmirror image",
            "active" => true,
            "position" => 15,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'mirror-in-a-wooden-frame']),
            "name" => "popiolRound",
            "image" => "/files/bannerPopiolRound",
            "image_alt" => "Mirror in a wooden frame",
            "active" => true,
            "position" => 16,
        ];
        DB::table("banners")->insert($banners);
    }
}
