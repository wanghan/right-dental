<?php
require ("./inc/head.php");

// $zhonglei_id = $_REQUEST['zhongleiid'];


// $query = "SELECT * FROM fuwuzhonglei where id=$zhonglei_id ";
// $fuwuzhongleilist = getAll($query);
// $fuwuzhonglei = $fuwuzhongleilist[0][title];
// $img = $fuwuzhongleilist[0][img];
// $content = $fuwuzhongleilist[0][content];


// $sql = "select * from fuwulist where zhongleiid=$zhonglei_id and status<>2";
// $fuwulist = getAll($sql);


// $detailid = $_REQUEST['detailid'];
// if($detailid!=""){

// 	$detailquery = "SELECT * FROM fuwulist where id=$detailid";
// 	$detaillist = getAll($detailquery);

// }




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
                  <td width="760" height="328" valign="top" bgcolor="#dee0d5"><table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="50"><div><img src="images/ff01.jpg" width="116" height="38" /></div></td>
                    </tr>
                      <tr>
                        <td width="340" valign="top"><table width="650" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="43"><img src="admin/uploadfile/<?echo $img;?>" width="40" height="40" /></td>
                            <td width="603" bgcolor="#D3D6C7"><span class="STYLE11">&nbsp;<?echo $fuwuzhonglei;?></span></td>
                          </tr>
						  <tr height="20">
                            <td width="43"></td>
                            <td width="603"></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td valign="top"><table width="540" border="0" cellspacing="0" cellpadding="0">
							<tr align="left">
							  <td colspan="2">
						<?php
						    
							$cnt2=(is_array($fuwulist))?count($fuwulist):0;
							for($j=0;$j<$cnt2;$j++){
					   
					    ?>
                              
							  <?php //echo $content;?>
							    
                                <img src="images/icon01.jpg" width="11" height="11" />
                                <a href="service_list.php?detailid=<?php echo $fuwulist[$j]['id'];?>&zhongleiid=<?php echo $zhonglei_id; ?>"><?php echo $fuwulist[$j]['title'];?></a>&nbsp;&nbsp;&nbsp;&nbsp;
								
                              
							  

						<?php
							}
						?>  
						        </td>
						      </tr>

						
						<?php if($detailid==""){?>
						<tr valign="top">
                          <td colspan="2"><div style="padding-left:15px; padding-right:15px;padding-top:5px; padding-bottom:10px;line-height:18px;">
                              <p><span class="style7"><strong><?php echo $fuwulist[0]['title'];?></strong></span><br /><br />
                                <?php echo $fuwulist[0]['content'];?>
                          </div></td>
                        </tr>
						<?php }else{?>
						<tr valign="top">
                          <td colspan="2"><div style="padding-left:15px; padding-right:15px;padding-top:5px; padding-bottom:10px;line-height:18px;">
                              <p><span class="style7"><strong><?php echo $detaillist[0]['title'];?></strong></span><br /><br />
                                <?php echo $detaillist[0]['content'];?>
                          </div></td>
                        </tr>
						<?php }?>

						      <tr align="right">
							    <td width="16"></td>
								<td width="524"><a href="service.php"><img src="images/back01.gif" width="37" height="9" border="0" /></a></td>
							  </tr>
							
                            </table></td>
                          </tr>
						  
                        </table>                        </td>
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
