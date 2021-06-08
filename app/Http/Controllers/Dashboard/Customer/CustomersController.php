<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\registered_devices;

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
        $users_list = User::with('registered_devices')->where('department_id', '!=', '1')->paginate(5);
        $registered_devices_list = registered_devices::all();
        
        return view('customer.list')->with(
            ['customers' => $users_list,
            'registered_devices' => $registered_devices_list]
        );
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
