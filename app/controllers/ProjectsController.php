<?php

namespace App\Controllers;

use App\Core\App;

class ProjectsController
{
    /**
     * Show all users.
     */
    public function index()
    {

        $projects = App::get('database')->selectAll('project');

        return view('projects/index', compact('projects'));
    }
}
