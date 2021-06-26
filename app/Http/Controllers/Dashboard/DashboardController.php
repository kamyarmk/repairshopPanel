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
}
