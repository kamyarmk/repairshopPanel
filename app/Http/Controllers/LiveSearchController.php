<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\invoices;
use App\Models\registered_devices;
use App\Models\User;
use PDF;
use \Morilog\Jalali\Jalalian;

class LiveSearchController extends Controller
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

     public function search(Request $request){
        $Invoices = invoices::with(['registered_devices', 'users']);
        $Users = DB::table('users')->select('id','name','email', 'phone_number');
        $Devices = registered_devices::with(['devices']);
        $invoiceList = [];
        $userList = [];
        $Devicelist = [];
        if($request['homesearch'] != null){
            $Invoices->where('id', '=', $request['homesearch']);
            $invoiceList = $Invoices->get();
            $Users->where('phone_number', 'LIKE', '%' . $request['homesearch'] . '%'); 
            $userList = $Users->get();
            if( count($userList) == 0 ){
                $Users = DB::table('users')->select('id','name','email', 'phone_number');
                $Users->where('name', 'LIKE', '%' . $request['homesearch'] . '%'); 
                $userList = $Users->get();
            }
            $Devices->where('IMEI', 'LIKE', '%' . $request['homesearch'] . '%'); 
            $Devicelist = $Devices->get();
        }

        return [$invoiceList, $userList, $Devicelist];
     }
}
