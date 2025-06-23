<?php
declare(strict_types=1);
namespace App\Repository\Eloquent;

use \App\Models\Menu as MenuModel;
class Menu implements \App\Repository\MenuInterface
{

    public function __construct(
        private MenuModel $menu
    )
    {
    }

    public function get()
    {
        return $this->menu
            ->with("children")
            ->where([
                "parent_id" => 0,
                "active" => true
            ])
            ->orderBy("position")
            ->get();
    }
}
