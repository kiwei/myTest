<?php
	//开启开发模式
	define("APP_DEBUG", true);

	//定义应用目录

    //define('APP_PATH','./Admin/');

    //制作一个输出调试函数
    function show_bug($msg){
    	echo "<pre style='color:red'>";
    	var_dump($msg);
    	echo "</pre>";
    }
	
	//定义css,img,js常量
	//前台
	define("SITE_URL","http://localhost:8011/516/");
	define("CSS_URL", SITE_URL."shop/public/Home/css/");
	define("IMG_URL", SITE_URL."shop/public/Home/img/");
	define("JS_URL", SITE_URL."shop/public/Home/js/");
	//后台
	
	define("ADMIN_CSS_URL", SITE_URL."shop/public/Admin/css/");
	define("ADMIN_IMG_URL", SITE_URL."shop/public/Admin/img/");
	define("ADMIN_JS_URL", SITE_URL."shop/public/Admin/js/");
	
	//定义上传路径
	define("IMG_UPLOAD",SITE_URL."shop/public/");
	//引入框架核心程序
	include "../Thinkphp/Thinkphp.php";

