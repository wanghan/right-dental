<?php
	require_once("loadhead.php");
?>

<?php MasterPage::BeginPlaceHolder(); ?>
专家团队-万鹏医生
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
<tbody>
	<tr>
		<td colspan="2">&nbsp;&nbsp;<img src="images/sdf.gif" width="200" height="42" /></td>
	</tr>
	<tr>
	</tr>
</tbody>
</table>
	<div class="container-fluid">
	<div class="row-fluid">
	  <div class="span5">
	  	<img width="270" height="180" id="_x0000_i1038" src="images/team/wanpeng.png">
	  </div>
	  <div class="span7">
	  	  	<h2 align="center">万鹏</h2>
	  	<p>种植医生。拥有多年临床经验，积累了大量的成功病案。擅长牙齿种植手术，复杂牙周炎的系统治疗，牙周非手术治疗，各类牙周手术及牙周美容手术。
	  	</p>
	  </div>
	</div>
	
        <br/><br/>
            
        <div class="row-fluid">
	  <strong><h2>主要经历</h2></strong>
          <div>
              <ul>
                <li>香港大学临床牙周病学硕士</li>
                <li>前首都医科大学附属北京口腔医院客座讲师</li> 
                <li>前香港大学临床牙周病学系荣誉助理教授</li> 
                <li>盖氏公司讲师</li>
                <li>EMS公司讲师</li>
                <li>美国骨整合协会会员</li>
                <li>中华口腔医学会会员</li>
                <li>美国牙周协会会员</li>
                <li>国际种植牙协会会员</li>
                <li>国际牙科研究协会会员</li>
              </ul>
          </div>
	</div>
</div>
<?php MasterPage::EndPlaceHolder("content"); ?>

<?php MasterPage::Render("master.php"); ?>
