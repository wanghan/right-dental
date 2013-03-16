<?php
require ("./inc/head.php");

// mysql_query("SET NAMES 'utf8'");

// define ("PAGE_NUM", 5);
// $page = $_REQUEST['page'];


// $act = $_REQUEST['act'];
// //$title = $_REQUEST['title'];
// //$ask = $_REQUEST['ask'];

// if($act=="add"){

// 	$title=$_REQUEST[title];
// 	$ask=$_REQUEST[ask];
// 	$answer=$_REQUEST[answer];

// 	$query="insert into questionlist set ";
// 	$query .= "title = '" .mysql_escape_string($title)."', ";
// 	$query .= "ask = '" .mysql_escape_string($ask)."', ";
// 	$query .= "answer = '', ";
// 	$query .= "status = '" .mysql_escape_string("1")."', ";
// 	$query .= "input_time = now() ";
// 	$result = mysql_query($query,$g_mysql);
// 	alert_location("成功提交问题!","admin.php");


// }

// //分页列表部分
// $query = "SELECT COUNT(*) FROM questionlist where status<>2 ";

// $res = mysql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
// if ($row = mysql_fetch_array($res))
// {
// 	$g_rows = $row[0];
// }

// if ($page <= 0)
// 	$r_start = 0;
// else
// 	$r_start = ($page-1)*PAGE_NUM;

// $query = "SELECT * FROM questionlist where status<>2 ORDER BY input_time DESC LIMIT ".$r_start.", ".PAGE_NUM;
// $questionlist = getAll($query);


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
.style12 {color: #33CCFF; font-weight: bold; font-size: 14px; }
-->

</style>
<script>

function checkData()
{
	if (document.form1.title.value == "")
	{
		alert("问题标题不能为空，请填写!");
		document.form1.title.focus();
		return false;
	}
	
	if (document.form1.ask.value == "")
	{
		alert("问题内容不能为空，请填写!");
		document.form1.ask.focus();
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
  <table width="1004" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="220" valign="top">
      <table id="Table_01" width="220" height="689" border="0" cellpadding="0" cellspacing="0">
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
                  <td valign="top" bgcolor="#dee0d5"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    
                    <tr>
                      <td><table width="145" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="145" height="30" align="right" class="style9 style11"><img src="images/h.gif" width="125" height="42" /></td>
                          </tr>
                        </table>
                            <table width="92%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <form action="" method="post" name="form1" id="form1">
							  <input type=hidden name="act" value="">
                                <tr>
                                  <td width="11%" class="style2">问题标题：</td>
                                  <td width="89%" height="30" class="style2"><input name="title" type="text" id="title" size="50" /></td>
                                </tr>
                                <tr>
                                  <td class="style2">问题正文：</td>
                                  <td><p>
                                    <textarea name="ask" id="ask" cols="50" rows="5"></textarea>
                                  </p>
                                    <p>
                                      <label>
                                      <input type="submit" name="Submit" value="提交" onclick="checkData()"/>
                                      </label>
                                      <input type="reset" name="Submit2" value="重置" />
                                    </p></td>
                                </tr>
                              </form>
                            </table>
                            <br />
                            <table width="92%" border="0" align="center" cellpadding="0" cellspacing="0">
                               <tr>
                  <td height="2" bgcolor="#bfc1b4"></td>
                </tr>
                            </table>
                            <br />
                            <table width="86%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="30" colspan="3" class="style12">问题列表</td>
                            </tr>
					  <?php 
						$cnt=(is_array($questionlist))?count($questionlist):0;
						for($i=0;$i<$cnt;$i++){
					  ?>
                            <tr>
                              <td><img src="images/ll.gif" /></td>
                              <td width="78%" height="30" background="images/bg1.gif" class="style1"><?php echo $questionlist[$i]['title'];?></td>
                              <td width="22%" align="right" background="images/bg1.gif" class="style2"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td height="30" colspan="2" class="style1"><table width="600" height="30" border="0" cellpadding="4" cellspacing="1" bgcolor="#ACB095">
                                  <tr>
                                    <td valign="top" bgcolor="#C8CBB8" class="style2"><?php echo $questionlist[$i]['ask'];?></td>
                                </tr>
                              </table></td>
                            </tr>

					  <?php
							if($questionlist[$i]['answer']!=""){	  
					  ?>

							<br>
							<tr>
                              <td>&nbsp;</td>
                              <td height="30" colspan="2" class="style1"><table width="600" height="50" border="0" cellpadding="4" cellspacing="1" bgcolor="#ACB095">
                                  <tr>
                                    <td valign="top" bgcolor="#C8CBB8" class="style2">回复：<?php echo $questionlist[$i]['answer'];?></td>
                                </tr>
                              </table></td>
                            </tr>

					  <?php
							}
						}	
					  ?>
                        </table>
                          <br /></td>
                      </tr>
                  </table></td>
                  </tr>
                  <TR>
				   <TD height="30" align="center"><?echo show_nav_bar("admin.php", $g_rows, PAGE_NUM, $page, ""); ?></TD>
				  </TR>
            </table></td>
          </tr>
        </table></td>
    </tr>
  </table>
    <?php require 'footer.php';?>
</div>
</body>
</html>
