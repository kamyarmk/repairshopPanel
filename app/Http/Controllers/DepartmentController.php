<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use \Morilog\Jalali\Jalalian;

class DepartmentController extends Controller
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
    public function index(){
        $Department = Department::all();
        return view('Profile.DepartmentList')->with('Departments', $Department);
    }
    public function create(Requests $request)
    {
        return view('Profile.DepartmentShow');
    }
    public function show($ID){
        $Department = Department::find($ID);
        return view('Profile.DepartmentShow')->with('Department', $Department);
    }
    public function update(Request $request){

        $validator = Validator::make($request->all(), [
            'department_name' => ['required'],
            'department_level' => ['required'],
        ]);
        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');
        if ($validator->fails()) {
            return redirect('Devices/' . $userID)
                        ->withErrors($validator)
                        ->withInput();
        }

        Department::find($InvoiceID)->update([
            'department_name' => $request['department_name'],
            'department_level' => $request['department_level'],
            'updated_at' => $dateForCreating,
        ]);

        return redirect('department.index');
    }

    public function vue(Request $request){
        $Departments = Department::select('id', 'department_name', 'department_Level', 'created_at', 'updated_at');

        if($request['keyword1'] != null){
            $Departments->where('department_name', 'LIKE', '%' . $request['keyword1'] . '%'); 
        }
        if($request['keyword2'] != null){
            $Departments->where('department_Level', 'LIKE', '%' . $request['keyword2'] . '%'); 
        }

        $departmentList = $Departments->get();
        return $departmentList;
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
            'department_name' => ['required', 'string', 'max:255'],
            'department_level' => ['required', 'intiger'],
        ]);
        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');

        if ($validator->fails()) {
            return redirect('RegisterDevice')
                        ->withErrors($validator)
                        ->withInput();
        }

        Departmet::create([
            'department_name' => $data['userID'],
            'department_level' => $data['Device'],
        ]);

        return redirect('DeviceList');
    }
}
