<?php
//创建项目文件结构
class Structure {
    static $message = '';
    
    static function init() {
        $lock = DIR_APP.APP_NAME.".lock";
        if(!file_exists($lock)) {
            if(!file_exists(DIR_ROOT."class")) {
                mkdir(DIR_ROOT."class");
                self::$message .= "create dir: ".DIR_ROOT."class/<br/>";
            }
            self::mkdir(self::$dirs);
            if(!file_exists(DIR_ROOT."config.php")) {
                self::touch(DIR_ROOT."config.php", self::$file_config);
            }
            self::touch(DIR_APP_MYSMARTY."index.class.php", self::$file_index);
            self::touch($lock, "this is fileLock,dont delete!");
            echo self::$message;
        }
    }
    static function mkdir($dirs) {
        foreach ($dirs as $dir) {
            if(!file_exists($dir)) {
                mkdir($dir);
                self::$message .= "create dir: ".$dir."/<br/>";
            }
        }
    }
    static function touch($filename,$str) {
        if(!file_exists($filename)) {
            file_put_contents($filename, $str);
            self::$message .= "create file: ".$filename."<br/>";
        }
    }
    static $file_config = <<<str
<?php
//配置文件
define('HOST', '127.0.0.1');//数据库连接
define('USER', 'username');
define('PASSWD', 'password');
define('DATABASE', 'mydb');
str;
    static $file_index = <<<str
<?php
class index extends MySmarty {
    public function __construct() {
        parent::__construct();
    }
    public function init() {
        parent::init();
    }
    public function index() {
        echo "hello world!";
    }
}
str;
    static $dirs = array(
        DIR_ROOT.APP_NAME,
        DIR_APP."TPL",
        DIR_APP."mySmarty",
        DIR_APP."public",
        DIR_APP."public/css",
        DIR_APP."public/js",
        DIR_APP."public/img",
        DIR_APP."public/media",
        DIR_APP."public/upload",
        DIR_APP."runtime",
    );
}