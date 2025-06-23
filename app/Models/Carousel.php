<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = [
        "name",
        "count_decor",
        "product_work_name",
        "id_decor",
        "directory",
        "available_catalog",
        "active",
    ];

    protected $casts = [
        "name" => "string",
        "count_decor" => "integer",
        "product_work_name" => "string",
        "id_decor" => "string",
        "directory" => "string",
        "available_catalog" => "boolean",
        "active" => "boolean",
    ];
}
