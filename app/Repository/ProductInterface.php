<?php
declare(strict_types=1);
namespace App\Repository;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductInterface
{
    public function getBySlug(string $slug) : Product;
}
