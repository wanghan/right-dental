<?php
	require_once("loadhead.php");
?>

<?php MasterPage::BeginPlaceHolder(); ?>
专家团队-朱凯军医生
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
		<td colspan="2">&nbsp;&nbsp;<img src="images/sdf.gif"
			width="200" height="42" /></td>
	</tr>
	<tr>
            
            
	</tr>
</tbody>
</table>
	<div class="container-fluid">
	<div class="row-fluid">
	  <div class="span5">
	  	<img width="270" height="180" id="_x0000_i1038" src="images/team/zhukaijun1.jpg">
	  </div>
	  <div class="span7">
	  	  	<h2 align="center">朱凯军</h2>
	  	<p>毕业于首都医科大学，拥有十余年临床经验，手法轻柔、技术精湛、注重无痛治疗。擅长显微镜下牙齿美容修复、固定修复，尤其擅长牙周病治疗。在治疗中寻求最适合患者的个性化治疗方案，其精湛医术及优质服务多次受到患者的好评。
	注重与国际知名医生的交流，曾参与多次国际间的学术活动，使治疗规范，趋向专业、精湛的国际化管理。
	朱医生坚信：“细节成就品质”
	  	</p>
	  </div>
	</div>
	
	<br/><br/>
	  
	  <div class="row-fluid">
	  <strong><h2>荣誉</h2></strong>
            <div class="imageRow">
                    <div class="set">
                        <div class="single first">
                              <a href="images/team/zhu/cert/Picture4.jpg" rel="lightbox[plants]"><img src="images/team/zhu/cert/Picture4_t.jpg" alt=""></a>
                         </div>
                         <div class="single">
                                <a href="images/team/zhu/cert/Picture5.jpg" rel="lightbox[plants]"><img src="images/team/zhu/cert/Picture5_t.jpg" alt=""></a>
                         </div>
                        <div class="single">
                                    <a href="images/team/zhu/cert/Picture6.jpg" rel="lightbox[plants]"><img src="images/team/zhu/cert/Picture6_t.jpg" alt=""></a>
                        </div>
                        <div class="single">
                                    <a href="images/team/zhu/cert/Picture7.jpg" rel="lightbox[plants]"><img src="images/team/zhu/cert/Picture7_t.jpg" alt=""></a>
                        </div>
                        <div class="single">
                              <a href="images/team/zhu/cert/Picture1.jpg" rel="lightbox[plants]"><img src="images/team/zhu/cert/Picture1_t.jpg" alt=""></a>
                         </div>
                         <div class="single">
                              <a href="images/team/zhu/cert/Picture2.jpg" rel="lightbox[plants]"><img src="images/team/zhu/cert/Picture2_t.jpg" alt=""></a>
                         </div>
                        <div class="single last">
                              <a href="images/team/zhu/cert/Picture3.jpg" rel="lightbox[plants]"><img src="images/team/zhu/cert/Picture3_t.jpg" alt=""></a>
                        </div>
                    </div>
              </div>
	  </div>
	
	<br/><br/>
	  
	  <div class="row-fluid">
	  <strong><h2>技术交流</h2></strong>
	  <div id="myCarousel" class="carousel slide">
		            <div class="carousel-inner">
		              <div class="item active">
		                <img src="images/team/zhu/zhongzhi.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>种植培训交流</h4>
		                </div>
		              </div>
		              <div class="item">
		                <img src="images/team/zhu/3m.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>与3M公司合作交流</h4>
		                </div>
		              </div>
		              <div class="item">
		                <img src="images/team/zhu/comm.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>和病人沟通</h4>
		                </div>
		              </div>
		              <div class="item">
		                <img src="images/team/zhu/dmg.jpg" alt="">
		                <div class="carousel-caption">
		                  <h4>与DMG全球总裁交流</h4>
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
