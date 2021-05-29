<?php

namespace App\Http\Controllers\Dashboard\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsConstroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        return view('project.list');
    }

    public function add(Request $request)
    {

        return view('project.add');
    }

    public function details(Request $request)
    {

        return view('project.details');
    }

    public function category(Request $request)
    {

        return view('project.category.list');
    }

    public function variable(Request $request)
    {

        return view('project.variable.list');
    }
}
