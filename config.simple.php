<?php
//载入数据库配置
require 'class/Medoo.php';
use Medoo\Medoo;
$db = new medoo([
    'database_type' => 'sqlite',
    'database_file' => 'data/onenav.db3'
]);

//用户名
define('USER','{username}');
// 加密后的密码
define('ENCRYPTED_PASSWORD','{encrypted_password}');
//邮箱，用于后台Gravatar头像显示
define('EMAIL','{email}');
//主题风格,0.9.18废弃了，请通过后台设置
define('TEMPLATE','default');

//站点信息
$site_setting = [];
//站点标题
$site_setting['title']          =   '白鹿io导航';
//文字Logo
$site_setting['logo']          =   '白鹿io';
//站点关键词
$site_setting['keywords']       =   '白鹿io,白鹿导航,书签管理,个人导航,白鹿io导航';
//站点描述
$site_setting['description']    =   '白鹿io - 个人书签导航管理工具，一站式链接管理与快速访问。';

//这两项不要修改
$site_setting['user']           =   USER;
$site_setting['password']       =   ENCRYPTED_PASSWORD;