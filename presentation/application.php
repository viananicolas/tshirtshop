<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 17/01/2017
 * Time: 09:44
 */
if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('UTF-8');
}
define('SMARTY_RESOURCE_CHAR_SET', 'UTF-8');
require_once SMARTY_DIR . 'Smarty.class.php';
/* Class that extends Smarty, used to process and display Smarty
files */
class Application extends Smarty
{
// Class constructor
    public function __construct()
    {
// Call Smarty's constructor
        parent::__construct();
// Change the default template directories
        $this->template_dir = TEMPLATE_DIR;
        $this->compile_dir = COMPILE_DIR;
        $this->config_dir = CONFIG_DIR;
        $this->plugins_dir[0] = SMARTY_DIR . 'plugins';
        $this->plugins_dir[1] = PRESENTATION_DIR . 'smarty_plugins';
    }
}
