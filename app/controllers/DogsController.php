<?php

namespace App\Controllers;

use App\Core\App;

class DogsController
{

    public function index()
    {
        $dogs = App::get('database')->selectAll('dogs');

        return view('dogs/dog', compact('dogs'));
        // return view('dogs/dog');
    }

    public function dogPage()
    {
        $dogs = App::get('database')->selectById('dogs', $_GET['id']);
        $dogsImg = App::get('database')->getImgByID('dogs', $_GET['id']);
        return view('dogs/dogPage', compact('dogs', 'dogsImg'));
    }

    /**
     * Store a new user in the database.
     */
    public function bySex()
    {
        $dogs = App::get('database')->selectBySex('dogs', $_GET['sex']);
        return view('dogs/dog', compact('dogs'));
        // return view('dogs/dog');
    }
}
