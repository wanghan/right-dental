<?php
	require_once("loadhead.php");
?>

<?php MasterPage::BeginPlaceHolder(); ?>
关于瑞特-环境与服务
<?php MasterPage::EndPlaceHolder("title"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right_01.jpg" width="220" height="48" alt="" />
<?php MasterPage::EndPlaceHolder("image1"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right_02.jpg" width="220" height="83" alt="" />
<?php MasterPage::EndPlaceHolder("image2"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right02_03.jpg" width="220" height="170" alt="" />
<?php MasterPage::EndPlaceHolder("image3"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right02_04.jpg" width="220" height="388" alt="" />
<?php MasterPage::EndPlaceHolder("image4"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
<tbody>
	<tr>
		<td colspan="2">&nbsp;&nbsp;<img src="images/info/env.png" width="200" height="42" /></td>
	</tr>
	<tr>
	</tr>
</tbody>
</table>
	<div class="container-fluid">
	<div class="row-fluid">
            <p>优雅舒适的候诊环境，简约中不失庄重。一曲优美的古典音乐，一杯香浓的意式咖啡，午后的阳光散落在落地窗前…… 这一切都将使您倍感惬意 。我们的每一个微笑都传递着温馨，让前来就诊的您感受到家人般的体贴</p>
        </div></div>       
	<br/>
        
	<div class="container-fluid">
	<div class="row-fluid">
	  <div class="span7">
            <strong><h2>客户关怀</h2></strong>
            <p>完善的预约制度可为您节约不必要的等候时间，治疗后的追踪回访更能体现完善的专业服务和贴心的关怀</p>
            </div>
            <div class="span5"><img width="270" height="180" class="floatRightImage" id="_x0000_i1038" src="images/info/env/env1.jpg"></div>
        </div></div>       
	<br/>
        
        <div class="container-fluid">
	<div class="row-fluid">
	  <div class="span7">
            <strong><h2>医护团队</h2></strong>
            <p>技术成熟的医护团队，为客户提供最专业的治疗计划和最全面的解决方案，同时还可根据临床需要安排国内外知名专家进行会诊</p>
            </div>
        </div></div>
        
        <br/>
        <div class="container-fluid">
	<div class="row-fluid">
	  <div class="span7">
            <strong><h2>信息管理</h2></strong>
            <p>全套数字化信息管理，所有图片信息均可为客户永久保存，以便客户随时随地进行查阅，了解牙齿的健康状况 </p>
            </div>
            <div class="span5"><img width="270" height="180" class="floatRightImage" id="_x0000_i1038" src="images/info/env/env2.jpg"></div>
        </div></div>
</div>
<?php MasterPage::EndPlaceHolder("content"); ?>

<?php MasterPage::Render("master.php"); ?>
