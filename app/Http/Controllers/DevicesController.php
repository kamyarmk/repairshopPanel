<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devices;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\registered_devices;
use App\Models\Device_Config;

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
    public function index(Request $request)
    {
        $Devices = Devices::all();

        if($request['device_name'] != null){
            $Devices->where('device_name', '=', $request['device_name'] ); 
        }
        if($request['device_type'] != null){
            $Devices->where('device_type', '=', $request['device_type']);
        }
        return view('Devices')->with('Devices', $Devices);
    }

    public function show($DeviceID){
        $Device = Devices::with(['registered_devices', 'device__configs'])->find($DeviceID);
        return view('Edit/deviceTypeEdit')->with([
            'Device' => $Device
        ]);
    }

    public function update(Request $request, $DeviceID){
        $validator = Validator::make($request->all(), [
            'device_name' => ['required'],
            'device_type' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('Devices/' . $userID)
                        ->withErrors($validator)
                        ->withInput();
        }

        invoice::find($InvoiceID)->update([
            'device_name' => $request['device_name'],
            'device_type' => $request['device_type'],
        ]);

        return redirect('Devices');
    }

    public function destroy($DeviceID){
        Devices::find($DeviceID)->delete();

        return redirect('Invoice');
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

    public function data(Request $request){
        $Devices = Devices::select('*');

        if($request['keyword1'] != null){
            $Devices->where('device_name', 'LIKE', '%' . $request['keyword1'] . '%'); 
        }
        if($request['keyword2'] != null){
            $Devices->where('device_type', 'LIKE', '%' .  $request['keyword2'] . '%');
        }

        return $Devices->get();
    }
}
