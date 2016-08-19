<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16-8-19
 * Time: 下午12:48
 */
//设置公共模块位置
define('COMMON_PATH', '../Application/Common/');
//设置应用目录位置
define('APP_PATH', '../Application/');
//设置ThinkPHP框架位置
define("THINK_PATH", "../ThinkPHP/");
define("APP_DEBUG", false);
//define('APP_STATUS','config');

// 绑定Admin模块到当前入口文件
define('BIND_MODULE', 'Admin');
//定义BUILD_CONTROLLER_LIST自动生成多个控制器
define('BUILD_CONTROLLER_LIST', 'Index,User,Menu');
//定义BUILD_MODEL_LIST自动生成多个模型类
define('BUILD_MODEL_LIST', 'User,Menu');
require THINK_PATH . 'ThinkPHP.php';