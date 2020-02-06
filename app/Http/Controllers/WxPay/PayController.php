<?php
namespace App\Http\Controllers\WxPay;

use Illuminate\Routing\Controller as BaseController;

class PayController extends BaseController
{
    public function main() {
        return view('WxPay/pay');
    }
}
