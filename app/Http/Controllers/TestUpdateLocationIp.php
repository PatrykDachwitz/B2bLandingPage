<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestUpdateLocationIp extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        dd($request->ip());
    }
}
