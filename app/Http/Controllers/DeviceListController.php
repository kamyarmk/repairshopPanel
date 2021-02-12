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
    public function index(Request $request)
    {  
        $Devices = DB::table('registered_devices')->select('id','userId','Device', 'IMEI', 'created_at', 'Condition');

        if($request['IMEI'] != null){
            $Devices->where('IMEI', 'LIKE', '%' . $request['IMEI'] . '%'); 
        }
        if($request['device'] != null){
            $Devices->where('device', '=', $request['Device']);
        }
        if($request['created_at'] != null){
            $Devices->where('created_at', '=', $request['created_at']);
        }
        if($request['finished_at'] != null){
            $Devices->where('finished_at', '=', $request['finished_at']);
        }
        if($request['Condition'] != null){
            $Devices->where('condition', '=', $request['Condition']);
        }
        $deviceList = $Devices->get();
        return view('DeviceList')->with('Devices', $deviceList);
    }
}
