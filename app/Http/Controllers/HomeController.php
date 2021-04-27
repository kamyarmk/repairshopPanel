<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\invoices;
use App\Models\registered_devices;
use App\Models\User;
use \Morilog\Jalali\Jalalian;

class HomeController extends Controller
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
        $Invoice = null;
        if($request['invoice_id'] != null){
            $Invoice = invoices::with(['registered_devices', 'users'])->where('id', '=', $request['invoice_id'])->first();
        }
        $users = DB::table('users')->select('id', 'name', 'email', 'created_at')->get();

        $openCondition = DB::table('registered_devices')->where('Condition', '=', 'Open')->count();
        $repairingCondition = DB::table('registered_devices')->where('Condition', '=', 'Repairing')->count();
        $testingCondition = DB::table('registered_devices')->where('Condition', '=', 'Testing')->count();
        $repairedCondition = DB::table('registered_devices')->where('Condition', '=', 'Repaired')->count();
        $deliveredCondition = DB::table('registered_devices')->where('Condition', '=', 'Delivered')->count();
        $delayedCondition = DB::table('registered_devices')->where('Condition', '=', 'Delayed')->count();
        $unsuccesfulCondition = DB::table('registered_devices')->where('Condition', '=', 'Unsuccessful')->count();
        $refundCondition = DB::table('registered_devices')->where('Condition', '=', 'Refund')->count();

        $sat = Jalalian::forge('last saturday')->format('Y-m-d');
        $sun = Jalalian::forge('last sunday')->format('Y-m-d');
        $mon = Jalalian::forge('last monday')->format('Y-m-d');
        $tue = Jalalian::forge('last tuesday')->format('Y-m-d');
        $wed = Jalalian::forge('last wednesday')->format('Y-m-d');
        $thu = Jalalian::forge('last thursday')->format('Y-m-d');
        $fri = Jalalian::forge('last friday')->format('Y-m-d');

        $chartinfos = [
            'sat' => [
                'paid' => invoices::where('Condition', '=', 'Paid')->where('created_at', 'LIKE', '%' . $sat . '%')->count(),
                'refund' => registered_devices::where('Condition', '=', 'Refund')->where('created_at', 'LIKE', '%' . $sat . '%')->count(),
                'open' => registered_devices::where('Condition', '=', 'Open')->where('created_at', 'LIKE', '%' . $sat . '%')->count(),
                'delivered' => registered_devices::where('Condition', '=', 'Delivered')->where('created_at', 'LIKE', '%' . $sat . '%')->count()
            ],
            'sun' => [
                'paid' => invoices::where('Condition', '=', 'Paid')->where('created_at', 'LIKE', '%' . $sun . '%')->count(),
                'refund' => registered_devices::where('Condition', '=', 'Refund')->where('created_at', 'LIKE', '%' . $sun . '%')->count(),
                'open' => registered_devices::where('Condition', '=', 'Open')->where('created_at', 'LIKE', '%' . $sun . '%')->count(),
                'delivered' => registered_devices::where('Condition', '=', 'Delivered')->where('created_at', 'LIKE', '%' . $sun . '%')->count()
            ],
            'mon' => [
                'paid' => invoices::where('Condition', '=', 'Paid')->where('created_at', 'LIKE', '%' . $mon . '%')->count(),
                'refund' => registered_devices::where('Condition', '=', 'Refund')->where('created_at', 'LIKE', '%' . $mon . '%')->count(),
                'open' => registered_devices::where('Condition', '=', 'Open')->where('created_at', 'LIKE', '%' . $mon . '%')->count(),
                'delivered' => registered_devices::where('Condition', '=', 'Delivered')->where('created_at', 'LIKE', '%' . $mon . '%')->count()
            ],
            'tue' => [
                'paid' => invoices::where('Condition', '=', 'Paid')->where('created_at', 'LIKE', '%' . $tue . '%')->count(),
                'refund' => registered_devices::where('Condition', '=', 'Refund')->where('created_at', 'LIKE', '%' . $tue . '%')->count(),
                'open' => registered_devices::where('Condition', '=', 'Open')->where('created_at', 'LIKE', '%' . $tue . '%')->count(),
                'delivered' => registered_devices::where('Condition', '=', 'Delivered')->where('created_at', 'LIKE', '%' . $tue . '%')->count()
            ],
            'wed' => [
                'paid' => invoices::where('Condition', '=', 'Paid')->where('created_at', 'LIKE', '%' . $wed . '%')->count(),
                'refund' => registered_devices::where('Condition', '=', 'Refund')->where('created_at', 'LIKE', '%' . $wed . '%')->count(),
                'open' => registered_devices::where('Condition', '=', 'Open')->where('created_at', 'LIKE', '%' . $wed . '%')->count(),
                'delivered' => registered_devices::where('Condition', '=', 'Delivered')->where('created_at', 'LIKE', '%' . $wed . '%')->count()
            ],
            'thu' => [
                'paid' => invoices::where('Condition', '=', 'Paid')->where('created_at', 'LIKE', '%' . $thu . '%')->count(),
                'refund' => registered_devices::where('Condition', '=', 'Refund')->where('created_at', 'LIKE', '%' . $thu . '%')->count(),
                'open' => registered_devices::where('Condition', '=', 'Open')->where('created_at', 'LIKE', '%' . $thu . '%')->count(),
                'delivered' => registered_devices::where('Condition', '=', 'Delivered')->where('created_at', 'LIKE', '%' . $thu . '%')->count()
            ],
            'fri' => [
                'paid' => invoices::where('Condition', '=', 'Paid')->where('created_at', 'LIKE', '%' . $fri . '%')->count(),
                'refund' => registered_devices::where('Condition', '=', 'Refund')->where('created_at', 'LIKE', '%' . $fri . '%')->count(),
                'open' => registered_devices::where('Condition', '=', 'Open')->where('created_at', 'LIKE', '%' . $fri . '%')->count(),
                'delivered' => registered_devices::where('Condition', '=', 'Delivered')->where('created_at', 'LIKE', '%' . $fri . '%')->count()
            ]
        ];

        return view('panel')->with([
            'users' => $users,
            'openCondition' => $openCondition,
            'repairingCondition' => $repairingCondition,
            'testingCondition' => $testingCondition,
            'repairedCondition' => $repairedCondition,
            'deliveredCondition' => $deliveredCondition,
            'delayedCondition' => $delayedCondition,
            'unsuccesfulCondition' => $unsuccesfulCondition,
            'refundCondition' => $refundCondition,
            'Invoice' => $Invoice,
            'chartInfo' => $chartinfos,
            ]);
    }
}
