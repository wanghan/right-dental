<? 
	require_once("loadhead.php");
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="images/style.css" type="text/css" rel="stylesheet" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo MasterPage::GetPlaceHolder("title"); ?></title>
	<link rel="stylesheet" href="style/main.css" type="text/css" />
	<link href="style/bootstrap.css" rel="stylesheet" />
        <link href="style/bootstrap-responsive.css" rel="stylesheet" />
        <link href="style/lightbox.css" rel="stylesheet" />
        <link href="style/screen.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="style/jquery.ad-gallery.css">
</head>
<body>
	<div align="center" style="margin: 0px auto; width: 1004px">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="220" valign="top">
				<table id="Table_01" width="220" height="689" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td><?php echo MasterPage::GetPlaceHolder("image1"); ?></td>
						</tr>
						<tr>
							<td><?php echo MasterPage::GetPlaceHolder("image2"); ?></td>
						</tr>
						<tr>
							<td><?php echo MasterPage::GetPlaceHolder("image3"); ?></td>
						</tr>
						<tr>
							<td><?php echo MasterPage::GetPlaceHolder("image4"); ?></td>
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
          				<table width="760" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
          					<tr><td valign="top" bgcolor="#dee0d5"><?php echo MasterPage::GetPlaceHolder("content"); ?></td></tr>
							<tr><td height="4" bgcolor="#bfc1b4"></td></tr>
						</table> <br />
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
  		<?php require 'footer.php';?>
  </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/lightbox.js"></script>
    <script type="text/javascript" src="js/jquery.ad-gallery.js"></script>
    <script type="text/javascript" src="js/adgallary-setup.js"></script>
</body>
</html>