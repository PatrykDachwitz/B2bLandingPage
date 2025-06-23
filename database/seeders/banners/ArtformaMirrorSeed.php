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
            "url" => route('product', ['product' => 'round-stone-frame-mirror']),
            "name" => "banner.homapalOkr",
            "image" => "/files/banner-round-stone-frame-mirror",
            "image_alt" => "Round mirror with stone frame",
            "active" => true,
            "position" => 1,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'modern-irregular-stone-frame']),
            "name" => "banner.homapalRom",
            "image" => "/files/banner-modern-irregular-stone-frame",
            "image_alt" => "Modern irregular mirror with stone frame",
            "active" => true,
            "position" => 2,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'irregular-stone-frame-mirror']),
            "name" => "banner.homapalObka",
            "image" => "/files/banner-irregular-stone-frame-mirror",
            "image_alt" => "Irregular mirror with stone frame",
            "active" => true,
            "position" => 3,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'oval-stone-frame-mirror']),
            "name" => "banner.homapalPok",
            "image" => "/files/banner-oval-stone-frame-mirror",
            "image_alt" => "Oval mirror with stone frame",
            "active" => true,
            "position" => 4,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'asymmetric-stone-frame-mirror']),
            "name" => "banner.homapalJaj",
            "image" => "/files/banner-asymmetric-stone-frame-mirror",
            "image_alt" => "Mirror with asymmetric stone frame",
            "active" => true,
            "position" => 5,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'rounded-stone-frame-mirror']),
            "name" => "banner.homapalZao",
            "image" => "/files/banner-rounded-stone-frame-mirror",
            "image_alt" => "Mirror with rounded stone frame",
            "active" => true,
            "position" => 6,
        ];

        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'round-metal-frame-mirror']),
            "name" => "banner.laminatOkr",
            "image" => "/files/banner-round-metal-frame-mirror",
            "image_alt" => "Round mirror with metal frame",
            "active" => true,
            "position" => 7,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'designer-metal-frame-mirror']),
            "name" => "banner.laminatRom",
            "image" => "/files/banner-designer-metal-frame-mirror",
            "image_alt" => "Designer mirror with metal frame",
            "active" => true,
            "position" => 8,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'irregular-metal-frame-mirror']),
            "name" => "banner.laminatObka",
            "image" => "/files/banner-irregular-metal-frame-mirror",
            "image_alt" => "Irregular mirror with metal frame",
            "active" => true,
            "position" => 9,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'oval-metal-frame-mirror']),
            "name" => "banner.laminatPok",
            "image" => "/files/banner-oval-metal-frame-mirror",
            "image_alt" => "Oval mirror with metal frame",
            "active" => true,
            "position" => 10,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'asymmetrical-mirror-in-modern-metal-frame']),
            "name" => "banner.laminatJaj",
            "image" => "/files/banner-irregular-metal-frame-mirror-2",
            "image_alt" => "Asymmetrical mirror in modern metal frame",
            "active" => true,
            "position" => 11,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'rounded-metal-frame-mirror']),
            "name" => "banner.laminatZao",
            "image" => "/files/banner-rounded-metal-frame-mirror",
            "image_alt" => "Rounded mirror with metal frame",
            "active" => true,
            "position" => 12,
        ];

        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'smart-led-round-mirror']),
            "name" => "banner.smartOkr",
            "image" => "/files/banner-smart-led-round-mirror",
            "image_alt" => "Smart round LED mirror",
            "active" => true,
            "position" => 13,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'smart-led-irregular-mirror']),
            "name" => "banner.smartNrg",
            "image" => "/files/banner-smart-led-irregular-mirror",
            "image_alt" => "Smart irregular LED mirror",
            "active" => true,
            "position" => 14,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'smartmirror']),
            "name" => "smartmirror.title",
            "image" => "/files/bannersmartmirror",
            "image_alt" => "Smart LED rounded mirror",
            "active" => true,
            "position" => 15,
        ];
        $banners[] = [
            "category_banner_id" => 3,
            "url" => route('product', ['product' => 'led-round-wood-frame-mirror']),
            "name" => "banner.popiolOkr",
            "image" => "/files/banner-led-round-wood-frame-mirror",
            "image_alt" => "LED round mirror with wooden frame",
            "active" => true,
            "position" => 16,
        ];
        DB::table("banners")->insert($banners);
    }
}
