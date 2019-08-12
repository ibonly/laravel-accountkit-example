<?php

namespace Payslip\Http\Controllers;

use AccountKit;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function otpLogin(Request $request)
    {
        $otpLogin = AccountKit::accountKitData($request->code);

        return view('home', compact('otpLogin'));
    }

    public function logout()
    {
        return redirect()->route('welcome');
    }
}
