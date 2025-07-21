<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
      "name_template" => "string",
      "work_name" => "string",
      "active" => "string",
      "slug" => "string",
      "gallery" => "integer",
      "template" => "boolean",
    ];
    protected $fillable = [
      "name_template",
      "work_name",
      "active",
      "slug",
      "gallery",
      "template",
    ];

    public function carousels() {
        return $this->belongsToMany(Carousel::class)
            ->where("carousels.active", true)
            ->wherePivot("active" ,true);
    }
}
