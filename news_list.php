<?php
require ("./inc/head.php");

// define ("PAGE_NUM", 10);
// $page = $_REQUEST['page'];

// //分页列表部分
// $query = "SELECT COUNT(*) FROM newslist where status<>2 ";
// $res = mysql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
// if ($row = mysql_fetch_array($res))
// {
// 	$g_rows = $row[0];
// }

// if ($page <= 0)
// 	$r_start = 0;
// else
// 	$r_start = ($page-1)*PAGE_NUM;

// $query = "SELECT * FROM newslist where status<>2 ORDER BY input_time DESC LIMIT ".$r_start.", ".PAGE_NUM;
// $newslist = getAll($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK HREF="images/style.css" TYPE="text/css" REL="stylesheet">
<title>瑞特口腔-瑞特新闻</title>
<style type="text/css">
<!--
body {
	background-color: #f2f3ed;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-size: 12px;
	color: #5c5650;
}
.STYLE0 {color: #ffa131}
.frame01 {
	border: 1px solid #bbbfb1;
}
.style11 {font-size: 14px}
.style9 {	color: #33CCFF;
	font-weight: bold;
	font-size: 14pt;
}
-->

</style>
</head>

<body align="center">
<div style="margin:0px auto; width:1004">
  <table width="1004" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="220" valign="top"><table id="__01" width="220" height="689" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><img src="images/right_01.jpg" width="220" height="48" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right_02.jpg" width="220" height="83" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right_03.jpg" width="220" height="170" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right_04.jpg" width="220" height="388" alt="" /></td>
        </tr>
      </table></td>
      <td width="784" valign="top">
      <?php require 'header.php';?>
      <?php require 'navigator.php';?>
        <table width="784" border="0" cellspacing="0" cellpadding="0">
          <?php require 'banner.php';?>
          <tr>
            <td valign="top"><br />
              <table width="760" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="10" colspan="2"><table width="760" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="15"><img src="images/bg1_101.jpg" width="15" height="23" /></td>
                        <td bgcolor="#DEE0D5">&nbsp;</td>
                        <td width="15"><img src="images/bg1_102.jpg" width="15" height="23" /></td>
                      </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td width="556" valign="top" bgcolor="#dee0d5"><div style="padding-left:25px; padding-top:0px; padding-right:25px; line-height:14px; padding-bottom:30px">
                    <table width="100" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="50" valign="bottom" class="style9 style11"><img src="images/j.gif" width="125" height="42" /></td>
                      </tr>
                    </table>
                      <table width="507" border="0" cellspacing="0" cellpadding="0">
					  <?php 
						$cnt=(is_array($newslist))?count($newslist):0;
						for($i=0;$i<$cnt;$i++){
					  ?>
                        <tr>
                          <td><img src="images/ll.gif" /></td>
                          <td width="78%" height="30" background="images/bg1.gif"><a href="news.php?id=<?php echo $newslist[$i]['id'];?>"><span class="style1"><?php echo $newslist[$i]['title'];?></span></a></td>
                          <td width="22%" align="right" background="images/bg1.gif" class="style2"><?php echo substr($newslist[$i]['input_time'],0,10);?></td>
                        </tr>
					<?}?>
                    </table>
                      <table width="420" height="40" border="0" align="center" cellpadding="0" cellspacing="0">
                        <TR>
						  <TD height="30" align="center"><?echo show_nav_bar("news_list.php", $g_rows, PAGE_NUM, $page, ""); ?></TD>
						</TR>
                      </table>
                  </div></td>
                  <td width="204" valign="top" bgcolor="#dee0d5"><img src="images/fan2007785.jpg" />
				  <br />
				  </td>
                </tr>
               <tr>
                  <td height="4" colspan="2" bgcolor="#bfc1b4"></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
    </tr>
  </table>
    <?php require 'footer.php';?>
</div>
</body>
</html>