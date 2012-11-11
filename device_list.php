<?php
require ("./inc/head.php");

// define ("PAGE_NUM", 6);
// $page = $_REQUEST['page'];
// $id = $_REQUEST['id'];
// $groupid = $_REQUEST['groupid'];

// if($id==""){
// 	$sql = "SELECT * FROM shebeilist where status<>2 and groupid=$groupid ORDER BY input_time DESC limit 0,1";
// }else{
// 	$sql = "SELECT * FROM shebeilist where status<>2 and id=$id";
// }
// $shebeidetail = getAll($sql);

// //分页列表部分
// $query = "SELECT COUNT(*) FROM shebeilist where status<>2 and groupid=$groupid";
// $res = mysql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
// if ($row = mysql_fetch_array($res))
// {
// 	$g_rows = $row[0];
// }

// if ($page <= 0)
// 	$r_start = 0;
// else
// 	$r_start = ($page-1)*PAGE_NUM;

// $query = "SELECT * FROM shebeilist where status<>2 and groupid=$groupid ORDER BY input_time DESC ";
// //echo $query;
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
      <td width="784" valign="top"><table width="784" height="48" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="530">&nbsp;</td>
          <td width="254"><table width="300" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="15"><img src="images/icon01.gif" width="9" height="10" /></td>
              <td><a href="index.php">回到首页</a></td>
              <td width="13"><img src="images/icon04.gif" width="3" height="11" /></td>
              <td width="15"><img src="images/icon02.gif" width="9" height="10" /></td>
              <td><a href="contact.php">联系我们</a></td>
              <td width="13"><img src="images/icon04.gif" width="3" height="11" /></td>
              <td width="15"><img src="images/icon03.gif" width="11" height="9" /></td>
              <td><a href="map.php">网站地图</a></td>
            </tr>
          </table></td>
        </tr>
        </table>
      <table width="784" height="83" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="784" height="83">
            <param name="movie" value="images/new.swf" />
            <param name="quality" value="high" />
            <embed src="images/new.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="784" height="83"></embed>
          </object></td>
        </tr>
        </table>
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
$cnt=(is_array($shebeilist))?count($shebeilist):0;
for($i=0;$i<$cnt;$i++){
?>
<a href="device_list.php?id=<?php echo $shebeilist[$i]['id'];?>&groupid=<?php echo $groupid;?>"><img src="<?php echo "./admin/uploadfile/".$shebeilist[$i]['picture'];?>" width="100" height="67" border="0" /></a>
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
                            <img src="<?php echo "./admin/uploadfile/".$shebeidetail[0]['picture'];?>" width="300" height="201" /></td>
                        <td align="left" valign="top"><br />
                            <table width="381" border="0" cellspacing="0" cellpadding="4">
                              <tr>
                                <td width="1" height="100" rowspan="3" align="center" valign="middle">&nbsp;</td>
                                <td align="left" valign="middle" class="style1 style8"><?php echo $shebeidetail[0]['title'];?></td>
                              </tr>
                              <tr>
                                <td align="left" valign="middle"><?php echo $shebeidetail[0][content];?></td>
                              </tr>
                              <tr>
                                <td align="left" valign="middle"><div>
                                    <div align="right"><a href="device_a.php"><img src="images/back01.gif" width="37" height="9" border="0" /></a></div>
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
