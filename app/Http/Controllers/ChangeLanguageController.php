<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\ChangeLanguage;
use App\Services\AvailableLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ChangeLanguageController extends Controller
{
    protected AvailableLanguage $availableLanguage;

    public function __construct(AvailableLanguage $availableLanguage)
    {
        $this->availableLanguage = $availableLanguage;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(ChangeLanguage $request)
    {
        $langSearch = $request->input('country');


        try {
            $language = $this->availableLanguage->getAvailableLanguageBySearchLanguage($langSearch);
            session()->put([
                'lang' => $language
            ]);
        } catch (\Exception) {
            session()->put([
                'lang' => config('language.defaultLanguage')
            ]);
        }

        return redirect()
            ->back();
    }
}
