<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

use App\Models\registered_devices;
use App\Models\User;
use App\Models\Devices;

use App\Models\invoices;
use Carbon\Carbon;

class DashboardController extends Controller
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
        $TotalIncome = 0;
        $TotalLastIncome = 0;

        $invoices = invoices::where('created_at', '>', Carbon::now()->subWeek(4)->getTimestamp())->get();
        $invoicesLastMonths = invoices::select('Price')->where('created_at', '<', Carbon::now()->subWeek(4)->getTimestamp())->get();
        
        foreach($invoices as $invoice){
            $TotalIncome += $invoice->Price;
        }
        foreach($invoicesLastMonths as $invoicesLastMonth){
            $TotalLastIncome += $invoicesLastMonth->Price;
        }

        $devices = registered_devices::with('devices', 'user')->where('created_at', '>', Carbon::now()->subWeek(4)->getTimestamp())->get();
        $devicesList = registered_devices::with('devices', 'user')->where('created_at', '>', Carbon::now()->subWeek(4)->getTimestamp())->limit(10)->get();
        //TODO : Count the Precntages From the Home design

        return view('dashboard')->with([
            'Devices' => $devices,
            'Invoices' => $invoices,
            'TotalIncome' => $TotalIncome,
            'Grow' => ((($TotalIncome - $TotalLastIncome) / $TotalIncome ) * 100),
            'DevicesList' => $devicesList
        ]);
    }

    public function updater(){
        $process = new Process(["vendor/bin/envoy", "run", "okey" ]);
        $process->setTimeout(3600);
        $process->setIdleTimeout(300);
        $process->setWorkingDirectory(base_path());
        $process->run(function ($type, $buffer)
        {
            echo $buffer . '</br />';
        });
    }

    public function vue(Request $request, $from = 0){
        $TotalIncome = 0;
        $TotalLastIncome = 0;
        $timezone = $from != 0 ? $from : '4';
        $tilldate = '0';

        if($from == '1'){
            $tilldate = Carbon::now()->getTimestamp();
        }elseif($from == '4'){
            $tilldate = Carbon::now()->getTimestamp();
        }else{
            $tilldate = Carbon::now()->subWeek($from / 2)->getTimestamp();
        }

        $invoices = invoices::where('created_at', '>', Carbon::now()->subWeek($timezone)->getTimestamp())
                            ->where('created_at', '<', $tilldate)
                            ->orderBy('created_at', 'desc')
                            ->get();
        $invoicesLastMonths = invoices::where('created_at', '<', Carbon::now()->subWeek($timezone)->getTimestamp())
                                        ->where('created_at', '>', Carbon::now()->subWeek($timezone + $timezone)->getTimestamp())
                                        ->orderBy('created_at', 'desc')
                                        ->get();
        
        foreach($invoices as $invoice){
            $TotalIncome += $invoice->Price;
        }
        foreach($invoicesLastMonths as $invoicesLastMonth){
            $TotalLastIncome += $invoicesLastMonth->Price;
        }

        $devices = registered_devices::with('devices', 'user')->where('created_at', '>', Carbon::now()->subWeek($timezone)->getTimestamp())->get();
        $deviceLastMonth = registered_devices::with('devices', 'user')->where('created_at', '<', Carbon::now()->subWeek($timezone)->getTimestamp())->get();

        $data = [
            'acceptedDevices' => $devices->where('condition', '=', 'Open')->count(),
            'deliveredDevices' => $devices->where('condition', '=', 'Delivered')->count(),
            'notDeliveredDevices' => $devices->where('condition', '=', 'Refund')->count(),

            'invoiceWaiting' => $invoices->where('Condition', '=', 'Waiting')->count(),
            'invoiceReadToPay' => $invoices->where('Condition', '=', 'Ready')->count(),
            'invoicePaid' => $invoices->where('Condition', '=', 'Paid')->count(),
            'invoiceOverDue' => $invoices->where('Condition', '=', 'Over')->count(),
            
            'TotalIncome' => $TotalIncome,

            'Grow' => round(((($TotalIncome - $TotalLastIncome) / $TotalIncome ) * 100), 2),
            'GrowAccepted' => round(((($devices->where('condition', '=', 'Open')->count() - $deviceLastMonth->where('condition', '=', 'Open')->count()) / $devices->where('condition', '=', 'Open')->count() ) * 100), 2),
            'GrowDelivered' => round(((($devices->where('condition', '=', 'Delivered')->count() - $deviceLastMonth->where('condition', '=', 'Delivered')->count()) / $devices->where('condition', '=', 'Delivered')->count() ) * 100), 2),
            'GrowNotDelivered' => round(((($devices->where('condition', '=', 'Refund')->count() - $deviceLastMonth->where('condition', '=', 'Refund')->count()) / $devices->where('condition', '=', 'Refund')->count() ) * 100), 2),

            'timezone' => $invoices
        ];

        return $data;
    }

    public function vue_deviceListing(Request $request){
        
        if(isset($request['Condition']) AND $request['Condition'] != 'viewAll'){
            $devices = registered_devices::with('devices', 'user')
                    ->where('condition', '=', $request['Condition'])
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();
        }else{
            $devices = registered_devices::with('devices', 'user')
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();
        }
        return $devices;
    }
}
