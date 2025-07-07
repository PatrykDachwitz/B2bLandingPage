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
        //TODO dorobić arabską wersję
        if (LanguageReadingPageFacade::isRightPageReading()) {
            return view('view.ae.mainPage');
        }
        return view('view.mainPage', [
            "categoriesBanner" => $this->categoryBanner->getActive()
        ]);
    }
}
