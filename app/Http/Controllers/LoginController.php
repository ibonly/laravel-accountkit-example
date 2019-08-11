<?php

namespace Payslip\Http\Controllers;

use AccountKit;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function otpLogin(Request $request)
    {
        $otpLogin = AccountKit::accountKitData($request->code);
        dd($otpLogin);
    }
}
