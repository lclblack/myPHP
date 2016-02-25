<?php
//创建项目文件结构
define('D0', DIR_ROOT.APP_NAME);
define('D1', DIR_APP."TPL");
define('D2', DIR_APP."mySmarty");
define('D3', DIR_APP."public");
define('D4', DIR_APP."public/css");
define('D5', DIR_APP."public/js");
define('D6', DIR_APP."public/img");
define('D7', DIR_APP."public/media");
define('D8', DIR_APP."public/upload");
define('D9', DIR_APP."runtime");
class Structure {
    static $message = '';
    static $dirs = [
        D0,
        D1,
        D2,
        D3,
        D4,
        D5,
        D6,
        D7,
        D8,
        D9
    ];
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
    
}