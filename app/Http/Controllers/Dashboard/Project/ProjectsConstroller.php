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
        $Devices = registered_devices::with('Devices', 'Users')->paginate(5);
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
        $validator = Validator::make($data->all(), [
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
            'user_id' => $data['user_id'],
            'devices_id' => $data['devices_id'],
            'color_id' => $data['color_id'],
            'color_id' => $data['color_id'],
            'IMEI' => $data['IMEI'],
            'problems' => $data['problems'],
            'device_desc' => $data['device_desc'],
            'device_otherinfo' => $data['device_otherinfo'],
            'device_password' => $data['device_password'],
            'deadline' => $data['deadline'],
            'created_at' => $data['created_at'],
            'Condition' => 'Open',
        ])->id;
        // LablePrint($registeredDevice);

        return redirect('/project/list');
    }

    public function edit(Request $request)
    {

        return view('project.edit');
    }

    public function details(Request $request)
    {

        return view('project.details');
    }

    public function category(Request $request)
    {

        return view('project.category.list');
    }
    //Categories Add and Edit
        public function categoryAdd(Request $request)
        {

            return view('project.category.add');
        }
        public function categoryEdit(Request $request)
        {

            return view('project.category.add');
        }

    public function variable(Request $request)
    {

        return view('project.variable.list');
    }
    //Categories Add and Edit
        public function variableAdd(Request $request)
        {

            return view('project.variable.add');
        }
        public function variableEdit(Request $request)
        {

            return view('project.variable.add');
        }
    
    //QC Reports
        public function qc(Request $request)
        {

            return view('project.qc.list');
        }
        public function qcAdd(Request $request)
        {

            return view('project.qc.add');
        }
        public function qcEdit(Request $request)
        {

            return view('project.qc.add');
        }
    //Problems Reports
        public function problems(Request $request)
        {

            return view('project.problems.list');
        }

        public function problemsAdd(Request $request)
        {

            return view('project.problems.add');
        }
        public function problemsEdit(Request $request)
        {

            return view('project.problems.add');
        }
}
