<?php
//Debug
class Debug {
    static $start_time;
    static $end_time;
    static $info;
    static function set_start_time() {
        self::$start_time = microtime(TRUE);
    }
    static function set_end_time() {
        self::$end_time = microtime(TRUE);
    }
    static function spend_time() {
        return round(self::$end_time-self::$start_time, 4);
    }
    static function add_message($str) {
        if(defined('DEBUG')&&DEBUG==1) {
            self::$info .= $str.'<br/>';
        }
    }
    static function display() {
        echo "<div style='
            position:absolute;
            top:0px;
            right:0px;
            margin: 0px;
            padding: 0px;
            text-align:left;
            font-size:11px;
            border:1px dotted #778855;
            z-index:100;
                '>运行时间：".self::spend_time()."<br/>".
                "调试信息：<br/>"
                .self::$info
                ."</div>";
    }
}