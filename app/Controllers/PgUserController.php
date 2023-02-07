<?php

/**
 * 測試 CodeIgniter4 分頁功能
 * @ref https://www.positronx.io/codeigniter-pagination-tutorial/
 * @created 2023/01/03
 */

namespace App\Controllers;
use App\Models\PgUsersModel;
use CodeIgniter\Controller;

class PgUserController extends Controller
{
    public function getAll()
    {
        $userModel = new PgUsersModel();

        $data = [
            'users' => $userModel->paginate(6),
            'pager' => $userModel->pager
        ];

        return view('user_view', $data);
    }
}
