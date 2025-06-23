<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $casts = [
        "parent_id" => "integer",
        "slug" => "string",
        "name" => "string",
        "image" => "string",
        "active" => "boolean",
        "position" => "integer",
    ];

    protected $fillable = [
        "parent_id",
        "slug",
        "name",
        "image",
        "active",
        "position",
    ];

    public function children() {
        return $this->hasMany(Menu::class, "parent_id")
            ->where("active", true)
            ->orderBy("position");
    }
}
