<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    private $availableOptions = [
        'colorLine',
        'gleamLine',
        'nolan',
        'solidLine',
        'steindekor',
        'stoneLine',
    ];

    private $primarySettings = [
        'colorLine' => [
            'product' => 'colorLine',
            'countDecor' => 15,
            'gallery' => 6,
        ],
        'gleamLine' => [
            'product' => 'gleamLine',
            'countDecor' => 31,
            'gallery' => 6,
        ],
        'nolan' => [
            'product' => 'nolan',
            'countDecor' => 20,
            'gallery' => 7,
        ],
        'solidLine' => [
            'product' => 'solidLine',
            'countDecor' => 14,
            'gallery' => 6,
        ],
        'steindekor' => [
            'product' => 'steindekor',
            'countDecor' => 20,
            'gallery' => 8,
        ],
        'stoneLine' => [
            'product' => 'stoneLine',
            'countDecor' => 20,
            'gallery' => 12,
        ]
    ];
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $product)
    {

        if (in_array($product, $this->availableOptions)) {
            return view('view.product', $this->primarySettings[$product]);
        } else {
              abort(404);
        }
    }
}
