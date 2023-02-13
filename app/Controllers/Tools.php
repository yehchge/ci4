<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Libraries\Report;
use Config\Services;

class Tools extends BaseController
{
    public static $sClassName = '';

    public function __construct()
    {
        // 抓取 class 名稱
        $reflect = new \ReflectionClass($this);
        self::$sClassName = $reflect->getShortName();

        // 下面兩行能在 console 下即時顯示, 不會被 ob_start() 機制包裹住.
        while (\ob_get_level() > 0)
            \ob_end_flush();
    }

    public function index()
    {
        $this->message("See Code ~/app\Controllers\Tools.php");
    }

    public function hello($to = 'World')
    {
        return "Hello {$to}!" . PHP_EOL;
    }

    /**
     * 測試撰寫 Library, 在 Library 內使用 Model
     * @return array 顯示 tags
     */
    public function test(){
        $report = model(Report::class);
        $report->run();
    }

    public function test_password(){
        $encrypter = \Config\Services::encrypter();
        // $this->load->library('encryption');

        // Switch to the MCrypt driver
        // $this->encryption->initialize(array('driver' => 'mcrypt'));

        // Switch back to the OpenSSL driver
        // $this->encryption->initialize(array('driver' => 'openssl'));

        $plain_text = 'This is a plain-text message!';
        $ciphertext = $encrypter->encrypt($plain_text);

        echo "encrypt: $ciphertext".PHP_EOL;

        echo "source text: ";

        // Outputs: This is a plain-text message!
        echo $encrypter->decrypt($ciphertext);
    }

    public function message($string_message) {
        // $now = date('Y-m-d H:i:s', strtotime('+8hour',strtotime(date('Y-m-d H:i:s'))));
        $now = date('Y-m-d H:i:s');
        $memory = self::memory();
        if(isset($_SERVER['SERVER_PROTOCOL'])){
            print "[$now][$memory]$string_message<br />";
        }else{
            print "[$now][$memory]$string_message\n";
        }
    }

    /**
     * 顯示目前分配給 PHP 的記憶體
     * @param  string $unit 顯示單位
     * @return string       目前佔用的記憶體
     * @created 2022/12/23
     */
    protected static function memory(string $unit = 'MB') {
        switch($unit){
            case 'BYTES':
                $memory_usage = function_exists('memory_get_usage') ? number_format( memory_get_usage(), 2 ) . ' Bytes' : 'N/A';
                break;
            case 'KB':
                $memory_usage = function_exists('memory_get_usage') ? number_format( memory_get_usage()/1024, 2 ) . ' KB' : 'N/A';
                break;
            case 'MB':
            default:
                $memory_usage = function_exists('memory_get_usage') ? number_format( memory_get_usage()/(1024*1024), 2 ) . ' MB': 'N/A';
                break;
        }
        return $memory_usage;
    }
}
