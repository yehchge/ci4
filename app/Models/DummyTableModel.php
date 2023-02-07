<?php

/**
 * Pagination Tutorial
 * @ref https://www.sourcecodester.com/tutorial/php/15412/codeigniter-4-pagination-tutorial
 * @cli php spark db:create dummy_db
 *      php spark migrate
 *      php spark db:seed DummyTableModelSeeder
 */

namespace App\Models;

use CodeIgniter\Model;

class DummyTableModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dummy_table';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name','contact','email', 'address'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
