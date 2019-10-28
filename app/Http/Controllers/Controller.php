<?php

namespace App\Http\Controllers;

use Captcha;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * get a captcha
     * @return response
     */
    public function MakeCaptcha()
    {
        return response(["state" => "success", "data" => Captcha::create("default", true)], 200);
    }
}
