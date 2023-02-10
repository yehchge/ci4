<?php

/**
 * RESTful API 練習
 * @ref https://www.positronx.io/codeigniter-rest-api-tutorial-with-example/
 *      上面更新時程式會出錯, 所以參考以下程式
 *      https://mfikri.com/en/blog/codeigniter4-restful-api
 *      檢查輸入資料參考以下網頁
 *      https://programmingfields.com/how-to-create-restful-api-in-codeigniter-4-step-by-step/
 *      Disabled some csrf ref
 *      https://samsonasik.wordpress.com/2020/04/09/create-restful-api-in-codeigniter-4/
 *      JWT ref
 *      https://www.binaryboxtuts.com/php-tutorials/codeigniter-4-json-web-tokenjwt-authentication/
 */

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\EmployeeModel;

class Employee extends ResourceController
{
    use ResponseTrait;

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    // all user
    public function index()
    {
        $model = new EmployeeModel();
        $data['employees'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    // single user
    public function show($id = null)
    {
        $model = new EmployeeModel();
        $data = $model->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No employee found');
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    // create
    public function create()
    {
        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|min_length[6]|is_unique[employees.email]',
        ]);

        if(!$validation) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $model = new EmployeeModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];
        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Employee created successfully'
            ]
        ];
        return $this->respondCreated($response);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    // update
    public function update($id = null)
    {
        $model = new EmployeeModel();

        $data = $model->find($id);

        if($data){
            // use postman, data set: body.raw[JSON], method: put
            // {
            //      "name": "Tony Stark",
            //      "email": "tony@mcu.com"
            // }


            $validation = $this->validate([
                'name' => 'required',
                'email' => 'required|valid_email',
            ]);

            if(!$validation){
                return $this->failValidationErrors($this->validator->getErrors());
            }

            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email')
            ];

            // $json = $this->request->getJSON();
            // if($json){
            //     $data = [
            //         'name' => $this->request->getRawInput('name'),
            //         'email' => $this->request->getRawInput('email'),
            //     ];
            // }else{
            //     $input = $this->request->getRawInput();
            //     $data = [
            //         'name' => $input['name'],
            //         'email' => $input['email'],
            //     ];
            // }

            $model->update($id, $data);
            $response = [
                'status' => 200,
                'error' => null,
                'message' => [
                    'success' => 'Employee updated successfully'
                ]
            ];
            return $this->respond($response);
        }
        return $this->failNotFound('Sorry! no Employee found');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    // delete
    public function delete($id = null)
    {
        $model = new EmployeeModel();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'message' => [
                    'success' => 'Employee successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No employee found by id: '.$id);
        }
    }

}
