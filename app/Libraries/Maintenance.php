<?php

/**
 * Event 網站維護時使用
 * @created 2022/12/23
 */

namespace App\Libraries;

/**
 * Check whether the site is offline or not.
 */
class Maintenance {

    public function __construct(){
        log_message('debug','Accessing maintenance hook!');
    }

    public function offline_check(){
        $maintenance_mode = getenv('maintenance_mode');

        if($maintenance_mode==1){
            echo view('./maintenance');
            exit;
        }
    }
}
