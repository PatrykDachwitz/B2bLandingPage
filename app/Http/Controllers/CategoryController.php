<?php

namespace App\Http\Controllers;

use App\Facades\LanguageReadingPageFacade;
use App\Repository\Eloquent\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(
        private Category $category
    )
    {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $category)
    {
        try {

            if (LanguageReadingPageFacade::isRightPageReading()) {
                return view("view.ae.category", [
                    "category" => $this->category->findOrFailByPath($category)
                ]);
            }
            return view("view.category", [
                "category" => $this->category->findOrFailByPath($category)
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect(route("mainPage"));
        }
    }
}
