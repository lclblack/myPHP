<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
//主入口文件
header("Content-Type:text/html;charset=utf-8");  //设置系统的输出字符为utf-8
date_default_timezone_set("PRC");    		 //设置时区（中国）
//定义物理绝对路径_DIR_
define('DIR_ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']).'/');  //www目录/
define('DIR_MYPHP', DIR_ROOT.ltrim(PUBLIC_NAME, '/').'/');                  //www目录/myPHP/
define('DIR_MYPHP_CLASS', DIR_MYPHP.'class/');                              //www目录/myPHP/class/
define('DIR_MYPHP_LIBS', DIR_MYPHP.'libs/');                                //www目录/myPHP/libs/
define('DIR_CLASS', DIR_ROOT.'class/');                                     //www目录/class/
define('DIR_APP', DIR_ROOT.ltrim(APP_NAME, '/').'/');                       //www目录/项目文件夹/
define('DIR_PUBLIC', DIR_APP.'public/');                                   //www目录/项目文件夹/public/
define('DIR_CSS', DIR_PUBLIC.'css/');
define('DIR_JS', DIR_PUBLIC.'js/');
define('DIR_IMG', DIR_PUBLIC.'img/');
define('DIR_MEDIA', DIR_PUBLIC.'media/');
define('DIR_UPLOAD', DIR_PUBLIC.'upload/');
define('DIR_RUNTIME', DIR_APP.'runtime/');                                 //www目录/项目文件夹/runtime/
define('DIR_RUNTIME_CACHE', DIR_RUNTIME.'cache/');
define('DIR_RUNTIME_COMPILE', DIR_RUNTIME.'compile/');
define('DIR_RUNTIME_CONFIG', DIR_RUNTIME.'config/');
define('DIR_APP_TPL', DIR_APP.'TPL/');
define('DIR_APP_MYSMARTY', DIR_APP.'mySmarty/');
//定义http绝对路径_PATH_
//define('PATH_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/');                   //http://服务器:端口号/
define('PATH_ROOT', '/');
define('PATH_APP', PATH_ROOT.APP_NAME.'.php/');                             //http://服务器:端口号/项目文件.php/
define('PATH_PUBLIC', PATH_ROOT.APP_NAME.'/public/');                                 //http://服务器:端口号/项目文件夹/public/
define('PATH_CSS', PATH_PUBLIC.'css/');
define('PATH_JS', PATH_PUBLIC.'js/');
define('PATH_IMG', PATH_PUBLIC.'img/');
define('PATH_MEDIA', PATH_PUBLIC.'media/');
define('PATH_UPLOAD', PATH_PUBLIC.'upload/');
//包含公用函数
include DIR_MYPHP.'functions.php';
//设置包含目录（类所在的全部目录）,  PATH_SEPARATOR 分隔符号 Linux(:) Windows(;)
$include_path=get_include_path();               //原基目录
$include_path.=PATH_SEPARATOR.DIR_MYPHP_CLASS;  //框架中公用类所在的目录
$include_path.=PATH_SEPARATOR.DIR_MYPHP_LIBS;   //模板Smarty所在的目录
$include_path.=PATH_SEPARATOR.DIR_CLASS;        //公用类所在目录
$include_path.=PATH_SEPARATOR.DIR_APP_MYSMARTY; //当前应用的控制类所在的目录
$include_path.=PATH_SEPARATOR.DIR_UPLOAD;       //所有文件目录
set_include_path($include_path);
unset($include_path);
//自动加载类
spl_autoload_register("myAutoload"); 
function myAutoload($className){
    if(strpos($className, 'marty_')) {
        return;
    }
    if(!include_once($className.'.class.php')){
        //echo '<h1>file:'.$className.'.class.php not find!!!</h1>';
    }  else {
        //echo '<h1>file:'.$className.'.class.php include</h1>';
    }
}
session_start();
Structure::init();
Prourl::parseUrl();
//包含配置文件
include DIR_ROOT.'config.php';
//Debug
if(DEBUG) {
    Debug::set_start_time();
}
//mySmarty路径
$path_mySmarty = DIR_APP_MYSMARTY.$_GET['m'].'.class.php';
//mySmarty创建
if(!file_exists($path_mySmarty)) {
    echo 'class:'.$_GET['m'].'<br/>';
    echo 'function:'.$_GET['a'].'<br/>';
    echo '<h1>'.$path_mySmarty.':not exists</h1>';
} else {
    //echo 'class:'.$_GET['m'].'<br/>';
    //echo 'function:'.$_GET['a'].'<br/>';
    //echo '<h1>'.$path_mySmarty.': exists</h1>';
    $classname = $_GET['m'];
    $mySmarty = new $classname();
    $mySmarty->run();
}
if(DEBUG) {
    Debug::set_end_time();
    //Debug::add_message('this is a test');
    Debug::display();
}