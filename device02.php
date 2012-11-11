<?php
require ("./inc/head.php");

// $id = $_REQUEST['id'];

// $query = "SELECT * FROM shebeilist where id=$id";
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
      <td width="784" valign="top"> 
      <?php require 'header.php';?>
      <?php require 'navigator.php';?>
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
                  <td valign="top" bgcolor="#dee0d5"><table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
                    <tr>
                      <td colspan="2">&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="2" colspan="2" bgcolor="#bfc1b4"></td>
                    </tr>
                    <tr>
                      <td width="340" align="center" valign="top"><br />                        <img src="./admin/uploadfile/<?php echo $shebeilist[0][picture];?>" width="300" height="201" /></td>
                      <td align="left" valign="top"><br />
                          <table width="381" border="0" cellspacing="0" cellpadding="4">
                            <tr>
                              <td width="1" height="100" rowspan="3" align="center" valign="middle">&nbsp;</td>
                              <td align="left" valign="middle" class="style1 style8"><?php echo $shebeilist[0][title];?></td>
                            </tr>
                            <tr>
                              <td align="left" valign="middle"><?php echo $shebeilist[0][content];?></td>
                            </tr>
                            <tr>
                              <td align="left" valign="middle"><div>
                                  <div align="right"><a href="device01.php"><img src="images/back01.gif" width="37" height="9" border="0" /></a></div>
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
</div>
</body>
</html>
