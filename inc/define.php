<?php
	define("DBHOST", 'localhost:3306');
	define("DBUSER", 'root');
	define("DBPWD", 'right2009');
	define("DBNAME", 'sq_rightdental');

	define("SDBHOST", 'localhost:3306');
	define("SDBUSER", 'root');
	define("SDBPWD", 'right2009');
	define("SDBNAME", 'sq_rightdental');

	define("TBDBHOST", 'localhost:3306');
	define("TBDBUSER", 'root');
	define("TBDBPWD", 'right2009');
	define("TBDBNAME", 'sq_rightdental');

	define("MAILPAGE",1000);
	define("ADMINMAIL","huyi huyi@sina.com"); 
	define("LOGPASS", "/webdata/product/directadv/data/sysdata/admin/admin.log");

	//cookie 有效时间
	define ("TIME_LIMIT", 3600);
	
	//cookie干扰码长度不超过128，不可使用:
	define ("COOKIE_LEN", "128");
	define ("ADMIN_COOK", "D3J5Y6T4P1&E#ZHIGAO");
	define ("AGENT_COOK", "M9NH^G7T3Y6R5ZHIGAO");
	define ("CLIENT_COOK", "N&Y&DE#HN^G%%JZHIGAO");
	
	//加入pear支持
	$path = $_SERVER['DOCUMENT_ROOT'].'/WEB-INF';
	set_include_path(get_include_path() . PATH_SEPARATOR . $path);
	
?>
