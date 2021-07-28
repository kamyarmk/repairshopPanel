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
        // TODO: VUE Oriented
        return view('invoice.list');
    }

    public function add(Request $request)
    {
        // TODO: Make the Funtion for the Invoice
        // TODO: Go back with a Session KeY
        return view('invoice.add');
    }

    public function details(Request $request)
    {
        // TODO: Make the Funtion for the Invoice
        // TODO: Go back with a Session KeY
        return view('invoice.details');
    }
    public function Edit(Request $request)
    {
        // TODO: Make the Funtion for the Invoice
        // TODO: Go back with a Session KeY
        return view('invoice.details');
    }
    public function Store(Request $request)
    {
        // TODO: Make the Funtion for the Invoice
        // TODO: Go back with a Session KeY
        return view('invoice.details');
    }
}
