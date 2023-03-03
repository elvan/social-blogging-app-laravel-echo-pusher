<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function homepage()
    {
        return '<h1>Homepage!!!!</h1><a href="/about">View the about page</a>';
    }

    public function aboutPage()
    {
        return '<h1>About Page!!!!!</h1><a href="/">Back to home</a>';
    }
}
