<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use App\Models\Product as productModel;
use App\Repository\ProductInterface;
use Illuminate\Database\Eloquent\Collection;

class Product implements ProductInterface
{

    public function __construct(
        private productModel $product
    )
    {
    }

    public function getBySlug(string $slug): productModel
    {
        return $this->product
            ->where(["slug" => $slug, "active" => true])
            ->with("carousels")
            ->firstOrFail();
    }
}
