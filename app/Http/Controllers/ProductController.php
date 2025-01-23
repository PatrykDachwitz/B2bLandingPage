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
        'stoneLine_2',
        'nolan_2'
    ];

    private $primarySettings = [
        'colorLine' => [
            'product' => 'colorLine',
            'countDecor' => 15,
            'gallery' => 6,
            'idDecor' => ''
        ],
        'gleamLine' => [
            'product' => 'gleamLine',
            'countDecor' => 31,
            'gallery' => 6,
            'idDecor' => ''
        ],
        'nolan' => [
            'product' => 'nolan',
            'countDecor' => 20,
            'gallery' => 7,
            'idDecor' => ''
        ],
        'solidLine' => [
            'product' => 'solidLine',
            'countDecor' => 14,
            'gallery' => 6,
            'idDecor' => ''
        ],
        'steindekor' => [
            'product' => 'steindekor',
            'countDecor' => 11,
            'gallery' => 8,
            'idDecor' => 'glasdekor'
        ],
        'stoneLine' => [
            'product' => 'stoneLine',
            'countDecor' => 20,
            'gallery' => 12,
            'idDecor' => ''
        ],
        'nolan_2' => [
            'product' => 'nolan_2',
            'countDecor' => 20,
            'gallery' => 7,
            'idDecor' => ''
        ],
        'stoneLine_2' => [
            'product' => 'stoneLine_2',
            'countDecor' => 20,
            'gallery' => 12,
            'idDecor' => ''
        ],
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
