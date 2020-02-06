<?php
namespace App\Http\Controllers\WxPay;

use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function login() {
        return view('WxPay/login');
    }
}
