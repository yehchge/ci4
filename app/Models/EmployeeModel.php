<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'employees';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'email'];
}
