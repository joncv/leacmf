<?php
/**
 * User: alderzhang
 * Date: 2017/3/21
 * Time: 10:36
 */
require_once dirname(__FILE__) . '/Path.php';

// 开发人员调整以下参数
define('DEFAULT_SDK_APP_ID', '1400045393'); //默认APPID
define('VIDEO_RECORD_SECRET_ID', 'Your_Video_Secret_ID'); //录像Secret ID
define('VIDEO_RECORD_SECRET_KEY', 'Your_Video_Secret_Key'); //录像Secret Key
define('AUTHORIZATION_KEY', serialize([
    '1400045393' => 'YiEpD2DyL0Mwkb5g5cSkBkGS9p0yQM45'
])); //权限密钥表

?>