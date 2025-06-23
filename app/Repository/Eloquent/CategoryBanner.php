<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Repository\CategoryBannerInterface;
use \App\Models\CategoryBanner as CategoryBannerModel;
use Illuminate\Database\Eloquent\Collection;

class CategoryBanner implements CategoryBannerInterface
{
    public function __construct(
        private CategoryBannerModel $categoryBanner
    )
    {

    }

    public function getActive(): Collection
    {
        return $this->categoryBanner
            ->where("active", true)
            ->with("banner")
            ->orderBy("position")
            ->get();
    }
}
