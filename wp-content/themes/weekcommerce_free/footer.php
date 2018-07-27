<?php 


include("options/data_cache.php"); ?>
<?php /*
<div class="footer">

<div class="footer_in">
   
    
   
	   <?php if($mytheme_footer_sever_nav){  
	  echo ' <ul class="footer_service">';
	   wp_nav_menu(array( 'walker' => new  header_menu(),'container' => false,'menu' => $mytheme_footer_sever_nav ,'items_wrap' => '%3$s' ) ); 
	   echo '</ul>';
	   }
	   ?>
    </ul>

<?php if($mytheme_footer_tel||$mytheme_footer_contact_s||$mytheme_footer_fax||$mytheme_footer_contact||$mytheme_footer_btn){?>

<div class="footer_contact">
<p class="tell"><?php echo $mytheme_footer_tel; ?></p>
<p><?php echo $mytheme_footer_contact_s; ?></p>
<p><?php echo $mytheme_footer_fax; ?></p>
<p><?php echo $mytheme_footer_contact; ?></p>
<a href="<?php  echo $mytheme_footer_btn_url; ?>"><?php echo $mytheme_footer_btn; ?></a>
</div>
<?php }else{?>
<div class="footer_contact">
<p class="tell">400-800-8822</p>
<p>周一至周日 8:00-18:00（仅售市话费用）</p>
<p>传真 ：0731-8858855</p>
<p>联系地址：湖南省长沙市天心区芙蓉中路235号</p>
<a>联系在线客服</a>
</div>
<?php } ?>
</div>
</div>

*/?>
<div class="footer_bottom" style="display:none;">
<div class="footer_in">

    
      <?php  
	   if($mytheme_footer_sever_nav2){ 
	   echo '<ul class="footer_menu">';
	   wp_nav_menu(array( 'walker' => new  header_menu(),'container' => false,'menu' => $mytheme_footer_sever_nav2 ,'items_wrap' => '%3$s' ) );
	   echo '</ul>';
	   } ?>
   
    
    <p class="bq"><?php if($mytheme_footer_bqba_ts){echo $mytheme_footer_bqba_ts;}else{echo '版权所有 ©'.date("Y").'-'.get_bloginfo('name');} ?> 
    
     <?php if($mytheme_footer_bqba_ts2){?> | <a target="_blank" rel="nofollow" href="http://www.miitbeian.gov.cn/"><?php echo $mytheme_footer_bqba_ts2; ?></a> <?php } ?>
     
      <?php if($mytheme_footer_bqba_ts3){?> 
    |  <a class="gonganwb" target="_blank" rel="nofollow" href="<?php echo $mytheme_footer_bqba_ts4; ?>"><?php echo $mytheme_footer_bqba_ts3; ?></a>
       <?php } ?>
        
      |  <a class="banquan" target="_blank" href="http://www.themepark.com.cn">wordpress主题</a> </p>
  
   <?php  
	 if($mytheme_footer_sever_nav3){ 
	  echo '  <ul class="footer_menu">';
	  wp_nav_menu(array( 'walker' => new  header_menu(),'container' => false,'menu' => $mytheme_footer_sever_nav3 ,'items_wrap' => '%3$s' ) ); 
	  echo '</ul>';
	  }?>
    
</div>

 
      <?php if($mytheme_footer_sever_nav4){  
	  echo '<ul class="yq_link">';
	   wp_nav_menu(array( 'walker' => new  header_menu(),'container' => false,'menu' => $mytheme_footer_sever_nav4 ,'items_wrap' => '%3$s' ) ); 
	   echo '</ul>';
	   }?>


</div>

<?php  get_template_part( 'toolbar/toolbar' ); ?>



<?php wp_footer(); echo  stripslashes(get_option('code_in_foot')); ?>
<footer class="page-footer hide-on-med-and-down">
	<div style="margin-left: 40px; margin-right: 40px; font-size: 0.8em;">
		<div class="row">
			<div class="col s12 m5">
				<img class="imgCenter" src="<?php echo get_bloginfo('template_url').'/images/bitcoin/752a7f_c46305890d6142348d7d59b7dba5a849_mv2.png'; ?>" style="width: 326px; height: 66px; object-fit: cover; margin-top: 50px;">
			</div>
			<div class="col s12 m3">
				<div class="row">
					<div class="col s12">
						<ul>
							<p class="grey-text text-lighten-3">
								<span>联系我们</span>
							</p>
							<li class="grey-text text-lighten-3">email:<a href="mailto:contact@ico-china.info">contact@ico-china.info</a></li>
							<li class="grey-text text-lighten-3">Telegram:<a href="https://t.me/HYICOchina" target="_blank">HYICOchina</a></li>
						</ul>
					</div>
					<div class="col s6">
						<img class="qrcode" src="https://s3-ap-northeast-1.amazonaws.com/ico-china/img/general/mYb0XWe.png">
					</div>
					<div class="col s6">
						<img class="qrcode" src="<?php echo get_bloginfo('template_url').'/images/bitcoin/qr_code_3.png'; ?>">
					</div>
				</div>
			</div>
			<div class="col s12 m2">
				<ul>
					<p class="grey-text text-lighten-3">
						<span>关于我们</span>
					</p>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/aboutus"><span>简介</span></a></li>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/termofuse"><span>使用条款</span></a></li>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/privacypolicy"><span>隐私政策</span></a></li>
				</ul>
			</div>
			<div class="col s12 m2">
				<ul>
					<p class="grey-text text-lighten-3">
						<span>平台</span>
					</p>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/news?page=0"><span>公告</span></a></li>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/articles?page=0&amp;groupType=articles"><span>文章</span></a></li>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/slottingRequest"><span>发布项目</span></a></li>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/projects?page=0&amp;status=active"><span>浏览项目</span></a></li>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/tutorial"><span>投资流程</span></a></li>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/faq"><span>常见问题</span></a></li>
					<li><a class="grey-text text-lighten-3" href="https://www.ico-china.info/fee"><span>手续费相关</span></a></li>
					<select id="locale" style="display: block; font-size: 0.8em; height: 2em; margin-top: 10px;">
						<option value="cn">中文</option>
						<option value="en">English</option>
					</select>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container" style="font-size: 0.8em; width: 80%;">
			Copyright © 2017 ICO-CHINA, All Rights Reserved.
		</div>
	</div>
</body>
<!--<?php echo get_num_queries() . ' queries in ' . timer_stop(0) . ' seconds.'; ?>-->	
</html>