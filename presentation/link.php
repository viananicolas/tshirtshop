<?php

/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 18/01/2017
 * Time: 10:13
 */
class Link
{
    public static function Build($link){
        $base='http://' . getenv('SERVER_NAME');
        if(defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT!='80'){
            $base .= ':' . HTTP_SERVER_PORT;
        }
        $link = $base . VIRTUAL_LOCATION . $link;
        return htmlspecialchars($link, ENT_QUOTES);
    }
    public static function ToDepartment($departmentId){
        $link = 'index.php?DepartmentId=' . $departmentId;
        return self::Build($link);
    }
}