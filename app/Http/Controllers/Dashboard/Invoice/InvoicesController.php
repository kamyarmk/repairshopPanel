<?php

namespace App\Http\Controllers\Dashboard\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicesController extends Controller
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

        return view('invoice.list');
    }

    public function add(Request $request)
    {

        return view('invoice.add');
    }

    public function details(Request $request)
    {

        return view('invoice.details');
    }
}
