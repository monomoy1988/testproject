<?php

// change the following paths if necessary

header('Content-type: text/html');
header('Access-Control-Allow-Origin: http://torkq.com');  //I have also tried the * wildcard and get the same response
//header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

// remove the following lines when in production mode
defined('YII_MODE') or define('YII_MODE',true);
defined('YII_DEBUG') or define('YII_DEBUG',false);
if(YII_DEBUG)
{

    //$yii='../yii/framework/yii.php';
}
else
{

    //$yii='yii/framework/yii.php';
}
if(YII_MODE)
{

    $yii='yii/framework/yii.php';
    $config=dirname(__FILE__).'/protected/config/main-server.php';


}
else
{
    $yii='../yii/framework/yii.php';
    $config=dirname(__FILE__).'/protected/config/main.php';
}
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

Yii::createWebApplication($config)->run();

