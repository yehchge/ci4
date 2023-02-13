<?php

/**
 * 測試 Report 類別
 * @created 2022/11/04
 */

namespace App\Libraries;

use APP\Model\NewsModel;

class Report {

    /**
     * 在自己寫的 Library 中使用 model
     * @usage 在 controller 中,
     *        1. $this->load->library('report');
     *        2. $this->report->run();
     * @return [type] [description]
     */
    public function run(){
        // $CI =& get_instance();
        $model = model(NewsModel::class);
        $dd = $model->getNews();
        echo "<pre>";print_r($dd);echo "</pre>";
    }
}
