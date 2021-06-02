<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
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

        return view('customer.list');
    }

    public function add(Request $request)
    {

        return view('customer.add');
    }

    public function edit(Request $request)
    {

        return view('customer.add');
    }
}
