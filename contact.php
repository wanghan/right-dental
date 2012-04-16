<?php
require ("./inc/head.php");

$act=$_REQUEST[act];

if($act=='yuyue')
{
	
	$name=$_REQUEST[name];
	$sex=$_REQUEST[sex];	
	$email=$_REQUEST[email];
	$tel=$_REQUEST[tel];
	$year=$_REQUEST[year];
	$month=$_REQUEST[month];
	$day=$_REQUEST[day];
	$time=$_REQUEST['time'];
	$yuyuetime = $year."-".$month."-".$day." ".$time;
	$tuanduiid = $_REQUEST['tuanduiid'];
	if($tuanduiid==""){
		$tuanduiid="0";
	}

	$fuwuid=$_REQUEST[fuwuid];
	//var_dump($fuwuid);
	
	$fuwuidstr = implode(",", $fuwuid);
	
	$fuwuidstr = "," . $fuwuidstr . ",";
	//echo $fuwuidstr;
	//exit;

	$notice=$_REQUEST[notice];

	$cardid = "0";

	$yuyueday = date("Ymd",time()+60*60*24*2);
	$theday = $year.$month.$day;
	if($theday < $yuyueday){

		alert_location("对不起！只能预约两天后的时间!","contact.php");

	}else{

		$query="insert into yuyue set ";
		$query .= "name = '" .mysql_escape_string($name)."', ";
		$query .= "sex = '" .mysql_escape_string($sex)."', ";
		$query .= "email = '" .mysql_escape_string($email)."', ";
		$query .= "tel = '" .mysql_escape_string($tel)."', ";
		$query .= "yuyue_time = '" .mysql_escape_string($yuyuetime)."', ";
		$query .= "notice = '" .mysql_escape_string($notice)."', ";
		$query .= "fuwuid = '" .mysql_escape_string($fuwuidstr)."', ";
		$query .= "tuanduiid = '" .mysql_escape_string($tuanduiid)."', ";
		$query .= "cardid = '" .mysql_escape_string($cardid)."', ";
		$query .= "status = '" .mysql_escape_string("1")."', ";
		$query .= "input_time = now() ";


		$result = mysql_query($query,$g_mysql) or syswarn("对不起","系统错误，请联系管理员.",mysql_error().":$query");
		alert_location("预约成功!","contact.php");

	}



}


//$query = "SELECT * FROM fuwulist where status<>2 ORDER BY input_time DESC";
$query = "SELECT * FROM fuwuzhonglei where status<>2 ORDER BY input_time DESC";
$fuwulist = getAll($query);

