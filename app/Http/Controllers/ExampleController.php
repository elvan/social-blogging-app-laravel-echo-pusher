<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function homepage()
    {
        // imagine we loaded data from the database
        $ourName = 'Brad';
        $animals = ['Meowsalot', 'Barksalot', 'Purrsloud'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']);
    }

    public function aboutPage()
    {
        return view('single-post');
    }
}
