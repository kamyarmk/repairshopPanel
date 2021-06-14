<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\registered_devices;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
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
        $users_list = User::with('registered_devices')->where('department_id', '!=', '1')->paginate(5);
        $registered_devices_list = registered_devices::all();
        
        return view('customer.list')->with(
            ['customers' => $users_list,
            'registered_devices' => $registered_devices_list]
        );
    }

    public function add(Request $request)
    {

        return view('customer.add');
    }

    public function edit(Request $request, $id)
    {
        $customer = User::with('registered_devices')->find($id);
        return view('customer.add')->with([
            'customer' => $customer
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'address_one' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required'],
            'phone_number' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('customer/edit/' . $id)
                        ->withErrors($validator)
                        ->withInput();
        }
        User::find($id)->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'job_title' => $request['job_title'],
            'address_one' => $request['address_one'],
            'address_two' => $request['address_two'],
            'city' => $request['city'],
            'postal_code' => $request['postal_code'],
            'phone_number' => $request['phone_number'],
        ]);
        

        return redirect('customer/edit/' . $id);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'address_one' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required'],
            'phone_number' => ['required'],
        ]);

        if ($validator->fails()) {
            return  response()->json(['errors'=>$validator->errors()],422);
        }
        

        $user = User::create([
            'user_name' => $request['first_name'] . '_' . $request['last_name'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'job_title' => $request['job_title'],
            'address_one' => $request['address_one'],
            'address_two' => $request['address_two'],
            'city' => $request['city'],
            'postal_code' => $request['postal_code'],
            'phone_number' => $request['phone_number'],
            'phone_number' => $request['phone_number'],
            'department_id' => '2',
            'password' => Hash::make($request['password']) 
        ]);

        return redirect('/customer/list');
    }
}
