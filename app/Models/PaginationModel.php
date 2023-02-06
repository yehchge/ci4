<?php

namespace App\Models;
use CodeIgniter\Model;

class PaginationModel extends Model {
    protected $table            = 'pg_users';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['name', 'email', 'city'];
    protected $useTimestamps = false;
    protected $useAutoIncrement = false;
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}
