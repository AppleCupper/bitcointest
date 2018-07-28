<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?> >
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1" />	

<?php include("options/data_cache.php"); 

if(is_single()){
$id=get_the_ID(); 
$description=get_post_meta($id, "描述",true);
$keyworeds=get_post_meta($id, "关键字",true);
$posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { $tagess.=$tag->name.',';}}
}
 ?>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (get_option('mytheme_eso_jr') == ""){ ?>
<meta name="keywords" content="<?php  if(is_single()&&!$keyworeds){echo $tagess;}else{theme_keyworeds();} ?>" />
<meta name="description" content="<?php  if(is_single()&&!$description){echo  mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,200,"",'utf-8');}else{theme_description();}; ?>" />
<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /> <?php }} ;?>
<title><?php 
			 $singletitle_p =get_post_meta($post->ID, "title_p",true);
			 $singletitle =get_post_meta($post->ID, "title",true);
			 global $wp_query;
             $cat_obj = $wp_query->get_queried_object_id();
			$term_id = $cat_obj;
			
             $cat_title=get_option('cat_title_'.$term_id);
             $cat_title_p=get_option('cat_title_p_'.$term_id);
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title($language_th1."_"); echo '_'; }
		      elseif (is_archive()||class_exists('Woocommerce')&&is_product()) {
				
		        if( $cat_title){echo  $cat_title;}else{ wp_title(''); echo '_'.get_bloginfo('name');; }
					 
				 }
		      elseif (is_search()) {
		         echo $language_th2.'_'.wp_specialchars($s).'_'; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		      
		        if( $singletitle){echo  $singletitle;}else{ wp_title(''); echo '_'.get_bloginfo('name');; }
					 
			    }
		      elseif (is_404()) {
		         echo $language_th3.'_'; }
		      if (is_home()) {
				  
				
						 
		        if(get_option('mytheme_title')){echo get_option('mytheme_title');}else{  bloginfo('name'); echo '_'; bloginfo('description'); }
					 
		        }
		      if ($paged>1) {
		         echo '_page'. $paged;echo '_'; bloginfo('description'); }
		   ?></title>




<?php wp_head();  echo stripslashes(get_option('code_in_head'));
if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>


<!--[if lt IE 9]>
    <link id="stylesheet-css" rel="stylesheet" href="<?php echo get_bloginfo('template_url').'/css/ie_hack.css'; ?>" type="text/css" media="all">
<![endif]-->
<link rel="manifest" href="https://www.ico-china.info/manifest.json">
<link rel="shortcut icon" href="https://www.ico-china.info/favicon.ico">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url').'/images/bitcoin/icon'; ?>">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url').'/css/materialize.min.css'; ?>">
<link href="<?php echo get_bloginfo('template_url').'/css/main.ed8c846d.css'; ?>" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_url').'/css/bitcoin.css'; ?>" rel="stylesheet">



</head>


<body <?php body_class();?> >
<script src="<?php echo get_bloginfo('template_url').'/js/jquery-2.1.1.min.js'; ?>"></script>
<script src="<?php echo get_bloginfo('template_url').'/js/materialize.min.js'; ?>"></script>
   <div class="header">
   

          <?php /*<div class="main_top">
            <div class="main_top_in">
            
            <p><?php if(get_option("mytheme_gonggao")&& get_option("mytheme_gonggao")!="1"){echo get_option("mytheme_gonggao");}else{ if(get_option("mytheme_gonggao")!="1"){echo '请输出您的公告文字';}}?></p>
           <ul> <?php   wp_nav_menu(array('container' => false,'theme_location' => 'top-menu','items_wrap' => '%3$s' ) );?></ul>
            
            <div style="clear:both;"></div>
            </div>
          </div>*/?>
		<div class="navbar-fixed">
			<nav class="white">
			<div class="nav-wrapper">
				<div class="col s12">
					<div class="headerBar" style="display:inline-block;">
						<img class="logo" src="<?php echo get_bloginfo('template_url').'/images/bitcoin/logobit.png'; ?>"><a class="headerLogo left hide-on-med-and-down" href="<?php echo home_url();?>">BIT-CHINA</a>
						<p class="headerSubtitle">
							数币中国
						</p>
					</div>
					<ul class="white right hide-on-med-and-down">
						<li class=""><a><span>公告</span></a></li>
						<li class=""><a class="menuItem dropdown-button" href="https://www.ico-china.info/articles?page=0&amp;groupType=news" data-activates="dropdown_0"><span>文章</span></a>
							<ul class="dropdown-content" id="dropdown_0">
								<li class=""><a><span>币圈宵夜</span></a></li>
								<li class=""><a><span>韭菜园地</span></a></li>
							</ul>
						</li>
						<li class=""><a><span>发布项目</span></a></li>
						<li class=""><a><span>浏览项目</span></a></li>
						<?php if (function_exists( 'wc_get_page_id' ) ) {
							$myaccount = get_permalink( 13 );
							$signup = get_permalink( 14 );
							$cart = get_permalink( wc_get_page_id( 'cart' ) );
							if (is_user_logged_in()){
								global $current_user;   
								wp_get_current_user();
								$user_ID = $current_user->ID ;
								$login_html='<li class=""><a class="myaccount myreg" href="'.$myaccount.'"><span>'.$language_t4.'</span></a></li><li class="menuItem headerSignup"><a class="myaccount myreg"href="'. $cart.'"><span>'.$language_t5.'</span></a></li>';
							}else{
								$login_html='<li class=""><a class="myaccount " href="'.$myaccount.'">'.$language_t2.'</a></li><li class="menuItem headerSignup"><a class="myaccount myreg" href="'.$signup.'"><span>'.$language_t3.'</span></a></li>';
							}
							echo $login_html;
						}
						?>  
						<li class="webCantSee"><a><span>投资流程</span></a></li>
						<li class="webCantSee"><a><span>常见问题</span></a></li>
						<li class="webCantSee"><a><span>手续费相关</span></a></li>
					</ul>
					<ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
						<li class=""><a><span>公告</span></a></li>
						<li class=""><a><span><a class="menuItem dropdown-button" href="https://www.ico-china.info/articles?page=0&amp;groupType=news" data-activates="dropdown_1" style="padding: 0px;"><span>文章</span></a>
						<ul class="dropdown-content" id="dropdown_1">
							<li class=""><a><span>币圈宵夜</span></a></li>
							<li class=""><a><span>韭菜园地</span></a></li>
						</ul>
						</span></a></li>
						<li class=""><a><span>发布项目</span></a></li>
						<li class=""><a><span>浏览项目</span></a></li>
						<li class=""><a><span>登录</span></a></li>
						<li class="menuItem headerSignup"><a><span>注册</span></a></li>
						<li class="webCantSee"><a><span>投资流程</span></a></li>
						<li class="webCantSee"><a><span>常见问题</span></a></li>
						<li class="webCantSee"><a><span>手续费相关</span></a></li>
					</ul>
					<a class="button-collapse" href="https://www.ico-china.info/#" data-activates="nav-mobile"><i class="material-icons">view_headline</i></a>
				</div>
			</div>
			</nav>
		</div>
