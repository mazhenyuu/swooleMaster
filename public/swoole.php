<?php
/**
 * Created by PhpStorm.
 * User: mzy
 * Date: 2018/7/21
 * Time: 14:19
 */
class Swoole
{
    public function __construct()
    {
        define('VSWOOLE_ROOT',__DIR__.'/../');
        //载入框架初始化文件
        if(php_sapi_name() === 'cli'){
            require VSWOOLE_ROOT.'libraby/Init.php';
            //运行框架
            \vSwoole\library\Init::cmd();
        }else{
            die("Swoole Server must run in the CLI mode");
        }
    }

}

$server = new Swoole();