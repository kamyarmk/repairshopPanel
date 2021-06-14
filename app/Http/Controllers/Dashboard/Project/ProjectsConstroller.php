<?php

namespace App\Http\Controllers\Dashboard\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\registered_devices;
use App\Models\Devices;
use App\Models\User;

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

        return view('project.add');
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
