<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceEditController extends Controller
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
    public function index($DeviceID)
    {
        $Device = DB::table('registered_devices')->where('id','=', $DeviceID)->first();
        return view('Edit/deviceEdit')->with('Device', $Device);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request  $data
     * @return Response
     */
    public function update(Request $request, $DeviceID){

    }
}
