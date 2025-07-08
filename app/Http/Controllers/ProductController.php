<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Facades\LanguageReadingPageFacade;
use App\Repository\ProductInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct(
        private ProductInterface $product
    )
    {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(string $product)
    {

        try {
            $dataProduct = $this->product
                ->getBySlug($product);

            if (LanguageReadingPageFacade::isRightPageReading()) return view('view.ae.product', [
                'product' => $dataProduct
            ]);
            else return view('view.product', [
                'product' => $dataProduct
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect(route("mainPage"));
        }
    }
}
