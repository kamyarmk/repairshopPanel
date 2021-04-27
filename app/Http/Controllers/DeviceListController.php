<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\registered_devices;
use App\Models\User;
use App\Models\Devices;
use \Morilog\Jalali\Jalalian;

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
        return view('DeviceList')->with('Condition', $request['Condition']);
    }


    public function update($DeviceID, Request $request){
        $validator = Validator::make($request->all(), [
            'Condition' => ['required'],
            'FqCTesting' => ['required'],
            'SqCTesting' => ['required']
        ]);

        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');

        if ($validator->fails()) {
            return redirect('DeviceList/' . $DeviceID)
                        ->withErrors($validator)
                        ->withInput();
        }

        registered_devices::find($DeviceID)->update([
            'Condition' => $request['Condition'],
            'FirstQC' => $request['FqCTesting'],
            'SeccondQC' => $request['SqCTesting'],
            'updated_at' => $dateForCreating,
        ]);

        return redirect('DeviceList');
    }

    public function destroy($DeviceID, Request $request){
        
        registered_devices::find($DeviceID)->delete();
        $Devices = registered_devices::with(['devices'])->get();

        return $Devices;
    }

    public function show($DeviceID){
        $Device = registered_devices::with(['devices', 'users'])->find($DeviceID);
        $User = User::find($Device->user_id);
        $DeviceType = Devices::all();
        
        return view('Edit/deviceEdit')->with([
            'Device' => $Device,
            'User' => $User,
            'DeviceType' => $DeviceType
        ]);
    }

    public function data(Request $request){
        $Devices = registered_devices::with(['devices']);

        if($request['keyword1'] != null){
            $Devices->where('IMEI', 'LIKE', '%' . $request['keyword1'] . '%'); 
        }
        if($request['keyword2'] != null){
            $Devices->leftJoin('devices' , 'devices.id', '=', 'registered_devices.devices_id')
                    ->where('devices.device_name', 'LIKE', '%' . $request['keyword2'] . '%')
                    ->select('registered_devices.*', 'devices.*');
        }
        
        if($request['keyword3'] != null){
            // $dateRequest = str_replace('-', '/', $request['keyword3']);
            $Devices->where('created_at', 'LIKE', '%' . $request['keyword3'] . '%');
        }
        if($request['keyword4'] != null){
            $Devices->where('finished_at', '=', $request['keyword4']);
        }
        if($request['keyword5'] != null){
            $Devices->where('condition', '=', $request['keyword5']);
        }
        if($request['homesearch'] != null){
            $Devices->where('IMEI', 'LIKE', '%' . $request['homesearch'] . '%');
        }
        if($request['Condition'] != null){
            $Devices->where('condition', '=', $request['Condition']);
        }
        
        $deviceList = $Devices->get();
        return $deviceList;
    }
}
