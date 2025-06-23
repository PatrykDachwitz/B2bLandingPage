<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
      "work_name" => "string",
      "active" => "string",
      "slug" => "string",
      "gallery" => "integer",
    ];
    protected $fillable = [
      "work_name",
      "active",
      "slug",
      "gallery",
    ];

    public function carousels() {
        return $this->belongsToMany(Carousel::class)
            ->where("carousels.active", true)
            ->wherePivot("active" ,true);
    }
}
