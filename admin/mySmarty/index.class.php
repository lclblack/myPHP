<?php
class index extends MySmarty {
    public function __construct() {
        parent::__construct();
    }
    public function init() {
        parent::init();
        if(!isset($_SESSION["login"])) {
            $_SESSION["login"] = LOGIN_NULL;
        }
        if($_SESSION["login"]!=LOGIN_OK && $_GET["a"]!="login") {
            $this->login_get();
            exit;
        }
    }
    public function index() {
        $this->display("index.tpl");
    }
    public function login() {
        $error_mess = "登录";
        if($_SESSION["login"]==LOGIN_ERROR) {
            $error_mess = "用户名密码错误";
        }
        $_SESSION["login"] = LOGIN_NULL;
        $this->assign("error_mess", $error_mess);
        $this->display("login.tpl");
    }
    public function login_get() {
        switch ($_SESSION["login"]) {
            case LOGIN_NULL:
                $user = $_POST["username"];
                $passwd = $_POST["password"];
                if($this->login_catch($user, $passwd)){
                    $_SESSION['login'] = LOGIN_OK;
                    $_SESSION['username'] = $user;
                    header('Location:'.PATH_APP.'index/index');
                } else {
                    $_SESSION['login'] = LOGIN_ERROR;
                    header('Location:'.PATH_APP.'index/login');
                }
                break;
            case LOGIN_ERROR:
                header('Location:'.PATH_APP.'index/login');
                break;
            case LOGIN_OK:
                header('Location:'.PATH_APP.'index/index');
                break;
        }
    }
    public function login_out() {
        
    }

    public function login_catch($username,$password) {
        $c = new my_user();
        $r = $c->query_select("user='$username' and passwd='$password'");
        if($r->num_rows) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}