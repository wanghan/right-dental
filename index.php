<?php
require ("./inc/head.php");

// define ("PAGE_NUM", 10);
// if(isset($_REQUEST["page"]) && !empty($_REQUEST["page"])){
// 	$page = $_REQUEST['page'];
	
// 	//分页列表部分
// 	$query = "SELECT COUNT(*) FROM newslist where status<>2 ";
// 	$res = mssql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
// 	if ($row = mysql_fetch_array($res))
// 	{
// 		$g_rows = $row[0];
// 	}
	
// 	if ($page <= 0)
// 		$r_start = 0;
// 	else
// 		$r_start = ($page-1)*PAGE_NUM;
// }
// $query = "SELECT * FROM huodonglist where status<>2 ORDER BY input_time DESC LIMIT 0,3";
// $newslist = getAll($query);

// $query = "SELECT * FROM fuwuzhonglei where status<>2 ORDER BY input_time DESC limit 0,6 ";
// $fuwuzhongleilist = getAll($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK HREF="images/style.css" TYPE="text/css" REL="stylesheet">
<title>瑞特口腔</title>
<style type="text/css">
<!--
body {
	background-color: #f2f3ed;
	margin-top: 0px;
	margin-bottom: 0px;
	margin-left:auto;
	margin-right:auto;
	 text-align:center;
}
body,td,th {
	font-size: 12px;
	color: #5c5650;
}

