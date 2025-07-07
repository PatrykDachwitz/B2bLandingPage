<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Category as CategoryModel;
use App\Repository\CategoryInterface;

class Category implements CategoryInterface
{

    public function __construct(
        private CategoryModel $category
    )
    {
    }

    public function findOrFailByPath(string $path): CategoryModel
    {
        return $this->category
            ->where(["active" => true, "url" => $path])
            ->with("products")
            ->firstOrFail();
    }
}
