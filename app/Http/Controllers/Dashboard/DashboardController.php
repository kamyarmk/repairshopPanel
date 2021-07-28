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

    public function vue(Request $request){
        $TotalIncome = 0;
        $TotalLastIncome = 0;
        $timezone = $request['week'];
        $tilldate = '1';

        if($request['week'] == '1'){
            $tilldate = Carbon::now()->getTimestamp();
        }elseif($request['week']== '4'){
            $tilldate = Carbon::now()->getTimestamp();
        }else{
            $tilldate = Carbon::now()->subWeek($request['week'] / 2)->getTimestamp();
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
            'acceptedDevices' => $devices->count(),
            'deliveredDevices' => $devices->where('condition', '=', 'Delivered')->count(),
            'notDeliveredDevices' => $devices->where('condition', '=', 'Refund')->count(),

            'invoiceWaiting' => $invoices->where('Condition', '=', 'Waiting')->count(),
            'invoiceReadToPay' => $invoices->where('Condition', '=', 'Ready')->count(),
            'invoicePaid' => $invoices->where('Condition', '=', 'Paid')->count(),
            'invoiceOverDue' => $invoices->where('Condition', '=', 'Over')->count(),
            
            'TotalIncome' => $TotalIncome,

            'Grow' => round(
                (
                    (
                        $TotalIncome == 0 ? 0 : ($TotalIncome - $TotalLastIncome) / $TotalIncome
                    ) * 100
                ), 2
            ),
            'GrowAccepted' => round(
                (
                    (
                        $devices->where('condition', '=', 'Open')->count() == 0 ? 0 : ($devices->where('condition', '=', 'Open')->count() - $deviceLastMonth->where('condition', '=', 'Open')->count()) / $devices->where('condition', '=', 'Open')->count() 
                    ) * 100
                ), 2
            ),
            'GrowDelivered' => round(
                (
                    (
                        $devices->where('condition', '=', 'Delivered')->count() == 0 ? 0 : ($devices->where('condition', '=', 'Delivered')->count() - $deviceLastMonth->where('condition', '=', 'Delivered')->count()) / $devices->where('condition', '=', 'Delivered')->count() 
                    ) * 100
                ), 2
            ),
            'GrowNotDelivered' => round(
                (
                    (
                        $devices->where('condition', '=', 'Refund')->count() == 0 ? 0 :($devices->where('condition', '=', 'Refund')->count() - $deviceLastMonth->where('condition', '=', 'Refund')->count()) / $devices->where('condition', '=', 'Refund')->count() 
                    ) * 100
                ), 2
            ),

            'timezone' => $invoices
        ];

        return $data;
    }

    public function vue_chart(Request $request){
        
        $TotalIncome = 0;
        $TotalLastIncome = 0;

        if($request['week'] == '1'){
            $tilldate = Carbon::now()->getTimestamp();
        }elseif($request['week']== '4'){
            $tilldate = 3;
        }else{
            $tilldate = Carbon::now()->subWeek($request['week'] / 2)->getTimestamp();
        }

        $invoices = invoices::where('created_at', '>', Carbon::now()->subWeek($request['week'])->getTimestamp())
                            ->where('created_at', '<', Carbon::now()->subWeek($tilldate)->getTimestamp())
                            ->orderBy('created_at', 'desc')
                            ->get();
        $invoicesLastMonths = invoices::where('created_at', '<', Carbon::now()->subWeek($request['week'] + $request['week'])->getTimestamp())
                                        ->where('created_at', '>', Carbon::now()->subWeek($request['week'])->getTimestamp())
                                        ->orderBy('created_at', 'desc')
                                        ->get();

        $devices = registered_devices::with('devices', 'user')->where('created_at', '>', Carbon::now()->subWeek($request['week'])->getTimestamp())
                                        ->where('created_at', '<', Carbon::now()->subWeek($tilldate)->getTimestamp())
                                        ->get();
        $deviceLastMonth = registered_devices::with('devices', 'user')->
                                                where('created_at', '<', Carbon::now()->subWeek($request['week'] + $request['week'])->getTimestamp())
                                                ->where('created_at', '>', Carbon::now()->subWeek($request['week'])->getTimestamp())
                                                ->get();
        
        foreach($invoices as $invoice){
            $TotalIncome += $invoice->Price;
        }
        foreach($invoicesLastMonths as $invoicesLastMonth){
            $TotalLastIncome += $invoicesLastMonth->Price;
        }
            
        $data = [
            'monFPipe' => registered_devices::where('condition', '=', 'Open')
                                    ->where('created_at', '>', strval(Carbon::parse("last monday")->getTimestamp()) )
                                    ->where('created_at', '<', strval(Carbon::parse("last monday")->getTimestamp() + 82800) )
                                    ->count(),
            'tueFPipe' => registered_devices::where('condition', '=', 'Open')
                                    ->where('created_at', '>', strval(Carbon::parse("last tuesday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last tuesday")->getTimestamp() + 82800))
                                    ->count(),
            'wedFPipe' => registered_devices::where('condition', '=', 'Open')
                                    ->where('created_at', '>', strval(Carbon::parse("last wednesday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last wednesday")->getTimestamp() + 82800))
                                    ->count(),
            'thuFPipe' => registered_devices::where('condition', '=', 'Open')
                                    ->where('created_at', '>', strval(Carbon::parse("last thursday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last thursday")->getTimestamp() + 82800))
                                    ->count(),
            'friFPipe' => registered_devices::where('condition', '=', 'Open')
                                    ->where('created_at', '>', strval(Carbon::parse("last friday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last friday")->getTimestamp() + 82800))
                                    ->count(),
            'satFPipe' => registered_devices::where('condition', '=', 'Open')
                                    ->where('created_at', '>', strval(Carbon::parse("last saturday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last saturday")->getTimestamp() + 82800))
                                    ->count(),
            'sunFPipe' => registered_devices::where('condition', '=', 'Open')
                                    ->where('created_at', '>', strval(Carbon::parse("last sunday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last sunday")->getTimestamp() + 82800))
                                    ->count(),



            'monSPipe' => invoices::where('Condition', '=', 'Paid')
                                    ->where('created_at', '>', strval(Carbon::parse("last monday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last monday")->getTimestamp() + 82800))
                                    ->count(),
            'tueSPipe' => invoices::where('Condition', '=', 'Paid')
                                    ->where('created_at', '>', strval(Carbon::parse("last tuesday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last tuesday")->getTimestamp() + 82800))
                                    ->count(),
            'wedSPipe' => invoices::where('Condition', '=', 'Paid')
                                    ->where('created_at', '>', strval(Carbon::parse("last wednesday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last wednesday")->getTimestamp() + 82800))
                                    ->count(),
            'thuSPipe' => invoices::where('Condition', '=', 'Paid')
                                    ->where('created_at', '>', strval(Carbon::parse("last thursday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last thursday")->getTimestamp() + 82800))
                                    ->count(),
            'friSPipe' => invoices::where('Condition', '=', 'Paid')
                                    ->where('created_at', '>', strval(Carbon::parse("last friday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last friday")->getTimestamp() + 82800))
                                    ->count(),
            'satSPipe' => invoices::where('Condition', '=', 'Paid')
                                    ->where('created_at', '>', strval(Carbon::parse("last saturday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last saturday")->getTimestamp() + 82800))
                                    ->count(),
            'sunSPipe' => invoices::where('Condition', '=', 'Paid')
                                    ->where('created_at', '>', strval(Carbon::parse("last sunday")->getTimestamp()))
                                    ->where('created_at', '<', strval(Carbon::parse("last sunday")->getTimestamp() + 82800))
                                    ->count(),

            'totalIncome' => $TotalIncome,

            'incomeGrow' => round(
                (
                    (
                        $TotalIncome == 0 ? 0 : ($TotalIncome - $TotalLastIncome) / $TotalIncome
                    ) * 100
                ), 2
            ),
            'totalDevices' => registered_devices::where('condition', '=', 'Open')
                                                ->where('created_at', '>', carbon::now()->subWeek(1)->getTimestamp())
                                                ->count(),
            'deviceGrow' => round(
                (
                    (
                        $devices->where('condition', '=', 'Open')->count() == 0 ? 0 : ($devices->where('condition', '=', 'Open')->count() - $deviceLastMonth->where('condition', '=', 'Open')->count()) / $devices->where('condition', '=', 'Open')->count() 
                    ) * 100
                ), 2
            )
        ];
        
        return $data;
    }

    public function vue_deviceListing(Request $request){
        
        if(isset($request['Condition']) AND $request['Condition'] != 'viewAll'){
            $devices = registered_devices::with('devices', 'user')
                    ->where('condition', '=', $request['Condition'])
                    ->where('created_at', '>', Carbon::now()->subWeek($request['week'])->getTimestamp())
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();
        }else{
            $devices = registered_devices::with('devices', 'user')
                    ->where('created_at', '>', Carbon::now()->subWeek($request['week'])->getTimestamp())
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();
        }
        return $devices;
    }

    public function vue_search(Request $request){

        $devices = registered_devices::with('devices', 'user')
                    ->where('IMEI', 'LIKE', '%' . $request['keyword'] . '%')
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();
        $users = User::with('registered_devices')
                    ->where('user_name', 'LIKE', '%' . $request['keyword'] . '%')
                    ->orWhere('first_name', 'LIKE', '%' . $request['keyword'] . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $request['keyword'] . '%')
                    ->orWhere('phone_number', 'LIKE', '%' . $request['keyword'] . '%')
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();
        $invoices = invoices::with('registered_devices', 'user')
                    ->where('id', 'LIKE', '%' . $request['keyword'] . '%')
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
                    ->get();

        $data = [
            'devices' => $devices,
            'users' => $users,
            'invoices' => $invoices,
        ];

        return $data;
    }
}
