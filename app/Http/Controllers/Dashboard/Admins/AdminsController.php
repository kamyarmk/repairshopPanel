<?php

namespace App\Http\Controllers\Dashboard\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Department;

class AdminsController extends Controller
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
            $users_list = User::with('Department')->where('department_id', '!=', '2')->get();
            $departmetns_list = Department::all();
            return view('admin.list')->with(
                ['admins' => $users_list,
                'departmets' => $departmetns_list]
            );
        }

    public function add(Request $request)
        {
            $Departments = Department::all();
            if(isset($request['user_name'])){
                $validator = Validator::make($request->all(), [
                    'user_name' => ['required'],
                    'first_name' => ['required'],
                    'last_name' => ['required'],
                    'email' => ['required'],
                    'job_title' => ['required'],
                    'department_id' => ['required'],
                    'address_one' => ['required'],
                    'address_two' => ['required'],
                    'city' => ['required'],
                    'postal_code' => ['required'],
                    'phone_number' => ['required'],
                    'password' => 'required|confirmed|min:6',
                ]);
                    
                if ($validator->fails()) {
                    
                    return redirect('/admins/add')
                                ->withErrors($validator)
                                ->withInput();
                }

                $user = User::create([
                    'user_name' => $request['user_name'],
                    'first_name' => $request['first_name'],
                    'last_name' => $request['last_name'],
                    'email' => $request['email'],
                    'job_title' => $request['job_title'],
                    'department_id' => $request['department_id'],
                    'address_one' => $request['address_one'],
                    'address_two' => $request['address_two'],
                    'city' => $request['city'],
                    'postal_code' => $request['postal_code'],
                    'phone_number' => $request['phone_number'],
                    'password' => Hash::make($request['password']),
                ])->id;
                // LablePrint($registeredDevice);

                return redirect('/admins/list')->with(
                    'success' , '1'
                );
            }else{
                return view('admin.add')->with([
                    'Departments' => $Departments,
                    'type' => 'Add'
                ]);
            }
        }

    public function edit(Request $request, $id)
        {
            if(isset($request['update'])){
                $validator = Validator::make($request->all(), [
                    'user_name' => ['required'],
                    'first_name' => ['required'],
                    'last_name' => ['required'],
                    'email' => ['required'],
                    'job_title' => ['required'],
                    'department_id' => ['required'],
                    'address_one' => ['required'],
                    'address_two' => ['required'],
                    'city' => ['required'],
                    'postal_code' => ['required'],
                    'phone_number' => ['required'],
                    'password' => 'confirmed|min:6',
                ]);
                if ($validator->fails()) {
                    
                    return redirect('/admins/edit/' . $id )
                                ->withErrors($validator)
                                ->withInput();
                }
                $user = User::find($id);
                $user->user_name = $request['user_name'];
                $user->first_name = $request['first_name'];
                $user->last_name = $request['last_name'];
                $user->email = $request['email'];
                $user->job_title = $request['job_title'];
                $user->department_id = $request['department_id'];
                $user->address_one = $request['address_one'];
                $user->address_two = $request['address_two'];
                $user->city = $request['city'];
                $user->postal_code = $request['postal_code'];
                $user->phone_number = $request['phone_number'];
                if($request['password'] != null){
                    $user->password = $request['password'];
                }
                $user->save();
                // LablePrint($registeredDevice);

                return redirect('/admins/list')->with(
                    'success' , '1'
                );
            }else{
                $user = User::with('Department')->find($id);
                $departmetns_list = Department::all();
                return view('admin.add')->with([
                    'User' => $user,
                    'Departments' => $departmetns_list,
                    'type'=> 'Edit'
                ]);
            }
        }

    public function department(Request $request)
        {
            $departments = Department::with('Users')->where('id', '!=', '2')->paginate(20);
            $users_list = User::with('Department')->where('department_id', '!=', '2')->paginate(20);

            return view('admin.department')->with(
                [
                    'departments' => $departments,
                    'admins' => $users_list,
                ]
            );
        }

    public function departmentEdit(Request $request, $id)
        {
            $departments = Department::find($id);

            if(isset($request['update'])){
                $validator = Validator::make($request->all(), [
                    'department_name' => ['required'],
                    'department_level' => ['required'],
                ]);
                if ($validator->fails()) {
                    
                    return redirect('/admins/department/edit/' . $id )
                                ->withErrors($validator)
                                ->withInput();
                }
                $departments->department_name = $request['department_name'];
                $departments->department_symbol = $request['department_symbol'];
                $departments->save();
                // LablePrint($registeredDevice);

                return redirect('/admins/department/list/')->with(
                    'success' , '1'
                );
            }else{
                return view('admin.departmentEdit')->with(
                    [
                        'departments' => $departments,
                        'type' => 'Edit'
                    ]
                );
            }
        }


    public function departmentAdd(Request $request)
        {

            if(isset($request['update'])){
                $validator = Validator::make($request->all(), [
                    'department_name' => ['required'],
                    'department_symbol' => ['required'],
                ]);
                if ($validator->fails()) {
                    
                    return redirect('/admins/department/add' )
                                ->withErrors($validator)
                                ->withInput();
                }
                $departments = Department::create([
                    'department_name' => $request['department_name'],
                    'department_symbol' => $request['department_symbol']
                ])->id;
                // LablePrint($registeredDevice);

                return redirect('/admins/department/list/')->with(
                    'success' , '1'
                );
            }else{
                return view('admin.departmentEdit')->with(
                    [
                        'type' => 'Add',
                    ]
                );
            }
        }

    public function vue_listing(Request $request)
        {
            $users_list = User::with('Department')
                ->where('department_id', '!=', '2')
                ->paginate(( isset($request['perPage']) ?  isset($request['perPage']) : 5));    
            return response()->json($users_list);
        }
}

