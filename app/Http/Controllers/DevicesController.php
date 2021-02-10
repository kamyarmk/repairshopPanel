<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devices;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DevicesController extends Controller
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
        $Devices = DB::table('devices')->select('DeviceName', 'DeviceType')->get();
        return view('Devices')->with('Devices', $Devices);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request  $data
     * @return Response
     */
    protected function create(Request $data)
    {
        $validator = Validator::make($data->all(), [
            'DeviceName' => ['required', 'string', 'max:255'],
            'DeviceType' => ['required', 'string', 'max:255', 'unique:users'],
        ]);

        if ($validator->fails()) {
            return redirect('Devices')
                        ->withErrors($validator)
                        ->withInput();
        }

        $devicemaking = Devices::create([
            'DeviceName' => $data['DeviceName'],
            'DeviceType' => $data['DeviceType'],
        ]);
        return redirect('Devices');
    }
}
