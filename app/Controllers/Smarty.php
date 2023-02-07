<?php

/**
 * 套用 Smarty 練習
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class Smarty extends BaseController
{
    public function index()
    {
        $time = date('Y-m-d H:i:s');
        $smarty = Services::smarty();
        $smarty->setTemplateDir(APPPATH.'Views');
        $smarty->setLeftDelimiter("{");
        $smarty->setRightDelimiter("}");
        $smarty->assign('username', 'Laravel');
        $smarty->assign('time', $time);

        return $smarty->display('template.tpl');

        // return \CI4Smarty\view('template');
    }
}
