<?php
//公用函数
function C($classname,$values='') {
    if(file_exists(DIR_CLASS.$classname.'.class.php')) {
        include_once($classname.'.class.php');
        $class = new $classname($values);
        return $class;
    }  else {
        //echo $classname.' not exites';
        return FALSE;
    }
}