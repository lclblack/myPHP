<?php
//单一入口文件-其他入口文件可直接复制本文件
define('PUBLIC_NAME', 'myPHP');//框架目录(不可更改)
define('APP_NAME', rtrim(ltrim($_SERVER['SCRIPT_NAME'], '/'),'.php'));//项目目录index(不可更改)
define('DEBUG', 1);//开启Debug;1开启0关闭
require PUBLIC_NAME.'/main.php';//主入口文件(不可更改)