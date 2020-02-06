<?php
namespace App\Http\Controllers\WxPay;

use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function main() {
        return view('WxPay/main');
    }
}
