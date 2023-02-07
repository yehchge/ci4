<?php

/**
 * 測試 CodeIgniter4 分頁功能
 * @ref https://www.positronx.io/codeigniter-pagination-tutorial/
 * @created 2023/01/03
 */

namespace App\Models;

use CodeIgniter\Model;

class PgUsersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pgusers';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'email'];
}
