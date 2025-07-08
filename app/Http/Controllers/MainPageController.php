<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Facades\LanguageReadingPageFacade;
use App\Repository\CategoryBannerInterface;
use Illuminate\Http\Request;

class MainPageController extends Controller
{

    public function __construct(
        private CategoryBannerInterface $categoryBanner,
    )
    {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (LanguageReadingPageFacade::isRightPageReading()) {
            return view('view.ae.mainPage', [
                "categoriesBanner" => $this->categoryBanner->getActive()
            ]);
        }
        return view('view.mainPage', [
            "categoriesBanner" => $this->categoryBanner->getActive()
        ]);
    }
}
