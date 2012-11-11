<?php
require ("./inc/head.php");

// $act=$_REQUEST[act];

// if($act=='add')
// {
// 	$cardnum=$_REQUEST[cardnum];
// 	$name=$_REQUEST[name];
// 	$sex=$_REQUEST[sex];	
// 	$email=$_REQUEST[email];
// 	$tel=$_REQUEST[tel];
// 	$year=$_REQUEST[year];
// 	$month=$_REQUEST[month];
// 	$day=$_REQUEST[day];
// 	$birthday = $year."-".$month."-".$day;
// 	$hunyin = $_REQUEST['hunyin'];
// 	$add=$_REQUEST[add];
// 	$xueli=$_REQUEST[xueli];
// 	$school=$_REQUEST[school];
// 	$zhuanye=$_REQUEST[zhuanye];
// 	$job=$_REQUEST[job];
// 	$info=$_REQUEST[info];

// 	$cardid = "0";

// 	$query="insert into jianli set ";
// 	$query .= "cardnum = '" .mysql_escape_string($cardnum)."', ";
// 	$query .= "name = '" .mysql_escape_string($name)."', ";
// 	$query .= "sex = '" .mysql_escape_string($sex)."', ";
// 	$query .= "birthday = '" .mysql_escape_string($birthday)."', ";
// 	$query .= "hunyin = '" .mysql_escape_string($hunyin)."', ";
// 	$query .= "`add` = '" .mysql_escape_string($add)."', ";
// 	$query .= "xueli = '" .mysql_escape_string($xueli)."', ";
// 	$query .= "school = '" .mysql_escape_string($school)."', ";
// 	$query .= "email = '" .mysql_escape_string($email)."', ";
// 	$query .= "tel = '" .mysql_escape_string($tel)."', ";
// 	$query .= "zhuanye = '" .mysql_escape_string($zhuanye)."', ";
// 	$query .= "job = '" .mysql_escape_string($job)."', ";
// 	$query .= "info = '" .mysql_escape_string($info)."', ";
// 	$query .= "status = '" .mysql_escape_string("1")."', ";
// 	$query .= "input_time = now() ";

// //echo $query;
// //exit;
// 	$result = mysql_query($query,$g_mysql) or syswarn("对不起","系统错误，请联系管理员.",mysql_error().":$query");
// 	alert_location("简历提交成功!","hr.php");

// }


