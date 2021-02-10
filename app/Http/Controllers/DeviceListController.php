<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceListController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $Devices = DB::table('registered_devices')->select('id','userId','Device', 'IMEI', 'created_at', 'Condition')->get();
        return view('DeviceList')->with('Devices', $Devices);
    }
}
