<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the about sub page.
     */
    public function aboutsub()
    {
        return view('aboutsub');
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the contact page.
     */
    public function gallery()
    {
        return view('gallery');
    }

    public function puppies()
    {
        return view('puppies');
    }
}