$sql = "select * from tuanduilist where status<>2 ";
$tuanduilist = getAll($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK HREF="images/style.css" TYPE="text/css" REL="stylesheet">
<title>瑞特口腔-联系我们</title>
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
.style12 {color: #33CCFF; font-weight: bold; font-size: 14px; }
-->

</style>
<script>

function checkData()
{

	if (document.form1.name.value == "")
	{
			alert("姓名不能为空，请填写!");
			document.form1.name.focus();
			return false;
	}
	if (document.form1.sex.value == "")
	{
			alert("头衔不能为空，请填写!");
			document.form1.sex.focus();
			return false;
	}
	if (document.form1.email.value == "")
	{
			alert("email不能为空，请填写!");
			document.form1.email.focus();
			return false;
	}
	if (document.form1.tel.value == "")
	{
			alert("电话不能为空，请填写!");
			document.form1.tel.focus();
			return false;
	}

	var have = false;
	for (var i = 0; i < document.getElementsByName("fuwuid[]").length; i++) {
		
		if(document.getElementsByName("fuwuid[]")[i].checked){
			have = true;
		}

	}
	if (!have)
	{
			alert("望预约的服务不能为空，请选择!");
			//document.form1.fuwuid.focus();
			return false;
	}

	document.form1.act.value="yuyue";
	document.form1.submit();
	//return true;
}

</script>
</head>

<body align="center">
<div style="margin:0px auto; width:1004">
<form action="" method="post" name="form1" id="form1" >
<input type=hidden name="act" value="">
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
                  <td valign="top" bgcolor="#dee0d5"><table width="760"  border="0" cellspacing="0" cellpadding="0" style="height:100% ">
                    <tr>
                      <td align="left" valign="top" bgcolor="#DEE0D5"><table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="333"><div style="padding-left:12px; padding-top:10px; padding-right:5px; line-height:14px; padding-bottom:20px"><a href="#"><img alt=""  src="images/con_1.jpg" width="104" height="125" border="0" align="left" style="margin-right:27px " /></a>
                                <div style="padding-left:0px; padding-top:3px"><span class="style5"><strong>联系我们</strong></span><span class="style4"><strong><br />
                                  朝阳区东三环中路9号富尔大厦二层206室 <br />
                                  邮编：</strong></span>100020</div>
                            <div style="padding-left:0px; padding-top:3px"><span class="style4">电话：+86 10 8591 1789/1790<br />
                              传真：+86 10 8591 0158<br />
</span></div>
                          </div></td>
                          <td width="427"><div align="center"><img src="images/map.jpg" width="402" height="238" /></div></td>
                        </tr>
                      </table>
                        <br />
                        <table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" class="box_right20 box_left15"><table cellspacing="0" cellpadding="2" width="100%" border="0">
                                  <tbody>
                                    <tr>
                                      <td valign="top" 
                    height="30"><img src="images/yy.jpg" width="125" height="42" /></td>
                                    </tr>
                                  </tbody>
                                </table>
                                  <table cellspacing="0" cellpadding="2" width="100%" border="0">
                                    <tbody>
										<tr>
										  <td width="70">姓&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
										  <td class="STYLE0" width="5">*</td>
										  <td><label>
											<input id="name" size="12" name="name" />
											</label></td>
										</tr>
										<tr>
										  <td>头&nbsp;&nbsp;&nbsp;&nbsp;衔：</td>
										  <td class="STYLE0">*</td>
										  <td><label>
											<input class="box_nostyle" type="radio" value="1" 
								name="sex" checked/>
											先 生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input 
								class="box_nostyle" type="radio" value="2" name="sex" />
											女 
											士</label></td>
										</tr>
										<tr>
										  <td>电子邮箱：</td>
										  <td class="STYLE0">*</td>
										  <td><label>
											<input id="email" size="28" name="email" />
										  </label></td>
										</tr>
										<tr>
										  <td>联系电话：</td>
										  <td class="STYLE0" width="3%">*</td>
										  <td><label>
											<input id="tel" size="20" name="tel" />
										  </label></td>
										</tr>
										<tr>
										  <td>指定医师：</td>
										  <td width="3%"></td>
										  <td><label>
										    <select name="tuanduiid" size="1">
											  <option value="">选择指定医师</option>
										<?php
										$cnt=(is_array($tuanduilist))?count($tuanduilist):0;
										for($j=0;$j<$cnt;$j++){
										?>
											  <option value="<?echo $tuanduilist[$j][id];?>" <? if($tuanduiid==$tuanduilist[$j][id]){echo "selected";};?>><?echo $tuanduilist[$j][title];?></option>
										<?php
										}
										?>
											</select></td>
										</tr>
									 </tbody>
                                  </table>
                                <br />
                                  <table cellspacing="0" cellpadding="2" width="100%" border="0">
                                    <tbody>
                                      <tr>
                                  <td valign="top" width="70">预约时间：</td>
                                  <td class="STYLE0" valign="top" width="5">*</td>
                                  <td valign="top"><!--
                      	<label><img src="/cn/_images/contact/calendar.jpg" width="291" height="179" /></label>
                      	-->
                                    <select name="year">
									  <option value="2009">2009年</option>
									  <option value="2010">2010年</option>
									  <option value="2011">2011年</option>
									  <option value="2012">2012年</option>
									  <option value="2013">2013年</option>
									  <option value="2014">2014年</option>
									  <option value="2015">2015年</option>
                                    </select>
                                    <select name="month">
                                      <option value="01">1月</option>
									  <option value="02">2月</option>
									  <option value="03">3月</option>
									  <option value="04">4月</option>
									  <option value="05">5月</option>
									  <option value="06">6月</option>
									  <option value="07">7月</option>
									  <option value="08">8月</option>
									  <option value="09">9月</option>
									  <option value="10">10月</option>
									  <option value="11">11月</option>
									  <option value="12">12月</option>
                                    </select>
                                    <select name="day">
                                      <option value="01">1日</option>
									  <option value="02">2日</option>
									  <option value="03">3日</option>
									  <option value="04">4日</option>
									  <option value="05">5日</option>
									  <option value="06">6日</option>
									  <option value="07">7日</option>
									  <option value="08">8日</option>
									  <option value="09">9日</option>
									  <option value="10">10日</option>
									  <option value="11">11日</option>
									  <option value="12">12日</option>
									  <option value="13">13日</option>
									  <option value="14">14日</option>
									  <option value="15">15日</option>
									  <option value="16">16日</option>
									  <option value="17">17日</option>
									  <option value="18">18日</option>
									  <option value="19">19日</option>
									  <option value="20">20日</option>
									  <option value="21">21日</option>
									  <option value="22">22日</option>
									  <option value="23">23日</option>
									  <option value="24">24日</option>
									  <option value="25">25日</option>
									  <option value="26">26日</option>
									  <option value="27">27日</option>
									  <option value="28">28日</option>
									  <option value="29">29日</option>
									  <option value="30">30日</option>
									  <option value="31">31日</option>
                                    </select>
									<select name="time">
                                      <option value="09:00:00">09：00</option>
                                      <option value="10:00:00">10：00</option>
                                      <option value="11:00:00">11：00</option>
                                      <option value="12:00:00">12：00</option>
                                      <option value="13:00:00">13：00</option>
                                      <option value="14:00:00">14：00</option>
                                      <option value="15:00:00">15：00</option>
                                      <option value="16:00:00">16：00</option>
                                      <option value="17:00:00">17：00</option>
                                      <option value="18:00:00">18：00</option>
                                      <option value="19:00:00">19：00</option>
                                      <option value="20:00:00">20：00</option>
                                    </select></td>
                                </tr>
                                    </tbody>
                                  </table>
                                <div align="center"><span class="STYLE1">诊所门诊时间 周一至周日  上午09:00-12:00，下午13:00-18:00</span> </div>
                                <table cellspacing="0" cellpadding="2" width="100%" border="0">
                                    <tbody>
                                      <tr>
                                        <td><br />
                                          您希望预约的服务：<span 
                  class="STYLE0">*</span></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                <table cellspacing="0" cellpadding="2" width="100%" border="0">
                                    <tbody>
										<tr>
							  <?php 
								$cnt=(is_array($fuwulist))?count($fuwulist):0;
								$num=0;
								for($i=0;$i<$cnt;$i++){
									$num++;
									if($num%3==1 and $num!=1){

										echo "</tr><tr>";
									}
							  ?>
										  <td><label>
											<input class="box_nostyle" id="fuwuid[]" 
								type="checkbox" value="<?php echo $fuwulist[$i]['id'];?>" name="fuwuid[]" />
											&nbsp;<?php echo $fuwulist[$i]['title'];?></label></td>
							  <?php
								}	  
							  ?>
										</tr>
                                    </tbody>
                                  </table>
                                <br />
                                  <table cellspacing="0" cellpadding="2" width="100%" border="0">
                                    <tbody>
                                      <tr>
                                        <td valign="top" width="20%"><label>详细说明：</label></td>
                                        <td valign="top"><label>
                                          <textarea name="notice" rows="5" cols="40"></textarea>
                                        </label></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                <br />
                                  <table cellspacing="0" cellpadding="2" width="100%" border="0">
                                    <tbody>
                                      <tr>
                                        <td width="20%"><label></label>
                                            <label></label></td>
                                        <td><label>
                                          <input type="button" value="提 交" name="button1" onClick="checkData()"/>
                                          &nbsp;&nbsp;&nbsp; </label>
                                            <label>
                                            <input type="reset" value="重 置" name="Submit2" />
                                          </label></td>
                                      </tr>
                                    </tbody>
                                </table></td>
                              <td bgcolor="#CCCCCC" valign="top" width="1"></td>
                              <td width="20" valign="top">&nbsp;</td>
                              <td valign="top" width="180"><p><br />
                                无论您身在何处，只需在线填写预约申请，我们专业的客户服务会及时与您联系，为您提供尊贵服务。</p>
                                  <p>声明： <span 
              class="STYLE0">*</span>&nbsp;号必填项。</p></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                    <tr align="left" valign="top">
                      <td height="100%" bgcolor="#BFC1B4"></td>
                    </tr>
                  </table></td>
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
