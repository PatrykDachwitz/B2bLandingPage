<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class CategoryBanner extends Model
{
    protected $casts = [
        "active" => "boolean",
        "name" => "string",
        "type" => "string",
        "position" => "integer",
    ];
    protected $fillable = [
        "active",
        "name",
        "position",
        "type",
    ];

    public function banner() {
        return $this->hasMany(Banner::class)
            ->where("active", true)
            ->orderBy("position");
    }
}
