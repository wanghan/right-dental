<?php
require ("./inc/head.php");

// define ("PAGE_NUM", 6);
// if(isset($_REQUEST["page"]) && !empty($_REQUEST["page"])){
// 	$page = $_REQUEST['page'];
	
// 	//分页列表部分
// 	$query = "SELECT COUNT(*) FROM fuwuzhonglei where status<>2 ";
// 	$res = mysql_query($query, $g_mysql) or syswarn("对不起","系统错误，请联系管理员",mysql_error().":".$query);
// 	if ($row = mysql_fetch_array($res))
// 	{
// 		$g_rows = $row[0];
// 	}
	
// 	if ($page <= 0)
// 		$r_start = 0;
// 	else
// 		$r_start = ($page-1)*PAGE_NUM;
// }
// $query = "SELECT * FROM fuwuzhonglei where status<>2 ORDER BY input_time DESC ";
// $fuwuzhongleilist = getAll($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK HREF="images/style.css" TYPE="text/css" REL="stylesheet">
<title>瑞特口腔-服务项目</title>
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
.frame01 {
	border: 1px solid #bbbfb1;
}
.STYLE11 {font-size: 14px; color: #3399FF;}
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
      <td width="784" valign="top">
       <?php require 'header.php';?>
       <?php require 'navigator.php';?>
        <table width="784" border="0" cellspacing="0" cellpadding="0">
          <?php require 'banner.php';?>
          <tr>
            <td valign="top"><br />
              <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
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
                  <td width="760" height="328" valign="top" bgcolor="#dee0d5">
				    <table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="50" colspan="2"><div><img src="images/ff01.jpg" width="116" height="38" /></div></td>
                      </tr>


                      <tr>

					 <?php 
						$cnt=(is_array($fuwuzhongleilist))?count($fuwuzhongleilist):0;
						$num=0;
						for($i=0;$i<$cnt;$i++){
							$num++;
							if($num%2==1 and $num!=1){

								echo "</tr><tr>";
							}

							$zhonglei_id = $fuwuzhongleilist[$i][id];
							$zhonglei_title = $fuwuzhongleilist[$i][title];
							$zhonglei_img = $fuwuzhongleilist[$i][img];

							$sql = "select * from fuwulist where zhongleiid=$zhonglei_id and status<>2 limit 0,3 ";
							$fuwulist = getAll($sql);
					 ?>

                       <td width="340" valign="top">
						 <table width="320" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="50" rowspan="2"><a href="service_list.php?zhongleiid=<?echo $zhonglei_id?>"><img src="admin/uploadfile/<?echo $zhonglei_img;?>" width="110" height="110" border="0"/></a></td>
                            <td width="354" bgcolor="#D3D6C7"><a href="service_list.php?zhongleiid=<?echo $zhonglei_id?>"><span class="STYLE11">&nbsp;<?echo $zhonglei_title;?></span></a></td>
                          </tr>
                          <tr>
                            <td valign="top">
							  <table width="239" border="0" cellspacing="0" cellpadding="0">
						<?php
							$cnt2=(is_array($fuwulist))?count($fuwulist):0;
							for($j=0;$j<$cnt2;$j++){
					   
					    ?>
                                <tr>
                                  <td><img src="images/icon01.jpg" width="11" height="11" /></td>
                                  <td><a href="service_list.php?detailid=<?php echo $fuwulist[$j]['id'];?>&zhongleiid=<?php echo $zhonglei_id; ?>"><?php echo $fuwulist[$j]['title'];?></td>
                                </tr>
						<?php
							}
						?>
								 <tr>
                                  <td>&nbsp;</td>
                                  <td><div align="right"><a href="service_list.php?zhongleiid=<?echo $zhonglei_id?>"><img src="images/more01.gif" width="37" height="9" border="0"/></a></div></td>
                                </tr>
                              </table>							</td>
                           </tr>
                          </table>
                        </td>
					<?php
						}
					?>

                      </tr>



                      </table></td>
                      </tr>           
                      </table>
                    <br /></td>
                </tr>
                 <tr>
                  <td height="4" bgcolor="#bfc1b4"></td>
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
