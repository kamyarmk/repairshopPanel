<?php

namespace App\Http\Controllers\Dashboard\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        $users_list = User::with('Department')->where('department_id', '!=', '2')->paginate(20);
        $departmetns_list = Department::all();
        return view('admin.list')->with(
            ['admins' => $users_list,
            'departmets' => $departmetns_list]
        );
    }

    public function add(Request $request)
    {

        return view('admin.add');
    }

    public function edit(Request $request)
    {

        return view('admin.add');
    }

    public function department(Request $request)
    {

        return view('admin.department');
    }
}
