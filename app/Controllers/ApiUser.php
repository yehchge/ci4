<?php

/**
 * JWT API Login
 * @ref https://www.binaryboxtuts.com/php-tutorials/codeigniter-4-json-web-tokenjwt-authentication/
 *      https://medium.com/geekculture/codeigniter-4-tutorial-restful-api-jwt-authentication-d5963d797ec4
 * @created 2022/12/22
 */

namespace App\Controllers;

use App\Controllers\BaseController;

use CodeIgniter\API\ResponseTrait;
use App\Models\ApiUserModel;

class ApiUser extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $users = new ApiUserModel;
        return $this->respond(['users' => $users->findAll()], 200);
    }
}
