<?php
declare(strict_types=1);
namespace App\Repository;

use App\Models\Category;

interface CategoryInterface
{

    public function findOrFailByPath(string $path) : Category;

}