// $query = "SELECT * FROM job where status<>2 ORDER BY input_time DESC limit 0,6";
// $joblist = getAll($query);


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
.style10 {	color: #3399FF;
	font-size: 14px;
}
.STYLE12 {	COLOR: #064ea3
}
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
	if (document.form1.cardnum.value == "")
	{
			alert("身份证号码不能为空，请填写!");
			document.form1.cardnum.focus();
			return false;
	}

	document.form1.act.value="add";
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
      <td width="220" valign="top"><table id="__01" width="220" height="689" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><img src="images/right_01.jpg" width="220" height="48" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right_02.jpg" width="220" height="83" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right07_03.jpg" width="220" height="170" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right07_04.jpg" width="220" height="388" alt="" /></td>
        </tr>
       </table>
	  </td>
      <td width="784" valign="top">
      <?php require 'header.php';?>
      <?php require 'navigator.php';?>
        <table width="784" border="0" cellspacing="0" cellpadding="0">
          <?php require 'banner.php';?>
          <tr>
            <td valign="top"><br />
              <table width="760" height="384" border="0" align="center" cellpadding="0" cellspacing="0">
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
                  <td valign="top" bgcolor="#dee0d5"><div style="padding-left:30px; padding-top:0px; padding-right:30px; line-height:14px; padding-bottom:30px">
					<?php
					$cnt=(is_array($joblist))?count($joblist):0;
					for($j=0;$j<$cnt;$j++){
					?>
						<div class="style2" style="padding-left:0px; line-height:16px;">
							  <span class="style9 style10" style="padding-left:0px; padding-top:5px;text-align:left;"><?echo $joblist[$j][title]?></span><br>
							  <br>
							  <?echo nl2br($joblist[$j][info]);?><br>
						  <strong><br></strong>
						</div>
					<?php
					}
					?>
                    </div></td>
                </tr>
               <tr>
                  <td height="43" valign="top" bgcolor="#bfc1b4"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td height="10"></td>
                      </tr>
                      <tr>
                        <td class="style10"><div align="center">个人简历在线提交</div>
                        </h2></td>
                      </tr>
                      <tr>
                        <td background="个人简历在线提交.files/con_line2.jpg" height="3"></td>
                      </tr>
                      <tr>
                        <td height="30">请真实填写你的个人资料</td>
                      </tr>
                      <tr>
                        <td align="left"><table cellspacing="0" cellpadding="0">
                            <iframe id="Detail" 
              style="DISPLAY: none" name="post_resume" 
              src="个人简历在线提交.files/index.htm" frameborder="0"></iframe>
                              <tbody>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right" width="96">身份证号码:</td>
                                  <td width="412"><input size="32" name="cardnum" />
                                  * 必填</td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">姓名:</td>
                                  <td><input size="32" name="name" />
                                    * 必填 </td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">性别:</td>
                                  <td><input name="sex" type="radio" value="1" checked="checked" />
                                    男 　　
                                    <input name="sex" type="radio" value="2" />
                                    女</td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">出生年月:</td>
                                  <td><select name="year">
								    <option value='1960'>1960年</option>
									<option value='1961'>1961年</option>
									<option value='1962'>1962年</option>
									<option value='1963'>1963年</option>
									<option value='1964'>1964年</option>
									<option value='1965'>1965年</option>
									<option value='1966'>1966年</option>
									<option value='1967'>1967年</option>
									<option value='1968'>1968年</option>
									<option value='1969'>1969年</option>
									<option value='1970'>1970年</option>
									<option value='1971'>1971年</option>
									<option value='1972'>1972年</option>
									<option value='1973'>1973年</option>
									<option value='1974'>1974年</option>
                                    <option value='1975'>1975年</option>
									<option value='1976'>1976年</option>
									<option value='1977'>1977年</option>
									<option value='1978'>1978年</option>
									<option value='1979'>1979年</option>
									<option value='1980' selected>1980年</option>
									<option value='1981'>1981年</option>
									<option value='1982'>1982年</option>
									<option value='1983'>1983年</option>
									<option value='1984'>1984年</option>
									<option value='1985'>1985年</option>
									<option value='1986'>1986年</option>
									<option value='1987'>1987年</option>
									<option value='1988'>1988年</option>
									<option value='1989'>1989年</option>
									<option value='1990'>1990年</option>
									<option value='1991'>1991年</option>
									<option value='1992'>1992年</option>
									<option value='1993'>1993年</option>
									<option value='1994'>1994年</option>
									<option value='1995'>1995年</option>
									<option value='1996'>1996年</option>
									<option value='1997'>1997年</option>
									<option value='1998'>1998年</option>
									<option value='1999'>1999年</option>
									<option value='2000'>2000年</option>
                                  </select>
                                    <select name="month">
                                      <option value='01'>1月</option>
									  <option value='02'>2月</option>
									  <option value='03'>3月</option>
									  <option value='04'>4月</option>
									  <option value='05'>5月</option>
									  <option value='06'>6月</option>
									  <option value='07'>7月</option>
									  <option value='08'>8月</option>
									  <option value='09'>9月</option>
									  <option value='10'>10月</option>
									  <option value='11'>11月</option>
									  <option value='12'>12月</option>
                                    </select>
                                    <select name="day">
									  <option value='01'>1日</option>
									  <option value='02'>2日</option>
									  <option value='03'>3日</option>
									  <option value='04'>4日</option>
									  <option value='05'>5日</option>
									  <option value='06'>6日</option>
									  <option value='07'>7日</option>
									  <option value='08'>8日</option>
									  <option value='09'>9日</option>
									  <option value='10'>10日</option>
									  <option value='11'>11日</option>
									  <option value='12'>12日</option>
									  <option value='13'>13日</option>
									  <option value='14'>14日</option>
									  <option value='15'>15日</option>
									  <option value='16'>16日</option>
									  <option value='17'>17日</option>
									  <option value='18'>18日</option>
									  <option value='19'>19日</option>
									  <option value='20'>20日</option>
									  <option value='21'>21日</option>
									  <option value='22'>22日</option>
									  <option value='23'>23日</option>
									  <option value='24'>24日</option>
									  <option value='25'>25日</option>
									  <option value='26'>26日</option>
									  <option value='27'>27日</option>
									  <option value='28'>28日</option>
									  <option value='29'>29日</option>
									  <option value='30'>30日</option>
                                      <option value='31'>31日</option>
                                    </select></td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">婚姻:</td>
                                  <td><select id="hunyin" name="hunyin">
                                      <option value="1" 
                    selected="selected">未婚</option>
                                      <option 
              value="2">已婚</option>
                                  </select></td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">籍贯:</td>
                                  <td><input id="province" size="32" name="add" /></td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">学历:</td>
                                  <td><select id="xueli" name="xueli">
                                      <option 
                    value="大专" selected="selected">大专</option>
                                      <option value="本科">本科</option>
                                      <option 
                    value="硕士/研究生">硕士/研究生</option>
                                      <option 
                  value="博士">博士</option>
                                  </select></td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">毕业学校:</td>
                                  <td><input size="32" name="school" />                                  </td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">学习专业:</td>
                                  <td><input size="32" name="zhuanye" />                                  </td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">电子邮件:</td>
                                  <td><input size="32" name="email" />                                  </td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">移动电话:</td>
                                  <td><input size="32" name="tel" />                                  </td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right">应聘职位:</td>
                                  <td><select id="job" name="job">
					<?php
					$cnt=(is_array($joblist))?count($joblist):0;
					for($j=0;$j<$cnt;$j++){
					?>
                                    <option value="<?echo $joblist[$j][id]?>"><?echo $joblist[$j][title]?></option>

                   <?php
					}		
				  ?>                                                                                 
				                    </select></td>
                                </tr>

                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right" colspan="2"></td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right" colspan="2"><div align="center"></div></td>
                                </tr>
                                <tr valign="baseline">
                                  <td align="right" valign="top" nowrap="nowrap"><strong>个人简历</strong>:</td>
                                  <td nowrap="nowrap" align="right"><textarea name="info" rows="12" cols="70"></textarea></td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right" colspan="2">&nbsp;</td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="middle" colspan="2"><input id="tijiao" type="button" value="　　　提交我的资料　　　" name="tijiao"  onClick="checkData()"/></td>
                                </tr>
                                <tr valign="baseline">
                                  <td nowrap="nowrap" align="right" 
            colspan="2">&nbsp;</td>
                                </tr>
                              </tbody>
                          
                        </table></td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
            </table>
            </td>
          </tr>
        </table></td>
    </tr>
  </table>
    <?php require 'footer.php';?>
</form>
</div>
</body>
</html>
