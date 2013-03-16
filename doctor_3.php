<?php
	require_once("loadhead.php");
?>

<?php MasterPage::BeginPlaceHolder(); ?>
专家团队-董权医生
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
	  	<img width="270" height="180" id="_x0000_i1038" src="images/team/dongquan.jpg">
	  </div>
	  <div class="span7">
	  	  	<h2 align="center">董权</h2>
	  	<p>毕业于佳木斯大学，主治医师，擅长牙齿美容修复、固定修复及显微根管治疗，曾多次参加国内外显微治疗培训及交流。注重与患者的沟通，寻求最适合患者的个性化治疗方案，尤其在无痛治疗方面有独到之处。
	  	</p>
	  </div>
	</div>
	
        <br/><br/>  
	  <div class="row-fluid">
	  <strong><h2>荣誉</h2></strong>
            <div class="imageRow">
                    <div class="set">
                        <div class="single first">
                              <a href="images/team/dong/cert/Picture1.jpg" rel="lightbox[plants]"><img src="images/team/dong/cert/Picture1_t.jpg" alt=""></a>
                         </div>
                        <div class="single last">
                              <a href="images/team/dong/cert/Picture2.jpg" rel="lightbox[plants]"><img src="images/team/dong/cert/Picture2_t.jpg" alt=""></a>
                        </div>
                    </div>
              </div>
	  </div>
	
	<br/><br/>
        
        <div class="row-fluid">
	  <strong><h2>病历</h2></strong>
          <div>
              <ul><li>病例一：后牙根管治疗</li></ul>
              <div class="imageRow">
                    <div class="set">
                        <div class="single first">
                              <a href="images/team/dong/case/Picture3.jpg" rel="lightbox[plants]"><img src="images/team/dong/case/Picture3_t.jpg" alt=""></a>
                         </div>
                         <div class="single">
                              <a href="images/team/dong/case/Picture4.jpg" rel="lightbox[plants]"><img src="images/team/dong/case/Picture4_t.jpg" alt=""></a>
                         </div>
                        <div class="single last">
                              <a href="images/team/dong/case/Picture5.jpg" rel="lightbox[plants]"><img src="images/team/dong/case/Picture5_t.jpg" alt=""></a>
                        </div>
                    </div>
              </div>
	  </div>
           <div>
              <ul><li>病例二：前牙美学修复</li></ul>
              <div class="imageRow">
                    <div class="set">
                        <div class="single first">
                              <a href="images/team/dong/case/Picture6.jpg" rel="lightbox[plants]"><img src="images/team/dong/case/Picture6_t.jpg" alt=""></a>
                         </div>
                        <div class="single last">
                              <a href="images/team/dong/case/Picture7.jpg" rel="lightbox[plants]"><img src="images/team/dong/case/Picture7_t.jpg" alt=""></a>
                        </div>
                    </div>
              </div>
	  </div>
	</div>
</div>
<?php MasterPage::EndPlaceHolder("content"); ?>

<?php MasterPage::Render("master.php"); ?>
