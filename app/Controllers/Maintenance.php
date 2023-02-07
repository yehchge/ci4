<?php

/**
 * 維護頁面
 */

namespace App\Controllers;

use App\Controllers\BaseController;

class Maintenance extends BaseController
{
    public function index()
    {
        return view('maintenance');
    }
}