.STYLE13 {
	color: #5492bb;
	font-size: 13px;
	font-weight: bold;
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
          <tr>
            <td width="568" valign="top"><table width="568" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td background="images/flash2.jpg"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="568" height="170">
                  <param name="movie" value="images/2.swf" />
                  <param name="quality" value="high" />
                  <embed src="images/2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="568" height="170"></embed>
                </object></td>
              </tr>
              <tr>
                <td><table width="519" height="225" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td background="images/bg1.jpg">
                      <div style="padding-left:15px; padding-top:31px; padding-right:25px; line-height:14px; padding-bottom:19px"><a href="#"><img alt=""  src="images/com_2.jpg" width="153" height="92" border="0" align="left" style="margin-right:27px "></a>
                      <div style="padding-left:0px; padding-top:5px"><span class="style4"><a href="#" class="style1"><img src="images/aa.gif" width="125" height="42" border="0" /></a> <br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    人们在追求品质生活的同时，对牙齿健康的关注程度也在不断提高。越来越多的人已意识到牙齿对于身体健康是至关重要的。瑞特口腔真诚地希望通过我们不懈的努力，以最专业的技术和最贴心的服务，为您的品质生活提供无微不至的关怀。
                        <br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在这里，您将感受到国际化标准的治疗全过程，追求无痛治疗、保障您的舒适与安全是我们对您最真心的关爱……..</span>
                        <div>
                          <div align="right"><a href="about.php"><img src="images/more01.gif" width="37" height="9" border="0" /></a></div>
                          </div>
                    </div></td>
                  </tr>
                  </table></td>
              </tr>
              <tr>
                <td height="8"></td>
              </tr>
              <tr>
                <td height="157"><table width="519" height="157" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td valign="top" background="images/bg2.jpg"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="156" height="54"><a href="service.php"><img src="images/ff.jpg" width="116" height="38"  border="0"/></a></td>
                        <td width="165">&nbsp;</td>
                        <td width="179">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="47"><a href="#"></a>
                          <table width="114" height="38" border="0" align="right" cellpadding="0" cellspacing="0">
                            <tr>
                              <td background="images/fbutton_bg.jpg"><table width="114" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="38">&nbsp;</td>
                                    <td width="76"><a href="service_list.php?zhongleiid=<?echo $fuwuzhongleilist[0][id]?>"><span class="STYLE13"><?echo $fuwuzhongleilist[0][title];?></span></a></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table>
                        </td>
                        <td>
                          <table width="114" height="38" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td background="images/fbutton_bg.jpg"><table width="114" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="38">&nbsp;</td>
                                  <td width="76"><a href="service_list.php?zhongleiid=<?echo $fuwuzhongleilist[1][id]?>"><span class="STYLE13"><?echo $fuwuzhongleilist[1][title];?></span></a></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table>
                          <a href="#"></a></td>
                        <td><table width="114" height="38" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td background="images/fbutton_bg.jpg"><table width="114" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="38">&nbsp;</td>
                                <td width="76"><a href="service_list.php?zhongleiid=<?echo $fuwuzhongleilist[2][id]?>"><span class="STYLE13"><?echo $fuwuzhongleilist[2][title];?></span></a></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>                          </td>
                      </tr>
                      <tr>
                        <td height="47">
                          <table width="114" height="38" border="0" align="right" cellpadding="0" cellspacing="0">
                            <tr>
                              <td background="images/fbutton_bg.jpg"><table width="114" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="38">&nbsp;</td>
                                  <td width="76"><a href="service_list.php?zhongleiid=<?echo $fuwuzhongleilist[3][id]?>"><span class="STYLE13"><?echo $fuwuzhongleilist[3][title];?></span></a></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table>
                          <a href="#"></a></td>
                        <td>
                          <table width="114" height="38" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td background="images/fbutton_bg.jpg"><table width="114" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="38">&nbsp;</td>
                                  <td width="76"><a href="service_list.php?zhongleiid=<?echo $fuwuzhongleilist[4][id]?>"><span class="STYLE13"><?echo $fuwuzhongleilist[4][title];?></span></a></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table>
                          <a href="#"></a></td>
                        <td><table width="114" height="38" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td background="images/fbutton_bg.jpg"><table width="114" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="38">&nbsp;</td>
                                <td width="76"><a href="service_list.php?zhongleiid=<?echo $fuwuzhongleilist[5][id]?>"><span class="STYLE13"><?echo $fuwuzhongleilist[5][title];?></span></a></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>                          </td>
                      </tr>
                      </table></td>
                  </tr>
                  
                  </table></td>
              </tr>
            </table></td>
            <td valign="top"><table width="216"  border="0" cellspacing="0" cellpadding="0" style="height:100% ">
              <tr align="left" valign="top">
                <td height="16" colspan="2"><img src="images/left01.jpg" width="216" height="16" /></td>
                </tr>
              <tr align="left" valign="top">
                <td width="192" height="483"><table width="201"  border="0" cellpadding="0" cellspacing="0" class="frame01">
                  <tr>
                    <td align="left" valign="top"><br />
                        <a href="news_list.php"><img src="images/left03.jpg" border="0"/></a><br />
                        <div style="padding-left:15px; padding-top:7px; padding-right:15px; line-height:14px; padding-bottom:0px"><a href="news_list.php"> <img alt=""  src="images/com_1.jpg" width="71" height="56" border="0" align="left" style="margin-right:16px " /></a>
                        </div>
                      <div style="padding-left:24px; padding-top:0px"></div>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><div style="padding-left:10px; padding-top:4px"></div>
                        <div style="padding-left:24px; padding-top:14px; padding-bottom:0px"><span class="style3"><a href="hd_list.php" class="style1">最新活动</a></span></div>
                      <div style="padding-left:24px; padding-top:10px; padding-bottom:27px">
                          <table width="165"  border="0" cellspacing="0" cellpadding="0">
					  <?php 
						$cnt=(is_array($newslist))?count($newslist):0;
						for($i=0;$i<$cnt;$i++){
					  ?>
                            <tr align="left" valign="middle" class="style5">
                              <td width="11" height="17"><img alt=""  src="images/point_1.jpg" width="5" height="5" /></td>
                              <td height="17"><a href="activity.php?id=<?php echo $newslist[$i]['id'];?>" class="style5"><?php echo $newslist[$i]['title'];?></a></td>
                            </tr>
					  <?php }?>

                          </table>
                      </div></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><img src="images/left04.jpg" width="201" height="123" /></td>
                  </tr>
                </table></td>
                <td width="13" height="487" bgcolor="#F4F5F1"><img src="images/left02.jpg" width="13" height="154" /></td>
              </tr>
              <tr align="left" valign="top">
                <td height="60" colspan="2" valign="middle"><a href="admin.php"><img src="images/liuyan.jpg" width="203" height="40" border="0" /></a></td>
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