<?php
require ("./inc/head.php");

$id = $_REQUEST['id'];

$query = "SELECT * FROM fuwulist where id=$id";
$fuwulist = getAll($query);

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
                  <td valign="top" bgcolor="#dee0d5"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="700" height="38"><img src="images/ff01.jpg" width="116" height="38" /></td>
                    </tr>
                      
                      
                      </table>
                      <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="700" height="2" bgcolor="#bfc1b4"></td>
                    </tr>
						<tr valign="top">
                          <td><div style="padding-left:15px; padding-right:15px;padding-top:5px; padding-bottom:10px;line-height:18px;">
                              <p><span class="style7"><strong><?php echo $fuwulist[0]['title'];?></strong></span><br />
                                <?php echo $fuwulist[0]['content'];?>
                              <div>
                                <div align="right"><a href="service_list.php?zhongleiid=<?php echo $fuwulist[0]['zhongleiid'];?>" ><p class="style7">返回&gt;&gt;</p></a></div>
                              </div>
                          </div></td>
                        </tr>
                  </table></td>
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
