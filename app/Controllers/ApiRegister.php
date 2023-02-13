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

class ApiRegister extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $rules = [
            // 'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[api_users.email]'],
            'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[api_users.email]'],
            'password' => ['rules' => 'required|min_length[8]|max_length[255]'],
            'confirm_password' => ['label' => 'confirm password', 'rules' => 'matches[password]']
        ];

        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'confirm_password' => $this->request->getVar('confirm_password')
        ];

        $model = new ApiUserModel();

        // if($this->validate($rules)){
        if($this->validateData($data, $rules, [], $model->DBGroup)){
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            $model->save($data);

            return $this->respond(['message' => 'registerd Successfully'], 200);
        }else{
            $response = [
                'errors' => $this->validator->getErrors(),
                'message' => 'Invalid Inputs'
            ];
            return $this->fail($response, 409);
        }
    }
}
