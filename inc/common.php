<?php

/*
 * return sql results to a array
 */
function getAll($sql) {
	global $g_mysql;
	$records_arr=array();
	$select_result = mysql_query ($sql, $g_mysql)or syswarn("错误","数据库查询错误",mysql_error().":$sql");
	if(mysql_num_rows($select_result) > 0){
		while ($row = mysql_fetch_array($select_result, MYSQL_ASSOC)) {
			$records_arr[] = $row;
		}
	}
	return $records_arr;
}

?>
