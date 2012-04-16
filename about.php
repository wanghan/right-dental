<?php
require ("./inc/head.php");

define ("PAGE_NUM", 10);
if(isset($_REQUEST["page"]) && !empty($_REQUEST["page"])){
	$page = $_REQUEST['page'];
	
	//分页列表部分
	$query = "SELECT COUNT(*) FROM newslist where status<>2 ";
	$res = mysql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
	if ($row = mysql_fetch_array($res))
	{
		$g_rows = $row[0];
	}
	
	if ($page <= 0)
		$r_start = 0;
	else
		$r_start = ($page-1)*PAGE_NUM;
}
$query = "SELECT * FROM huodonglist where status<>2 ORDER BY input_time DESC LIMIT 0,3";
$newslist = getAll($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK HREF="images/style.css" TYPE="text/css" REL="stylesheet">
<title>瑞特口腔-关于我们</title>
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
          <td><img src="images/right02_03.jpg" width="220" height="170" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/right02_04.jpg" width="220" height="388" alt="" /></td>
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
                <td><br />                  <table width="519" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#dee0d5">
                    <tr>
                      <td valign="top"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="40"><img src="images/pz.jpg" width="140" height="30" /></td>
                          </tr>
                        <tr>
                          <td>
                            <div style="padding-left:15px; padding-right:12px;padding-top:5px; padding-bottom:10px;line-height:18px;">
                              <p>　　作为专业的口腔医疗机构，瑞特口腔致力于为每一位客户提供最专业的治疗计划和最全面的解决方案。瑞特口腔拥有一支技术成熟的医护团队，可进行全面的治疗操作。诊所全部采用国际高端的专业诊疗设备，所用的器械和材料均为国外知名公司的专业产品。专业的技术操作和国际标准的消毒流程更能为整个治疗提供安全保障。 <br />
                                　　注重细节不仅是行业本身的特殊性要求，同时也是瑞特口腔长期发展的理念。瑞特口腔的每一位医护人员都将通过细节化操作、细节化管理、细节化服务，真诚地为客户提供高品质的人性化服务，让您感受到与众不同的治疗体验。 <br />
                                　　因为我们深信 -- <img src="images/text02.jpg" width="101" height="19" align="absmiddle" /><br />
                              </p>
                              <div>      
                                <div align="right"><a href="about.php"><img src="images/top01.gif" width="37" height="9" border="0" /></a></div>
                              </div>
                        </div>					  </td>
                          </tr>
                      </table></td>
                    </tr>
                    
                </table></td>
              </tr>
              
              <tr>
                <td height="12"></td>
              </tr>
              <tr>
                <td height="157"><table width="519" height="157" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#dee0d5">
                  <tr>
                    <td valign="top"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="156" height="18">&nbsp;</td>
                        </tr>
                      <tr>
                        <td height="54"><div style="padding-left:15px; padding-right:15px;padding-top:5px; padding-bottom:10px;line-height:18px;">
                          <p><span class="style7">环境与服务：</span><br />
                            　　优雅舒适的候诊环境，简约中不失庄重。一曲优美的古典音乐，一杯香浓的意式咖啡，午后的阳光散落在落地窗前…… 这一切都将使您倍感惬意 <br />
							　　我们的每一个微笑都传递着温馨，让前来就诊的您感受到家人般的体贴<br>
                            <span class="style7">客户关怀：<br />
                            </span>　　完善的预约制度可为您节约不必要的等候时间，治疗后的追踪回访更能体现完善的专业服务和贴心的关怀 <br />
                            <span class="style7">医护团队：</span><br />
                            　　技术成熟的医护团队，为客户提供最专业的治疗计划和最全面的解决方案，同时还可根据临床需要安排国内外知名专家进行会诊。<br />
                            <span class="style7">信息管理：</span><br />
                            　　全套数字化信息管理，所有图片信息均可为客户永久保存，以便客户随时随地进行查阅，了解牙齿的健康状况                         </p>
                          <div>
                            <div align="right"><a href="about.php"><img src="images/top01.gif" width="37" height="9" border="0" /></a></div>
                              </div>
                          </div></td>
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
                <td width="192"><table width="201"  border="0" cellpadding="0" cellspacing="0" class="frame01">
                  <tr>
                    <td align="left" valign="top"><br /><a href="news_list.php"><img src="images/left03.jpg" border="0"/></a><br />
                      <div style="padding-left:15px; padding-top:7px; padding-right:15px; line-height:14px; padding-bottom:0px"><a href="news_list.php">
                        <img alt=""  src="images/com_1.jpg" width="71" height="56" border="0" align="left" style="margin-right:16px " />
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
                <td width="13" height="410" bgcolor="#F4F5F1"><img src="images/left02.jpg" width="13" height="154" /></td>
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
