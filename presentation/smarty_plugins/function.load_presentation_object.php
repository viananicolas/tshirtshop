<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 17/01/2017
 * Time: 11:56
 */
function smarty_function_load_presentation_object($params, $smarty){
    require_once PRESENTATION_DIR . $params['filename'] . '.php';
    $className=str_replace(' ','',ucfirst(str_replace('_',' ', $params['filename'])));
    $obj = new $className();
    if(method_exists($obj,'init'))
        $obj->init();
    $smarty->assign($params['assign'],$obj);
}