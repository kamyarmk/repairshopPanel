<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\invoices;
use App\Models\registered_devices;
use App\Models\User;
use App\Models\Devices;
use PDF;
use \Morilog\Jalali\Jalalian;


class InvoiceController extends Controller
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
    public function index(Request $request){
        $Invoices = invoices::with(['registered_devices', 'users'])->get();

        if($request['user_name'] != null){
            $Invoices->where('users.name', 'like', '%' . $request['user_name'] . '%' ); 
        }
        if($request['device_imei'] != null){
            $device = registered_devices::where('IMEI', 'like', '%' . $request['device_imei'] . '%')->first();
            $Invoices->where('registered_devices_id', '=', $device->id);
        }
        if($request['created_at'] != null){
            $Invoices->where('created_at', '=', $request['created_at']);
        }
        if($request['condition'] != null){
            $Invoices->where('condition', '=', $request['condition']);
        }
        // dd($Invoices);
        return view('Invoice')->with('Invoices', $Invoices);
    }

    public function show($InvoiceID){
        $Invoice = invoices::with(['registered_devices', 'users'])->find($InvoiceID);
        return view('Edit/invoiceEdit')->with([
            'Invoice' => $Invoice
        ]);
    }

    public function update(Request $request, $InvoiceID){
        $validator = Validator::make($request->all(), [
            'Price' => ['required'],
            'Condition' => ['required'],
            'Notes' => []
        ]);
        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');
        if ($validator->fails()) {
            return redirect('Invoice/' . $userID)
                        ->withErrors($validator)
                        ->withInput();
        }

        invoice::find($InvoiceID)->update([
            'Price' => $request['Price'],
            'Condition' => $request['Condition'],
            'Notes' => $request['Notes'],
            'updated_at' => $dateForCreating,
            'created_at' => $dateForCreating
        ]);

        return redirect('Invoice');
    }

    public function destroy($InvoiceID){
        invoice::find($InvoiceID)->delete();

        return redirect('Invoice');
    }

    public function data(Request $request){
        $Invoices = invoices::with(['registered_devices', 'users']);

        if($request['keyword1'] != null){
            $Invoices->leftJoin('users' , 'users.id', '=', 'invoices.users_id')
                    ->where('users.name', 'LIKE', '%' . $request['keyword1'] . '%')
                    ->select('invoices.*' ,'users.name' );
        }
        if($request['keyword2'] != null){
            $Invoices->leftJoin('registered_devices' , 'registered_devices.id', '=', 'invoices.registered_devices_id')
                    ->where('registered_devices.IMEI', 'LIKE', '%' . $request['keyword2'] . '%')
                    ->select('invoices.*' ,'registered_devices.IMEI' );
        }
        if($request['keyword3'] != null){
            $Invoices->where('created_at', '=', $request['keyword3']);
        }
        if($request['keyword4'] != null){
            $Invoices->where('id', '=', $request['keyword4']);
        }
        if($request['keyword5'] != null){
            $Invoices->where('condition', '=', $request['keyword4']);
        }

        if($request['homesearch'] != null){
            $Invoices->where('id', 'LIKE', '%' . $request['homesearch'] . '%');
        }
        $invoiceList = $Invoices->get();

        return $invoiceList;
    }

    public function create(Requests $request){

        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
            'registered_devices_id' => ['required'],
            'Price' => ['required'],
            'Condition' => ['required'],
            'Notes' => []
        ]);
        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');
        if ($validator->fails()) {
            return redirect('Invoice/')
                        ->withErrors($validator)
                        ->withInput();
        }

        invoice::create([
            'user_id' => $request['user_id'],
            'registered_devices_id' => $request['registered_devices_id'],
            'Price' => $request['Price'],
            'Condition' => $request['Condition'],
            'Notes' => $request['Notes'],
            'updated_at' => $dateForCreating,
            'created_at' => $dateForCreating
        ]);

        return redirect('Invoice');
    }

    public function print($id){
        $data = invoices::with(['registered_devices', 'users'])->find($id);
        $pdf = PDF::loadView('pdf.invoice', $data, ['font_path' => base_path('resources/sass/iransans/fonts/ttf'),
        'font_data' => [
            'IRANSans' => [
                'R'  => 'IRANSansWeb.ttf',    // regular font
                'B'  => 'IRANSansWeb-Bold.ttf',       // optional: bold font
                'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
                'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
            ]
            // ...add as many as you want.
            ],
            'format'           => 'A4',
        ],
    );
        return $pdf->stream('document.pdf');

        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
    }
}
