<?php

/**
 * CodeIgniter 4 Smarty
 * @created 2022/12/15
 */

namespace App\ThirdParty;

use Smarty;

class CI4Smarty extends Smarty
{
    protected $TemplateDir    = APPPATH . 'Views' . DIRECTORY_SEPARATOR . 'tpl';
    protected $CompileDir     = WRITEPATH . 'smarty' . DIRECTORY_SEPARATOR . 'tpl_c';
    protected $LeftDelimiter  = "<{";
    protected $RightDelimiter = "}>";
    protected $CacheDir       = WRITEPATH . 'smarty' . DIRECTORY_SEPARATOR . 'cache';
    protected $ConfigDir      = WRITEPATH . 'smarty' . DIRECTORY_SEPARATOR . 'configs';

    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir( $_ENV['CI4Smarty.TemplateDir']    ?? $this->TemplateDir )
            ->setCompileDir  ( $_ENV['CI4Smarty.CompileDir']     ?? $this->CompileDir )
            ->setCacheDir    ( $_ENV['CI4Smarty.CacheDir']       ?? $this->CacheDir )
            ->setConfigDir   ( $_ENV['CI4Smarty.ConfigDir']      ?? $this->ConfigDir )
            ->setDebugging   ( boolval($_ENV['CI4Smarty.Debug']  ?? false) );

        $this->setLeftDelimiter ( $_ENV['CI4Smarty.LeftDelimiter']  ??  $this->LeftDelimiter );
        $this->setRightDelimiter(  $_ENV['CI4Smarty.RightDelimiter'] ?? $this->RightDelimiter );
    }
}
