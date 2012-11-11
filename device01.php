<?php
require ("./inc/head.php");

// define ("PAGE_NUM", 6);
// $page = $_REQUEST['page'];

// //分页列表部分
// $query = "SELECT COUNT(*) FROM shebeilist where status<>2 ";
// $res = mysql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
// if ($row = mysql_fetch_array($res))
// {
// 	$g_rows = $row[0];
// }

// if ($page <= 0)
// 	$r_start = 0;
// else
// 	$r_start = ($page-1)*PAGE_NUM;

// $query = "SELECT * FROM shebeilist where status<>2 ORDER BY input_time DESC LIMIT ".$r_start.", ".PAGE_NUM;
// $shebeilist = getAll($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK HREF="images/style.css" TYPE="text/css" REL="stylesheet">
<title>瑞特口腔-环境设施</title>
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
-->

</style>
</head>

<body align="center">
<div style="margin:0px auto; width:1004">
  <table width="1004" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="220" valign="top"><table id="Table_01" width="220" height="689" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><img src="images/right_01.jpg" width="220" height="48" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right_02.jpg" width="220" height="83" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right03_03.jpg" width="220" height="170" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right03_04.jpg" width="220" height="388" alt="" /></td>
        </tr>
      </table></td>
      <td width="784" valign="top"> 
      <?php require 'header.php';?>
      <?php require 'navigator.php';?>
        <table width="784" border="0" cellspacing="0" cellpadding="0">
          <?php require 'banner.php';?>
          <tr>
            <td height="522" valign="top"><br />
              <table width="760" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="10"><table width="760" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="15"><img src="images/bg1_101.jpg" width="15" height="23" /></td>
                        <td bgcolor="#DEE0D5">&nbsp;</td>
                        <td width="15"><img src="images/bg1_102.jpg" width="15" height="23" /></td>
                      </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td valign="top" bgcolor="#dee0d5">
				    <table width="720" border="0" align="center" cellpadding="4" cellspacing="0">
                     <tr>
					 <?php 
						$cnt=(is_array($shebeilist))?count($shebeilist):0;
						$num=0;
						for($i=0;$i<$cnt;$i++){
							$num++;
							if($num%2==1 and $num!=1){

								echo " </tr>
								       </table>
								       <table width=\"720\" border=\"0\" align=\"center\" cellpadding=\"4\" cellspacing=\"0\">
								       <tr>";
							}
					 ?>
                      <td width="360" height="128" valign="top">
					    <table width="340" border="0" cellspacing="0" cellpadding="3">
                          <tr>
                            <td><div align="center"><img src="<?php echo "./admin/uploadfile/".$shebeilist[$i]['picture'];?>" width="300" height="201" /></div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="device02.php?id=<?php echo $shebeilist[$i]['id'];?>"><?php echo $shebeilist[$i]['title'];?></a></div></td>
                          </tr>
                       </table>
                      </td>
					 <?}?>
                      </tr>
                    </table>
                    <table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="156" height="18">&nbsp;</td>
                        </tr>
                        <TR>
						  <TD height="30" align="center"><?echo show_nav_bar("device01.php", $g_rows, PAGE_NUM, $page, ""); ?></TD>
						</TR>
                    </table></td>
                  </tr>
                <tr>
                  <td height="23">&nbsp;</td>
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
