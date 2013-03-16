<?php
	require_once("loadhead.php");
?>

<?php MasterPage::BeginPlaceHolder(); ?>
瑞特口腔-专家团队
<?php MasterPage::EndPlaceHolder("title"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right_01.jpg" width="220" height="48" alt="" />
<?php MasterPage::EndPlaceHolder("image1"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right_02.jpg" width="220" height="83" alt="" />
<?php MasterPage::EndPlaceHolder("image2"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right04_03.jpg" width="220" height="170" alt="" />
<?php MasterPage::EndPlaceHolder("image3"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right04_04.jpg" width="220" height="388" alt="" />
<?php MasterPage::EndPlaceHolder("image4"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>

<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
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
							<a href="doctor_zhu.php">
								<img class="expertListImg" alt="朱凯军医生" src="images/team/zhukaijun.jpg"></img>
								<br/>朱凯军医生
							</a>
							</div>
							</td>
							<td>
							<div class="expertListDiv">
							<a href="doctor_2.php">
								<img class="expertListImg" alt="曲卫红医生" src="images/team/quweihong.jpg" />
								<br/>曲卫红医生
							</a>
							</div>
							</td>
						</tr>
						<tr>
							<td>
							<div class="expertListDiv">
							<a href="doctor_3.php">
								<img class="expertListImg" alt="董权医生" src="images/team/dongquan.jpg" />
								<br/>董权医生
							</a>
							</div>
							</td>
							<td>
							<div class="expertListDiv">
							<a href="doctor_5.php">
								<img class="expertListImg" alt="赵宏伟医生" src="images/team/zhaohongwei.png" />
								<br/>赵宏伟医生
							</a>
							</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<div class="expertListDiv">
							<a href="doctor_4.php">
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

<?php MasterPage::EndPlaceHolder("content"); ?>

<?php MasterPage::Render("master.php"); ?>
