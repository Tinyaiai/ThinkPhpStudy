


<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

/**
 * 绑定Home模块到当前入口文件(3.2.1以上版本写法)
 * old：http://serverName/index.php/Home/Index/index
 * new：http://serverName/home.php/Index/index
 */
//define('BIND_MODULE','Home');


/**
 * 绑定Index控制器到当前入口文件(3.2.1以上版本写法)
 * old：http://serverName/index.php/Home/Index/index
 * new：http://serverName/home.php/index
 */
//define('BIND_CONTROLLER','Index');

// 定义应用目录
define('APP_PATH','./Backend/');

// 定义缓存目录
define('RUNTIME_PATH','./Runtime/');

// 定义模板文件默认目录
define("TMPL_PATH","./Tpl/");

// 定义oss的url
define("OSS_URL","");

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单

