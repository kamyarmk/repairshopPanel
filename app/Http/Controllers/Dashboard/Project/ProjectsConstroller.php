<?php

namespace App\Http\Controllers\Dashboard\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\registered_devices;
use App\Models\Devices;
use App\Models\User;
use App\Models\Colors;
use App\Models\Storages;
use App\Models\Variables;

class ProjectsConstroller extends Controller
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
        $Devices = registered_devices::all();

        return view('project.list')->with([
            'Devices' => $Devices
        ]);
    }

    public function add(Request $request)
    {
        $users = User::all();
        $colors = Colors::all();
        $storages = Storages::all();
        $devices = Devices::all();

        return view('project.add')->with([
            'Users' => $users,
            'Colors' => $colors,
            'Storages' => $storages,
            'Devices' => $devices
        ]);
    }

    public function store(Request $request)
    {
        // TODO: Go back with a Session Ke
        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
            'devices_id' => ['required'],
            'color_id' => ['required'],
            'storage_id' => ['required'],
            'IMEI' => ['required'],
            'problems' => ['required'],
            'device_desc' => ['required'],
            'device_otherinfo' => ['required'],
            'device_password' => ['required'],
            'deadline' => ['required'],
            'created_at' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/project/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        $registeredDevice = registered_devices::create([
            'users_id' => $request['user_id'],
            'devices_id' => $request['devices_id'],
            'color_id' => $request['color_id'],
            'storage_id' => $request['storage_id'],
            'IMEI' => $request['IMEI'],
            'problems' => $request['problems'],
            'device_desc' => $request['device_desc'],
            'device_otherinfo' => $request['device_otherinfo'],
            'device_password' => $request['device_password'],
            'deadline' => $request['deadline'],
            'created_at' => $request['created_at'],
            'Condition' => 'Open',
        ])->id;
        // LablePrint($registeredDevice);

        return redirect('/project/list');
    }

    public function edit(Request $request)
    {
        // TODO: Add Funtion for the Project
        // TODO: Go back with a Session KeY
        return view('project.edit');
    }

    public function details(Request $request)
    {
        // TODO: Add Funtion for the Project
        // TODO: Go back with a Session KeY
        return view('project.details');
    }

    public function category(Request $request)
    {
        // TODO: Add Funtion for the Project
        // TODO: Go back with a Session KeY
        return view('project.category.list');
    }
    //Categories Add and Edit
        public function categoryAdd(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.category.add');
        }
        public function categoryEdit(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.category.add');
        }

    public function variable(Request $request)
    {
        // TODO: Add Funtion for the Project
        // TODO: Go back with a Session KeY
        return view('project.variable.list');
    }
    //Categories Add and Edit
        public function variableAdd(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.variable.add');
        }
        public function variableEdit(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.variable.add');
        }
    
    //QC Reports
        public function qc(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.qc.list');
        }
        public function qcAdd(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.qc.add');
        }
        public function qcEdit(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.qc.add');
        }
    //Problems Reports
        public function problems(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.problems.list');
        }

        public function problemsAdd(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.problems.add');
        }
        public function problemsEdit(Request $request)
        {
            // TODO: Add Funtion for the Project
            // TODO: Go back with a Session KeY
            return view('project.problems.add');
        }


        public function vue_deviceListing(Request $request){

            // we have the following requests :
            //     Condition : For applying the Filter on the Condiotions
            //     perPage : For how many in a Page


            // Check Wich Condition To Apply
            if(isset($request['Condition']) AND $request['Condition'] != 'viewAll'){
                $devices = registered_devices::with('devices', 'user')
                        ->where('condition', '=', $request['Condition'])
                        ->paginate(( isset($request['perPage']) ?  isset($request['perPage']) : 5));
            }else{
                $devices = registered_devices::with('devices', 'user')
                        ->paginate(( isset($request['perPage']) ?  isset($request['perPage']) : 5));
            }
        
            
            return response()->json($devices);
        }
}
