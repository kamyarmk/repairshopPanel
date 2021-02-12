<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {
        $users = DB::table('users')->select('id', 'name', 'email', 'created_at')->get();

        $openCondition = DB::table('registered_devices')->where('Condition', '=', 'Open')->count();
        $repairingCondition = DB::table('registered_devices')->where('Condition', '=', 'Repairing')->count();
        $testingCondition = DB::table('registered_devices')->where('Condition', '=', 'Testing')->count();
        $repairedCondition = DB::table('registered_devices')->where('Condition', '=', 'Repaired')->count();
        $deliveredCondition = DB::table('registered_devices')->where('Condition', '=', 'Delivered')->count();
        $delayedCondition = DB::table('registered_devices')->where('Condition', '=', 'Delayed')->count();
        $unsuccesfulCondition = DB::table('registered_devices')->where('Condition', '=', 'Unsuccessful')->count();
        $refundCondition = DB::table('registered_devices')->where('Condition', '=', 'Refund')->count();


        return view('panel')->with([
            'users' => $users,
            'openCondition' => $openCondition,
            'repairingCondition' => $repairingCondition,
            'testingCondition' => $testingCondition,
            'repairedCondition' => $repairedCondition,
            'deliveredCondition' => $deliveredCondition,
            'delayedCondition' => $delayedCondition,
            'unsuccesfulCondition' => $unsuccesfulCondition,
            'refundCondition' => $refundCondition
            ]);
    }
}
