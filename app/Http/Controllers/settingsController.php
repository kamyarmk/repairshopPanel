<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\settings;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class settingsController extends Controller
{
    public function show(){
        $Settings = settings::find(1);
        return view('Edit/Settings')->with([
            'Settings' => $Settings
        ]);
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'mobile_username' => ['required'],
            'mobile_password' => ['required'],
            'mobile_senderNumber' => ['required'],
            'invoice_sms' => ['required'],
            'admin_email' => ['required'],
            'admin_mobilenumber' => ['required'],
            'company_name' => ['required'],
            'compny_address' => ['required'],
        ]);

        if($request['logo_address']){
            $imageName = time().'.'.$request['logo_address']->getClientOriginalExtension();  
            $request['logo_address']->move(public_path('images'), $imageName);
        }

        
        if ($validator->fails()) {
            return redirect('Setting/')
                        ->withErrors($validator)
                        ->withInput();
        }

        settings::find(1)->update([
            'mobile_username' => $request['mobile_username'],
            'mobile_password' => $request['mobile_password'],
            'mobile_senderNumber' => $request['mobile_senderNumber'],
            'invoice_sms' => $request['invoice_sms'],
            'admin_email' => $request['admin_email'],
            'admin_mobilenumber' => $request['admin_mobilenumber'],
            'logo_address' => $imageName,
            'company_name' => $request['company_name'],
            'compny_address' => $request['compny_address'],
        ]);

        return redirect('/settings');
    }
}
