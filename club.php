<?php
require ("./inc/head.php");

// session_start();

// if(isset($_SESSION["card_info"])){

// 	header( "location: logon.php" );
// 	exit;
// }
// $act = $_REQUEST['act'];
// $login_id = $_REQUEST['login_id'];
// $login_pwd = $_REQUEST['login_pwd'];

// if($act=="login"){

// 	$query="select * from card where username='$login_id'";
// 	$result = mysql_query($query,$g_mysql) or syswarn("myswl err", mysql_error(), $query);
// 	$row = mysql_fetch_array($result);
// 	if($row['username']=='') {
// 		alert_location("卡号不正确!","club.php");
// 	} else {
// 		$query="select * from card where username='$login_id' and password='$login_pwd' and status=1";
// 		$result = mysql_query($query,$g_mysql);
// 		$row = mysql_fetch_array($result);
		
// 		//密码错误
// 		if($row['username']=='') {
// 			alert_location("密码不正确!","club.php");
// 		} else {
				
// 			//登录成功
// 			$userinfo["ip"] = $_SERVER["REMOTE_ADDR"];
// 			$userinfo["id"] = $row[id];
// 			$userinfo["user_name"] = $row["username"];
			
// 			logininfo_update($userinfo);

// 			$_SESSION["card_info"] = $row;
						
// 			alert_location("成功登陆!","logon.php");
// 		}
// 	}

// }

// $query = "SELECT * FROM huodong where status<>2 ORDER BY input_time DESC ";
// $huodonglist = getAll($query);

// $query = "SELECT * FROM huiyuaninfo where id=1";
// $fuwulist = getAll($query);

// $query = "SELECT * FROM huiyuaninfo where id=2";
// $tiaojianlist = getAll($query);

// function logininfo_update($userinfo) {
	
// 	global $g_mysql;
// 	global $g_smysql;
	
// 	$update_user_sql = "update card set last_time=now(), 
// 	                                    login_num = login_num + 1 
// 	                    where id = " . $userinfo["id"];
// 	mysql_query($update_user_sql,$g_mysql) or syswarn("错误","数据库更新错误!",mysql_error().":$update_user_sql");
	
// }


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
.STYLE12 {color: #33CCFF}
-->

</style>
<script>

function checkData()
{
	if (document.form1.login_id.value == "")
	{
		alert("卡号不能为空，请填写!");
		document.form1.login_id.focus();
		return false;
	}
	
	if (document.form1.login_pwd.value == "")
	{
		alert("密码不能为空，请填写!");
		document.form1.login_pwd.focus();
		return false;
	}

	document.form1.act.value="login";
	document.form1.submit();
	//return true;
}

</script>
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
          <td><img src="images/right05_03.jpg" width="220" height="170" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right05_04.jpg" width="220" height="388" alt="" /></td>
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
            <td valign="top"><br />
              <table width="760" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="537" valign="top"><table width="519" height="225" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td valign="top" background="images/bg1.jpg">
                        <div style="padding-left:5px; padding-top:20px"><span class="style4"><a href="#" class="style1"><img src="images/h.jpg" width="140" height="36" border="0" /></a></span><br />
                          <div align="center"> <img src="images/df.gif" width="400" height="42" /></div>
                          <table width="360" border="0" align="center" cellpadding="0" cellspacing="0">
                            <?php echo $fuwulist[0]['info'];?>
                          </table>
                              <div>
                                <div align="right"></div>
                              </div>
                      </div></td>
                    </tr>
                  </table>
                    <br />
                    <table width="519" height="157" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td valign="top" background="images/bg2.jpg"><table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="156" height="40" class="style8 STYLE12">成为会员所需条件</td>
                            </tr>
                            <tr>
                              <td height="47"><table width="360" border="0" align="center" cellpadding="0" cellspacing="0">
                                 <?php echo $tiaojianlist[0]['info'];?>
                              </table></td>
                            </tr>
                            
                        </table></td>
                      </tr>
                    </table>
                  </td>
                  <td width="223" valign="top" bgcolor="#dee0d5"><br />
                    <table width="200" height="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eff0e8" class="frame02">
                    <form action="" method="post" name="form1" id="form1"  class="frame02">
					<input type=hidden name="act" value="">
                      <tr>
                        <td height="42" colspan="2" align="center" class="style2" ><img src="images/hy.jpg" width="120" height="36" /></td>
                      </tr>
                      <tr>
                        <td width="64" align="center" class="style2"><div align="right">卡号：</div></td>
                        <td width="120" height="30" align="left"><input name="login_id" type="text" id="login_id" size="12" /></td>
                      </tr>
                      <tr>
                        <td width="64" align="center" class="style2"><div align="right">密码：</div></td>
                        <td height="30" align="left"><input name="login_pwd" type="password" id="login_pwd" size="12" /></td>
                      </tr>
                      <tr>
                        <td height="43" colspan="2" align="center" class="style2"><a href="#" onclick="checkData()"><img src="images/button01.jpg" width="42" border="0" /></a></td>
                      </tr>
                    </form>
                  </table>
                    <br />
                    <br />
                    <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
                      
                        <tr>
                          <td height="42" colspan="2" class="style2" ><img src="images/hyhd.jpg" width="120" height="36" /></td>
                        </tr>
<?php
$cnt=(is_array($huodonglist))?count($huodonglist):0;
for($j=0;$j<$cnt;$j++){
?>
                        <tr>
                          <td width="17" align="center" class="style2"><img src="images/ll.gif" /></td>
                          <td width="183" height="30" align="left"><a href="huodong.php?id=<?echo $huodonglist[$j][id]?>"><span class="style1"><?echo $huodonglist[$j][title];?></span></a></td>
                        </tr>
<?php
}	
?>

                     
                    </table></td>
                </tr>
                <tr>
                  <td height="12" colspan="2"></td>
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
