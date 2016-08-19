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
//是否开启调试模式
define("APP_DEBUG", true);
//如果读取不到Common目录的配置文件或者函数文件，则设置此项可以解决此问题
//define('APP_STATUS','config');

// 绑定Home模块到当前入口文件,绑定的模块访问的时候可以自动生成
//define('BIND_MODULE', 'Home');
// 绑定Index控制器到当前入口文件
//define('BIND_CONTROLLER', 'Index');
//定义BUILD_CONTROLLER_LIST自动生成多个控制器
define('BUILD_CONTROLLER_LIST', 'Index,User,Menu');
//定义BUILD_MODEL_LIST自动生成多个模型类
define('BUILD_MODEL_LIST', 'User,Menu');
require THINK_PATH . 'ThinkPHP.php';

//请求的url格式：http://serverName/index.php/Home/Index/index
//绑定的模块不需要输入模块名,比如入口绑定了Home模块,访问Home模块下的控制器:http://serverName/index.php/Index/index
//入口文件简写：http://serverName/index.php，默认访问的绑定的模块和绑定的控制器
//ThinkPHP支持的URL模式有四种：普通模式、PATHINFO、REWRITE和兼容模式，可以设置URL_MODEL参数改变URL模式。在config中配置。

