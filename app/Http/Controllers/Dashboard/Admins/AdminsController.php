<?php

namespace App\Http\Controllers\Dashboard\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminsController extends Controller
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

        return view('admin.list');
    }

    public function add(Request $request)
    {

        return view('admin.add');
    }

    public function edit(Request $request)
    {

        return view('admin.add');
    }

    public function department(Request $request)
    {

        return view('admin.department');
    }
}
