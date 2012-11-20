<?php
require ("./inc/head.php");

// define ("PAGE_NUM", 8);
// if(isset($_REQUEST["page"]) && !empty($_REQUEST["page"])){
// $page = $_REQUEST['page'];

// //分页列表部分
// $query = "SELECT COUNT(*) FROM tuanduilist where status<>2 ";
// $res = mysql_query($query, $g_mysql) or
// syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
// if ($row = mysql_fetch_array($res))
// {
// $g_rows = $row[0];
// }

// if ($page <= 0)
// $r_start = 0;
// else
// $r_start = ($page-1)*PAGE_NUM;

// $query = "SELECT * FROM tuanduilist where status<>2 ORDER BY input_time DESC
// LIMIT ".$r_start.", ".PAGE_NUM;
// $tuanduilist = getAll($query);
// }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK HREF="images/style.css" TYPE="text/css" REL="stylesheet">
	<title>瑞特口腔-专家团队</title>
	<link rel="stylesheet" href="style/main.css" type="text/css" />
	<style type="text/css">
<!--
.frame01 {
	border: 1px solid #bbbfb1;
}
-->
</style>

</head>
<body align="center">
	<div style="margin: 0px auto; width: 1004">
		<table width="1004" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="220" valign="top"><table id="Table_01" width="220"
						height="689" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td><img src="images/right_01.jpg" width="220" height="48" alt="" /></td>
						</tr>
						<tr>
							<td><img src="images/right_02.jpg" width="220" height="83" alt="" /></td>
						</tr>
						<tr>
							<td><img src="images/right04_03.jpg" width="220" height="170"
								alt="" /></td>
						</tr>
						<tr>
							<td><img src="images/right04_04.jpg" width="220" height="388"
								alt="" /></td>
						</tr>
					</table></td>
				<td width="784" valign="top">
       <?php require 'header.php';?>
       <?php require 'navigator.php';?>
        <table width="784" border="0" cellspacing="0" cellpadding="0">
          <?php require 'banner.php';?>
          <tr>
							<td valign="top"><br />
								<table width="760" height="200" border="0" align="center"
									cellpadding="0" cellspacing="0">
									<tr>
										<td valign="top" bgcolor="#dee0d5">
											<table width="100%" border="0" align="center" cellpadding="4"
												cellspacing="0">

												<tr>
													<td colspan="2">&nbsp;&nbsp;<img src="images/sdf.gif"
														width="200" height="42" /></td>
												</tr>
												<tr>
													<td>
														<div id="cms_wrapper">
															<table class="sectionbodycopy" border="0" width="100%"
																cellpadding="3" cellspacing="2">
																<tbody>
																	<tr>
																		<td>
																		<div class="expertListDiv">
																		<a href="expert/doctor_zhu.php">
																			<img class="expertListImg" alt="朱凯军医生" src="images/team/zhukaijun.jpg"></img>
																			<br/>朱凯军医生
																		</a>
																		</div>
																		</td>
																		<td>
																		<div class="expertListDiv">
																		<a href="expert/doctor_zhu.php">
																			<img class="expertListImg" alt="曲卫红医生" src="images/team/quweihong.jpg" />
																			<br/>曲卫红医生
																		</a>
																		</div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																		<div class="expertListDiv">
																		<a href="expert/doctor_zhu.php">
																			<img class="expertListImg" alt="董权医生" src="images/team/dongquan.jpg" />
																			<br/>董权医生
																		</a>
																		</div>
																		</td>
																		<td>
																		<div class="expertListDiv">
																		<a href="expert/doctor_zhu.php">
																			<img class="expertListImg" alt="赵宏伟医生" src="images/team/zhaohongwei.png" />
																			<br/>赵宏伟医生
																		</a>
																		</div>
																		</td>
																	</tr>
																	<tr>
																		<td colspan="2">
																		<div class="expertListDiv">
																		<a href="expert/doctor_zhu.php">
																			<img class="expertListImg" alt="万鹏医生" src="images/team/wanpeng.png" />
																			<br/>万鹏医生
																		</a>
																		</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td height="4" bgcolor="#bfc1b4"></td>
									</tr>
								</table> <br /></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
  <?php require 'footer.php';?>
  </div>
</body>
</html>