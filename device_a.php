<?php
require ("./inc/head.php");

// $query = "SELECT * FROM huanjinginfo where id=1";
// $zhenshi = getAll($query);

// $query = "SELECT * FROM huanjinginfo where id=2";
// $houzhenshi = getAll($query);

// $query = "SELECT * FROM huanjinginfo where id=3";
// $peixun = getAll($query);

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
                  <td height="10">
                  <table width="760" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="15"><img src="images/bg1_101.jpg" width="15" height="23" /></td>
                        <td bgcolor="#DEE0D5">&nbsp;</td>
                        <td width="15"><img src="images/bg1_102.jpg" width="15" height="23" /></td>
                      </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td valign="top" bgcolor="#dee0d5"><table width="720" border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr>
                      <td height="128" valign="top"><img src="images/ss01.jpg" width="160" height="38" /><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                        <?php echo $zhenshi[0]['info'];?></span><br />
                        <a href="device_list.php?groupid=1"><span class="style5">&nbsp;&nbsp;&nbsp;　点击查看更多图片</span></a></td>
                        <td width="300"><img src="<?php echo "./admin/uploadfile/".$zhenshi[0]['image'];?>" width="300" height="201" /></td>
                    </tr>
                    </table>
                    <table width="720" border="0" align="center" cellpadding="4" cellspacing="0">
                      <tr>
                        <td width="300" height="128" valign="top"><img src="<?php echo "./admin/uploadfile/".$houzhenshi[0]['image'];?>" width="300" height="200" /><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                        </span></td>
                        <td valign="top"><img src="images/ss02.jpg" width="160" height="38" /><span class="style4"><br />
                            <?php echo $houzhenshi[0]['info'];?></span><br />
                          <a href="device_list.php?groupid=2"><span class="style5">&nbsp;&nbsp;&nbsp;　点击查看更多图片</span></a></td>
                      </tr>
                    </table>
                    <table width="720" border="0" align="center" cellpadding="4" cellspacing="0">
                      <tr>
                        <td height="128" valign="top"><img src="images/ss03.jpg" width="160" height="38" /><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                            <?php echo $peixun[0]['info'];?></span><br />
                        <a href="device_list.php?groupid=3"><span class="style5">&nbsp;&nbsp;&nbsp;　点击查看更多图片</span></a></td>
                        <td width="300"><img src="<?php echo "./admin/uploadfile/".$peixun[0]['image'];?>" width="300" height="201" /></td>
                      </tr>
                    </table>
                    <table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="156" height="18">&nbsp;</td>
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
