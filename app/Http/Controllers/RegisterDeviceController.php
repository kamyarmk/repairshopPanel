<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisteredDevices;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Devices;

class RegisterDeviceController extends Controller
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
    public function create()
    {
        $Device = Devices::all();
        return view('RegisterDevice')->with('Devices', $Device);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request  $data
     * @return Response
     */
    protected function store(Request $data)
    {
        $validator = Validator::make($data->all(), [
            'user' => ['required', 'string', 'max:255'],
            'Device' => ['required', 'string', 'max:255', 'unique:users'],
            'DeviceType' => ['required', 'string'],
            'DeviceColor' => ['required', 'string'],
            'IMEI' => ['required', 'string'],
            'Problems' => ['required', 'string'],
            'DeviceDescription' => ['required', 'string'],
            'password' => ['required', 'string'],
            'DeviceAccessories' => ['required', 'string'],
            'Tips' => ['required', 'string'],
            'MaxBudget' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect('RegisterDevice')
                        ->withErrors($validator)
                        ->withInput();
        }

        RegisteredDevices::create([
            'userId' => $data['user'],
            'Device' => $data['Device'],
            'DeviceType' => $data['DeviceType'],
            'DeviceColor' => $data['DeviceColor'],
            'IMEI' => $data['IMEI'],
            'Problems' => $data['Problems'],
            'DeviceDescription' => $data['DeviceDescription'],
            'password' => $data['password'],
            'DeviceAccessories' => $data['DeviceAccessories'],
            'Tips' => $data['Tips'],
            'MaxBudget' => $data['MaxBudget'],
            'Condition' => 'Open',
        ]);

        return redirect('DeviceList');
    }
}
