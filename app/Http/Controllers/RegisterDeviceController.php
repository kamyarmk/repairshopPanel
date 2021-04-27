<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registered_devices;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Devices;
use \Morilog\Jalali\Jalalian;
use PDF;

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
            'Device' => ['required', 'string', 'max:255'],
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
        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');

        if ($validator->fails()) {
            return redirect('RegisterDevice')
                        ->withErrors($validator)
                        ->withInput();
        }

        $registeredDevice = registered_devices::create([
            'user_id' => $data['userID'],
            'devices_id' => $data['Device'],
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
            'updated_at' => $dateForCreating,
            'created_at' => $dateForCreating
        ])->id;
        LablePrint($registeredDevice);

        return redirect('DeviceList');
    }

    public function LablePrint($id){
        $data = registered_devices::with(['devices', 'users'])->find($id);
        $pdf = PDF::loadView('pdf.LablePrint', $data, ['font_path' => base_path('resources/sass/iransans/fonts/ttf'),
            'font_data' => [
                'IRANSans' => [
                    'R'  => 'IRANSansWeb.ttf',    // regular font
                    'B'  => 'IRANSansWeb-Bold.ttf',       // optional: bold font
                    'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
                    'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
                ]
                // ...add as many as you want.
                ],
            ],
            [
                'format'           => [72.5, 45.5],
            ]
        );
        
        return $pdf->stream('labelprint.pdf');

        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
    }
}
