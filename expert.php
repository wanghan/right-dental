<?php
require ("./inc/head.php");

define ("PAGE_NUM", 8);
if(isset($_REQUEST["page"]) && !empty($_REQUEST["page"])){
	$page = $_REQUEST['page'];
	
	//分页列表部分
	$query = "SELECT COUNT(*) FROM tuanduilist where status<>2 ";
	$res = mysql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
	if ($row = mysql_fetch_array($res))
	{
		$g_rows = $row[0];
	}
	
	if ($page <= 0)
		$r_start = 0;
	else
		$r_start = ($page-1)*PAGE_NUM;
	
	$query = "SELECT * FROM tuanduilist where status<>2 ORDER BY input_time DESC LIMIT ".$r_start.", ".PAGE_NUM;
	$tuanduilist = getAll($query);
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK HREF="images/style.css" TYPE="text/css" REL="stylesheet">
<title>瑞特口腔-专家团队</title>
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
.style10 {	color: #3399FF;
	font-size: 14px;
}
.style8 {	font-size: 14px;
	font-weight: bold;
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
          <td><img src="images/right04_03.jpg" width="220" height="170" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right04_04.jpg" width="220" height="388" alt="" /></td>
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
                  <td height="10"><table width="760" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="15"><img src="images/bg1_101.jpg" width="15" height="23" /></td>
                        <td bgcolor="#DEE0D5">&nbsp;</td>
                        <td width="15"><img src="images/bg1_102.jpg" width="15" height="23" /></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td valign="top" bgcolor="#dee0d5"><table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
                    
                    <tr>
                      <td colspan="2">&nbsp;&nbsp;<img src="images/sdf.gif" width="200" height="42" /></td>
                    </tr>
                    <tr>
                      <td height="4" colspan="2"></td>
                    </tr>
                    <tr>
					 <?php 
						$cnt=(is_array($tuanduilist))?count($tuanduilist):0;
						$num=0;
						for($i=0;$i<$cnt;$i++){
							$num++;
							if($num%2==1 and $num!=1){

								echo "</tr><tr>";
							}
					 ?>
                      <td width="50%" align="right"><table width="300" border="0" cellspacing="0" cellpadding="4">
                        <tr>
                          <td width="102" height="100" rowspan="3" align="center" valign="middle"><table width="100" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="100" height="100" align="center" background="images/1.gif"><img src="<?php echo "./admin/uploadfile/".$tuanduilist[$i]['picture_small'];?>" width="80" height="80" /></td>
                                </tr>
                            </table></td>
                              <td width="227" align="left" valign="middle" class="style1 style8"><?php echo $tuanduilist[$i]['title'];?></td>
                          </tr>
                        <tr>
                          <td align="left" valign="middle">
                          <?php echo $tuanduilist[$i]['jianjie'];?>
                          </td>
                          </tr>
                        <tr>
                          <td align="left" valign="middle"><span class="style2"><a href="online.php?tuanduiid=<?php echo $tuanduilist[$i]['id'];?>"><img src="images/b.gif" border="0"/></a><a href="expert_detail.php?id=<?php echo $tuanduilist[$i]['id'];?>"><img src="images/c.gif" width="80" height="22" border="0" /></a></span></td>
                          </tr>
                        </table></td>
						<?php }?>
                        
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td colspan="2"><table width="420" height="40" border="0" align="center" cellpadding="0" cellspacing="0">
                         <TR>
						  <TD height="30" align="center"><?echo show_nav_bar("expert.php", $g_rows, PAGE_NUM, $page, ""); ?></TD>
						</TR>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="4" bgcolor="#bfc1b4"></td>
                </tr>
            </table>
            <br /></td>
          </tr>
        </table></td>
    </tr>
  </table>
  <?php require 'footer.php';?>
  </div>
</body>
</html>