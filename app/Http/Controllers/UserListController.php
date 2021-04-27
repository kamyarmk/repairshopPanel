<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\registered_devices;
use App\Models\usersDetails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Morilog\Jalali\Jalalian;

class UserListController extends Controller
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
        $Users = DB::table('users')->select('id','name','email', 'phone_number');

        if($request['name'] != null){
            $Users->where('name', 'LIKE', '%' . $request['name'] . '%'); 
        }
        if($request['email'] != null){
            $Users->where('email', 'LIKE', '%' . $request['email'] . '%'); 
        }
        if($request['phone_number'] != null){
            $Users->where('phone_number', 'LIKE', '%' . $request['phone_number'] . '%'); 
        }
        $userList = $Users->get();
        return view('UserList')->with('Users', $userList);
    }

    public function show($userID){
        $User = User::with('usersDetails')->find($userID);
        $Devices = registered_devices::all()->where('user_id', '=', $userID);
        return view('Edit/userEdit')->with([
            'User' => $User,
            'Devices' => $Devices
        ]);
    }

    public function update(Request $request, $userID){
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required']
        ]);

        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');
        if ($validator->fails()) {
            return redirect('UserList/' . $userID)
                        ->withErrors($validator)
                        ->withInput();
        }

        User::find($userID)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'updated_at' => $dateForCreating,
        ]);
        $usersDetailes = usersDetails::where('user_id', '=', $userID)->first();
        if($usersDetailes){
            usersDetails::find($usersDetailes->id)->update([
                'first_address' => $request['first_address'],
                'seccond_address' => $request['seccond_address'],
                'seccond_number' => $request['seccond_number'],
                'company_name' => $request['company_name'],
                'updated_at' => $dateForCreating,
            ]);
        }else{
            usersDetails::create([
                'user_id' => $userID,
                'first_address' => $request['first_address'],
                'seccond_address' => $request['seccond_address'],
                'seccond_number' => $request['seccond_number'],
                'company_name' => $request['company_name'],
                'updated_at' => $dateForCreating,
            ]);
        }

        return redirect('UserList');
    }

    public function destroy($userID){
        User::find($userID)->delete();

        return redirect('UserList');
    }

    public function create(Request $request){

    }

    public function vue(Request $request){
        $Users = DB::table('users')->select('id','name','email', 'phone_number');

        if($request['name'] != null){
            $Users->where('name', 'LIKE', '%' . $request['name'] . '%'); 
        }
        if($request['keyword1'] != null){
            $Users->where('name', 'LIKE', '%' . $request['keyword1'] . '%'); 
        }
        if($request['keyword2'] != null){
            $Users->where('email', 'LIKE', '%' . $request['keyword2'] . '%'); 
        }
        if($request['keyword3'] != null){
            $Users->where('phone_number', 'LIKE', '%' . $request['keyword3'] . '%'); 
        }
        if($request['homesearch'] != null){
            $Users->where('phone_number', 'LIKE', '%' . $request['homesearch'] . '%');
        }

        $userList = $Users->get();
        return $userList;
    }

    public function vueCreate(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => ('required'),
            'email' => ('required'),
            'phonenumber' => ('required'),
            'first_address' => ('required'),
        ]);

        if ($validator->fails()) {
            return  response()->json(['errors'=>$validator->errors()],422);
        }
        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['phonenumber'],
            'password'=> Hash::make(Str::random(8)),
            'updated_at' => $dateForCreating,
            'created_at' => $dateForCreating
        ]);

        usersDetails::create([
            'user_id' => $userID,
            'first_address' => $request['first_address'],
            'seccond_address' => $request['seccond_address'],
            'seccond_number' => $request['seccond_number'],
            'company_name' => $request['company_name']
        ]);


        return response()->json([
            'user' => $user,
            'message' => 'Success'
          ], 200);
    }

}
