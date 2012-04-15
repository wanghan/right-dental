<?php
	$g_mysql;
	$g_smysql;
	$g_tbmysql;
	
	function db_connect()
	{
		global $g_mysql;
		$aa = DBHOST;
		
		$g_mysql = mysql_connect(DBHOST, DBUSER, DBPWD, true);
		if (!$g_mysql) {
			die('Could not connect: ' . mysql_error());
		}
		
		//echo $g_mysql;return;
		mysql_select_db(DBNAME, $g_mysql);
		mysql_query("set names 'utf8'",$g_mysql);
	}

	function dbs_connect()
	{
		global $g_smysql;

		$g_smysql = mysql_connect(SDBHOST,SDBUSER,SDBPWD, true);
		mysql_select_db(SDBNAME, $g_smysql);
		mysql_query("set names 'utf8'",$g_smysql);
	}

	function dbtb_connect()
	{
		global $g_tbmysql;

		$g_tbmysql = mysql_connect(TBDBHOST,TBDBUSER,TBDBPWD, true);
		mysql_select_db(TBDBNAME, $g_tbmysql);
		mysql_query("set names 'utf8'",$g_tbmysql);
	}
	
	db_connect();
	dbs_connect();
	dbtb_connect()
?>
