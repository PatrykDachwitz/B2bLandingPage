<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $casts = [
        "url" => "string",
        "name" => "string",
        "active" => "boolean",
    ];
    protected $fillable = [
        "url",
        "name",
        "active",
    ];

    public function products() {
        return $this->belongsToMany(Product::class)
            ->where(['category_product.active' => true, 'products.active' => true]);
    }
}
