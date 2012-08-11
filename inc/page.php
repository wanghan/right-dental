<?php

define ('MAX_ROWS_PER_PAGE', 10000);

function show_nav_bar($link_file, $rows, $rows_per_page, $page, $param)
{
	///////////////////////////////////////////////
	// check parameters
	
	if ($rows <= 0)	return false;
	if ($rows_per_page <= 0) $rows_per_page = 1;
	if ($rows_per_page > MAX_ROWS_PER_PAGE) $rows_per_page = MAX_ROWS_PER_PAGE;
	
//	if ($rows_per_page == 1)
//		$pages = $rows;
//	else

	$pages = Floor(($rows+$rows_per_page-1)/$rows_per_page);
	
	if ($page <= 0) $page = 1;
	if ($page > $pages) $page = $pages;
	
	///////////////////////////////////////////////
	
	if ($page <= 5)
		$first_page = 1;
	else if ($page > 5 && $page < $pages-5)
		$first_page = $page-5;
	else if ($page > 5 && $page >= $pages-5 && $pages < 11)
		$first_page = 1;	
	else
		$first_page = $pages-10;

//	echo trace("pages", $pages);
//	echo trace("page", $page);
//	echo trace("first_page", $first_page);
	
	$prev_page = $page-1;
	$next_page = $page+1;
	
	if ($page == 1)
	{
		echo "[首页]&nbsp;".
	     	     "[上一页]&nbsp;";
	}
	else
	{
		echo "<a href=$link_file?page=1&$param>[首页]</a>&nbsp;".
	     	     "<a href=$link_file?page=$prev_page&$param>[上一页]</a>&nbsp;";
	}
	     	    
	if ($pages >= 11)
	{
		for ($i = 0; $i < 11; $i ++)
		{
//			echo trace("first_page", $first_page);
			$temp = $first_page+$i;
			if ($temp != $page)
				echo "<a href=$link_file?page=$temp&$param>[$temp]</a>&nbsp;";
			else
				echo "[$temp]&nbsp;";
		}
	}
	else
	{
		for ($i = 0; $i < $pages; $i ++)
		{
			$temp = $first_page+$i;
//			echo trace("first_page", $first_page);
			if ($temp != $page)
				echo "<a href=$link_file?page=$temp&$param>[$temp]</a>&nbsp;";
			else
				echo "[$temp]&nbsp;";
		}		
	}
	
	if ($page == $pages)
	{
		echo "[下一页]&nbsp;".
		     "[末页]";
	}
	else
	{
		echo "<a href=$link_file?page=$next_page&$param>[下一页]</a>&nbsp;".
		     "<a href=$link_file?page=$pages&$param>[末页]</a>";	
	}
}

?>