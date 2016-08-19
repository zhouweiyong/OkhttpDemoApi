<?php
return array(
    //'配置项'=>'配置值'
    'LOAD_EXT_CONFIG'=>'user,db',//扩展配置文件
    // 设置禁止访问的模块列表
    'MODULE_DENY_LIST'      =>  array('Common','Runtime','Api'),
    //设置允许访问列表
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),
    //设置默认模块
    'DEFAULT_MODULE'       =>    'Home',
      //设置为true的时候表示请求的URL地址不区分大小写
    'URL_CASE_INSENSITIVE'  =>  true,

);