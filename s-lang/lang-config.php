<?php
require_once '../s-main-scripts/security/main_secure.php';
//setcookie('lang',_cookie_value,strtotime("+30 day"),"/",null,null,true);
if (!isset($_COOKIE['lang']))
{
    s_setcookie('lang','az');
}
elseif (isset($_GET['lang']) && s_getcookie('lang')!==$_GET['lang']){

    if ($_GET['lang']==='az' || $_GET['lang']==='en'){
        if ($_GET['lang']==='az'){
            s_setcookie('lang','az');
        }
        elseif ($_GET['lang']==='en'){
            s_setcookie('lang','en');
        }
    }
}
if (isset($_SERVER['HTTP_REFERER'])){
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
}
header('Location:../');
exit();