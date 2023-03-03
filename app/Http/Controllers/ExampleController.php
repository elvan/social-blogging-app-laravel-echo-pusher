<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function homepage()
    {
        // imagine we loaded data from the database
        $ourName = 'Elvan';
        $animals = ['TheCat', 'TheDog', 'TheBird'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'TheCat']);
    }

    public function aboutPage()
    {
        return '<h1>About Page!!!!!</h1><a href="/">Back to home</a>';
    }
}
