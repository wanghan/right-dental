<?php
	require_once("loadhead.php");
?>

<?php MasterPage::BeginPlaceHolder(); ?>
关于瑞特-国际化的培训
<?php MasterPage::EndPlaceHolder("title"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right_01.jpg" width="220" height="48" alt="" />
<?php MasterPage::EndPlaceHolder("image1"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right_02.jpg" width="220" height="83" alt="" />
<?php MasterPage::EndPlaceHolder("image2"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right03_03.jpg" width="220" height="170" alt="" />
<?php MasterPage::EndPlaceHolder("image3"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<img src="images/right03_04.jpg" width="220" height="388" alt="" />
<?php MasterPage::EndPlaceHolder("image4"); ?>

<?php MasterPage::BeginPlaceHolder(); ?>
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
<tbody>
	<tr>
		<td colspan="2">&nbsp;&nbsp;<img src="images/info/training.png" width="200" height="42" /></td>
	</tr>
</tbody>
</table>
	<div class="container-fluid">
	<div class="row-fluid">
	  <div>
	  	<p>瑞特口腔门诊定期举行专业培训，牙医沙龙，举办过保健、牙周、种植、美白、颌学、隐形正畸、美学修复等多次学术交流，与数十名国内外专家有长期的合作关系。</p>
                <ul>
                    <li>瑞特口腔门诊是美国3i种植体的特约手术室，我们可以手术同步转播，同时讲解，让更多的业内外人士了解种植</li>
                    <li>瑞特口腔门诊是美国Invisalign隐适美的授权门诊</li>
                    <li>瑞特口腔门诊是德国DMG公司的合作伙伴，组织过多次国内外交流培训</li>
                </ul>
	  </div>
	</div>
	
	<br/><br/>
	  <div class="row-fluid">
	  <div id="myCarousel" class="carousel slide">
		            <div class="carousel-inner">
		              <div class="item active">
		                <img src="images/info/training/training1.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>德国巴伐利亚州牙医协会副主席米歇尔.史密斯博士.种植讲座</h4>
		                </div>
		              </div>
		              <div class="item">
		                <img src="images/info/training/training2.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>美国正畸博士Dr.Lin Ton</h4>
		                </div>
		              </div>
		              <div class="item">
		                <img src="images/info/training/training3.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>DMG全球总裁访问瑞特</h4>
		                </div>
		              </div>
		              <div class="item">
		                <img src="images/info/training/training4.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>尤根访问瑞特</h4>
		                </div>
		              </div>
                              <div class="item">
		                <img src="images/info/training/training5.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>美国3M公司访问瑞特</h4>
		                </div>
		              </div>
                              <div class="item">
		                <img src="images/info/training/training6.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>WymanChan博士学术交流</h4>
		                </div>
		              </div>
                              <div class="item">
		                <img src="images/info/training/training7.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>卡瓦市场总裁访问瑞特</h4>
		                </div>
		              </div>
                              <div class="item">
		                <img src="images/info/training/training8.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>美国3i公司总裁访问瑞特</h4>
		                </div>
		              </div>
                                
		            </div>
		            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
		            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
		          </div>
	  </div>
</div>
<?php MasterPage::EndPlaceHolder("content"); ?>

<?php MasterPage::Render("master.php"); ?>
