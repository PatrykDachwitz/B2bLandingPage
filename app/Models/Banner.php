<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $casts = [
      "category_banner_id" => "integer",
      "url" => "string",
      "name" => "string",
      "image" => "string",
      "image_alt" => "string",
      "active" => "boolean",
      "position" => "integer",
    ];

    protected $fillable = [
        "category_banner_id",
        "url",
        "name",
        "image",
        "image_alt",
        "active",
        "position",
    ];


    public function categoryBanner() {
        return $this->hasOne(CategoryBanner::class)
            ->where("active", true)
            ->orderBy("position");
    }
}
