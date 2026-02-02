<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Render the home page.
     */
    public function __invoke(Request $request)
    {
        return inertia()->render('index');
    }
}
