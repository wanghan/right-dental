<?php
	require_once("loadhead.php");
?>

<?php MasterPage::BeginPlaceHolder(); ?>
专家团队-赵宏伟医生
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
	  	<img width="240" height="160" id="_x0000_i1038" src="images/team/zhaohongwei.png">
	  </div>
	  <div class="span7">
	  	  	<h2 align="center">赵宏伟</h2>
	  	<p>香港大学牙周临床硕士。擅长各型牙周病的诊断及治疗。</p>
	  </div>
	</div>
            
	<br/><br/>
	  
	  <div class="row-fluid">
	  <strong><h2>荣誉</h2></strong>
            <div class="imageRow">
                    <div class="set">
                        <div class="single first">
                              <a href="images/team/zhao/cert/Picture9.jpg" rel="lightbox[plants]"><img src="images/team/zhao/cert/Picture9_t.jpg" alt=""></a>
                         </div>
                        <div class="single last">
                              <a href="images/team/zhao/cert/Picture10.jpg" rel="lightbox[plants]"><img src="images/team/zhao/cert/Picture10_t.jpg" alt=""></a>
                        </div>
                    </div>
              </div>
	  </div>
	
	<br/><br/>
	  
        <div class="row-fluid">
	  <strong><h2>专业特长</h2></strong>
          <div>
                <ul>
                <li>各型牙龈病</li>
                <li>慢性牙周炎</li> 
                <li>侵袭性牙周炎</li> 
                <li>复杂病例的系统牙周治疗</li>
                <li>牙周非手术性治疗</li>
                <li>牙周手术治疗</li>
              </ul>
          </div>
	</div>
</div>
<?php MasterPage::EndPlaceHolder("content"); ?>

<?php MasterPage::Render("master.php"); ?>
