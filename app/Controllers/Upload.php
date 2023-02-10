<?php

/**
 * 檔案上傳測試
 * @created 2023/02/10
 */

namespace App\Controllers;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

class Upload extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('upload_form', ['errors' => []]);
    }

    public function upload()
    {
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp,image/svg+xml]'
                    . '|max_size[userfile,4096]' // 4096 KB
                    . '|max_dims[userfile,1920,1080]'
                    ,
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('upload_form', $data);
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $img->store();

            $data = ['uploaded_fileinfo' => new File($filepath)];

            return view('upload_success', $data);
        }
        $data = ['errors' => 'The file has already been moved.'];

        return view('upload_form', $data);
    }
}