<?php /*
           <div class="header_top">
              <div class="header_top_in">
                   
                   <?php if(is_home()){ $logo_out_s='<h1 class="logo">';  $logo_out_w='</h1>';}else{ $logo_out_s='<div class="logo">';  $logo_out_w='</div>';}
				         if(get_option("mytheme_logo")){$logo=get_option("mytheme_logo");}else{$logo=get_bloginfo('template_url').'/images/logo.png';}
						  if(get_option("mytheme_logo2")){$logo2=get_option("mytheme_logo2");}
						   $logos2='<img class="movelogo" src="'.$logo2.'" alt="'.get_bloginfo('name').'"/>';
						 $logos='<img class="pclogo" src="'.$logo.'" alt="'.get_bloginfo('name').'"/>'.get_bloginfo('name');
				         echo $logo_out_s.$logos.$logos2.$logo_out_w ;
						 get_template_part( 'inc/nav' );
					?>
              </div>
           </div>
           
             <div class="header_bottom">
                  <div class="header_bottom_in">
                          <div class="drog_nav">
                          
                             <span class="drog_tit"><?php echo $language_t1; ?></span>
                             <i class="drog_i"></i>
                             <div style="clear:both;"></div>
                          </div>
                          
                         <ul id="waper_drog_nav"> 
                         <div class='gobanks'><i></i></div>
                        <?php  wp_nav_menu(array( 'walker' => new header_menu(),'container' => false,'theme_location' => 'cat-menu' ,'items_wrap' => '%3$s' ) ); ?>
                        <li class="gapodu"></li>
                        <div class='gobank'><i></i></div>
                        </ul>
                        
                        
                        
                        
                        <div class="header_bottom_search">
                          
                          <?php  if (function_exists( 'wc_get_page_id' ) ) {
							   $myaccount = get_permalink( wc_get_page_id( 'myaccount' ) );
							  $cart = get_permalink( wc_get_page_id( 'cart' ) );
							   if (is_user_logged_in()) {
		  global $current_user;    wp_get_current_user();
			  $user_ID = $current_user->ID ;
			  
			   $login_html='<a class="myaccount myreg" href="'.$myaccount.'">'.$language_t4.'</a><a  class="myaccount myreg"href="'. $cart.'">'.$language_t5.'</a>';
							 
							  }else{
								 $login_html='<a  class="myaccount " href="'.$myaccount.'">'.$language_t2.'</a><a class="myaccount myreg" href="'.$myaccount.'">'.$language_t3.'</a>';
								  }
							 
							  
							  echo $login_html;
							   ?>  
                              <a class="header_nav_move_btn"></a>
          <?php }              ?>
                             <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
                             <input type="text" id="s" name="s" value="<?php $key=$s; if($key){echo $key;}; ?>" />
                             <div class="chose_search_box">
                                 <label><input type="radio" <?php echo $all_get; ?> name="post_type" value="0" /><?php echo $language_th5; ?></label>
                                 <label> <input type="radio"<?php echo $product_get; ?> name="post_type" value="product" /><?php echo $language_th7; ?></label>
                                 <label><input type="radio" <?php echo $cat_get; ?>name="post_type" value="post" /><?php echo $language_th6; ?></label>
                                  
                             </div>
                           
                             <input id="searchsubmit" type="submit" value="">
                            </form>
                        </div>
                        
                  </div>
              </div>
   
   <div style="clear:both;"></div>
*/ ?>
   </div>
   
  