<?php
//mySmarty内文件必须继承该文件
class MySmarty extends Smarty {
    public function __construct() {
        parent::__construct();
        $this->setCacheDir(DIR_RUNTIME_CACHE);
        $this->setCompileDir(DIR_RUNTIME_COMPILE);
        $this->setConfigDir(DIR_RUNTIME_CONFIG);
        $this->setTemplateDir(DIR_APP_TPL);
        $this->left_delimiter = '<{';
        $this->right_delimiter = '}>';
        $this->assign('path_root', PATH_ROOT);
        $this->assign('path_app', PATH_APP);
        $this->assign('path_css', PATH_CSS);
        $this->assign('path_js', PATH_JS);
        $this->assign('path_img', PATH_IMG);
        $this->assign('path_media', PATH_MEDIA);
        $this->assign('path_upload', PATH_UPLOAD);
    }
    public function init() {
        
    }
    public function run() {
        $this->init();
        $function = $_GET['a'];
        if(method_exists($this, $function)) {
            $this->$function();
        } else {
            echo '<h1>function:'.$function.' not exists!<h1>';
        }
    }
}