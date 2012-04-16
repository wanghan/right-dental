<?php
require ("./inc/head.php");

define ("PAGE_NUM", 6);
$page = $_REQUEST['page'];
$id = $_REQUEST['id'];
$groupid = $_REQUEST['groupid'];

if($id==""){
	$sql = "SELECT * FROM pinzhilist where status<>2 and groupid=$groupid ORDER BY input_time DESC limit 0,1";
}else{
	$sql = "SELECT * FROM pinzhilist where status<>2 and id=$id";
}
$pinzhidetail = getAll($sql);

//分页列表部分
$query = "SELECT COUNT(*) FROM pinzhilist where status<>2 and groupid=$groupid";
$res = mysql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
if ($row = mysql_fetch_array($res))
{
	$g_rows = $row[0];
}

if ($page <= 0)
	$r_start = 0;
else
	$r_start = ($page-1)*PAGE_NUM;

$query = "SELECT * FROM pinzhilist where status<>2 and groupid=$groupid ORDER BY input_time DESC ";
//echo $query;
$pinzhilist = getAll($query);

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
.style8 {font-size: 14px;
	font-weight: bold;
}
-->

</style>



</head>

<body align="center">
<div style="margin:0px auto; width:1004">
<form method="post" name=form1 action="">
<input type="hidden" name="groupid" value="<?echo $groupid;?>">
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
				  

				    <div align="center">
				    <div id=demo style="overflow:hidden;width:660px;border:2px solid #e0e0e0;padding:4px;" onmouseover="stopscroll();" 
onmouseout="doscroll()">
<div id="demo1" style="white-space:nowrap;padding:0;">
<?php 
$cnt=(is_array($pinzhilist))?count($pinzhilist):0;
for($i=0;$i<$cnt;$i++){
?>
<a href="device_list.php?id=<?php echo $pinzhilist[$i]['id'];?>&groupid=<?php echo $groupid;?>"><img src="<?php echo "./admin/uploadfile/".$pinzhilist[$i]['picture'];?>" width="100" height="67" border="0" /></a>
<?
}
?>
</div>
</div></div>
<script>
var t=demo.scrollWidth
//demo1.innerHTML+=demo1.innerHTML
function doMarquee()
{
demo.scrollLeft=demo.scrollLeft<demo.scrollWidth-demo.offsetWidth?demo.scrollLeft+1:t-demo.offsetWidth
}
function doscroll()
{
  sc=setInterval(doMarquee,20)
}
function stopscroll()
{
  clearInterval(sc)
}
doscroll()
</script>
				  

				  
                    <table width="740" border="0" align="center" cellpadding="2" cellspacing="0">
                      <tr>
                        <td colspan="2">&nbsp;&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="2" colspan="2" bgcolor="#bfc1b4"></td>
                      </tr>
                      <tr>
                        <td width="340" align="center" valign="top"><br />
                            <img src="<?php echo "./admin/uploadfile/".$pinzhidetail[0]['picture'];?>" width="300" height="201" /></td>
                        <td align="left" valign="top"><br />
                            <table width="381" border="0" cellspacing="0" cellpadding="4">
                              <tr>
                                <td width="1" height="100" rowspan="3" align="center" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle" class="style1 style8"><?php echo $pinzhidetail[0]['title'];?></td>
                              </tr>
                              <tr>
                                <td align="left" valign="middle"><?php echo $pinzhidetail[0][content];?></td>
                              </tr>
                              <tr>
                                <td align="left" valign="middle"><div>
                                    <div align="right"><a href="device_b.php"><img src="images/back01.gif" width="37" height="9" border="0" /></a></div>
                                </div></td>
                              </tr>
                            </table>
                          <br /></td>
                      </tr>
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
</form>
</div>
</body>
</html>
