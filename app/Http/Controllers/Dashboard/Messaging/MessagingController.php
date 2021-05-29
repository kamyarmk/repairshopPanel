<?php

namespace App\Http\Controllers\Dashboard\Messaging;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagingController extends Controller
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

    public function message(Request $request)
    {

        return view('message.chat');
    }

    public function notifications(Request $request)
    {

        return view('message.notifications');
    }

    public function bulkmessage(Request $request)
    {

        return view('message.bulkmessage');
    }
}
