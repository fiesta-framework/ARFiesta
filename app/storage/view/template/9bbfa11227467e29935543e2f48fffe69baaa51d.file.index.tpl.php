<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-09 19:44:50
         compiled from "..\app\themes\ARframework\Front-end\modules\about\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6628566876a24f87c7-61184506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bbfa11227467e29935543e2f48fffe69baaa51d' => 
    array (
      0 => '..\\app\\themes\\ARframework\\Front-end\\modules\\about\\index.tpl',
      1 => 1449686085,
      2 => 'file',
    ),
    '0e2a41de44261dbb2b6fa97cd0c1490adba39389' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\Front-end\\base.tpl',
      1 => 1449686393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6628566876a24f87c7-61184506',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566876a2c5f202_45426923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566876a2c5f202_45426923')) {function content_566876a2c5f202_45426923($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo Config::get('app.title');?>
 -   About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp1=ob_get_clean();?><?php echo Html::favicon($_tmp1."public/favicon.ico");?>

	
		<?php ob_start();
echo Config::get('app.base_url');
$_tmp2=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp3=ob_get_clean();?><?php echo Libs::css($_tmp2."app/themes/".$_tmp3."/Front-end/assets/bootstrap/css/bootstrap",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp4=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp5=ob_get_clean();?><?php echo Libs::css($_tmp4."app/themes/".$_tmp5."/Front-end/assets/fonts/fonts",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp6=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp7=ob_get_clean();?><?php echo Libs::css($_tmp6."app/themes/".$_tmp7."/Front-end/assets/stylesheets/plugins-common",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp8=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp9=ob_get_clean();?><?php echo Libs::css($_tmp8."app/themes/".$_tmp9."/Front-end/assets/stylesheets/owl.carousel",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp10=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp11=ob_get_clean();?><?php echo Libs::css($_tmp10."app/themes/".$_tmp11."/Front-end/assets/stylesheets/owl.theme",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp12=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp13=ob_get_clean();?><?php echo Libs::css($_tmp12."app/themes/".$_tmp13."/Front-end/assets/stylesheets/intro07",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp14=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp15=ob_get_clean();?><?php echo Libs::css($_tmp14."app/themes/".$_tmp15."/Front-end/assets/stylesheets/main",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp16=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp17=ob_get_clean();?><?php echo Libs::css($_tmp16."app/themes/".$_tmp17."/Front-end/assets/stylesheets/less-compiled",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp18=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp19=ob_get_clean();?><?php echo Libs::css($_tmp18."app/themes/".$_tmp19."/Front-end/assets/stylesheets/main-bg",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp20=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp21=ob_get_clean();?><?php echo Libs::css($_tmp20."app/themes/".$_tmp21."/Front-end/assets/stylesheets/main-responsive",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp22=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp23=ob_get_clean();?><?php echo Libs::css($_tmp22."app/themes/".$_tmp23."/Front-end/assets/stylesheets/main-retina",false);?>

	
	<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700%7CRaleway:400,300,700,900%7COpen+Sans:400,300,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		  <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.js"><?php echo '</script'; ?>
>
		  <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
</head>
<body>
<div class="sticky-border sticky-border-top"></div>
<div class="sticky-border sticky-border-right"></div>
<div class="sticky-border sticky-border-bottom"></div>
<div class="sticky-border sticky-border-left"></div>
<?php echo $_smarty_tpl->getSubTemplate ('../../inc/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Master Wrap : starts -->
<?php echo $_smarty_tpl->getSubTemplate ('../../inc/headerPage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="mastwrap" class="mastwrap slant-bottom slant-bottom-white">
	
<section id="about" class="about pad-bottom white-bg">	
	<div class="container">
		<div class="row">
				<article class="text-left col-md-12">
					<h1 class="main-heading"><span class="black font4">Hi, we are Seven. <em class="dark font3 weight-light">The Swiss design agency from Geneva</em></span></h1>
				</article>
		</div>
	</div>
</section>

	 
<section class="about pad-top pad-bottom white-bg super-space">
	<div class="container">
		<div class="row">
				<article class="text-left col-md-6">
					<h1 class="sub-heading"><span class="black font4">The Story.</span></h1>
					<p class="promo-text dark font2 weight-light add-top-quarter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sed libero at congue. Praesent vulputate dolor velit, in condimentum odio pellentesque libero.</p>
				</article>
				<article class="text-left col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sed libero at congue. Praesent vulputate dolor velit, in condimentum odio pellentesin condimentum odio pellentesque a. Nulla facilisi. Aliquam in justo non libero faucique a. Nulla facilisi. Aliquam in justo non libero faucibus venenatis sed et quam. Nulla rutrum non tellus in fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sed libero at congue.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sed libero at congue. Praesent vulputate dolor velit, in condimentum odio pellentesque a facilisi justo.</p>
				</article>
		</div>
	</div>
</section>
<section id="stats" class="stats stats-bg pad-top pad-bottom">	
	<div class="container">
		<div class="row add-top-half">
				<article class="text-left col-md-3 text-center stats-block color-bg">
					<h3 class="stats-count"><span class="dark font3 weight-light">453</span></h3>
					<p class="stats-info black font4">Web Projects</p>
				</article>
				<article class="text-left col-md-3 text-center stats-block white-bg">
					<h3 class="stats-count"><span class="color font3 weight-light">2M</span></h3>
					<p class="stats-info dark font4">Followers</p>
				</article>
				<article class="text-left col-md-3 text-center stats-block offwhite-bg">
					<h3 class="stats-count"><span class="black font4">5K</span></h3>
					<p class="stats-info color font4">Page Likes</p>
				</article>
		</div>
		<div class="row">
				<article class="text-left col-md-3 col-md-offset-3 text-center stats-block offwhite-bg">
					<h3 class="stats-count"><span class="black font4">84</span></h3>
					<p class="stats-info color font4">Brand Logos</p>
				</article>
				<article class="text-left col-md-3 text-center stats-block white-bg">
					<h3 class="stats-count"><span class="color font3 weight-light">632</span></h3>
					<p class="stats-info dark font4">Appreciations</p>
				</article>
				<article class="text-left col-md-3 text-center stats-block color-bg">
					<h3 class="stats-count"><span class="dark font3 weight-light">2841</span></h3>
					<p class="stats-info black font4">Dribbble Shots</p>
				</article>
		</div>
	</div>
</section>
<section id="testimonials" class="page page-section testimonials color-bg">	
	<div class="container">
		
		<div class="row">
					<article class="col-md-12 text-center">




<ul class="bxslider agency-slider">
  <li>
  		<div class="row">
				<article class="col-md-8 col-md-offset-2 text-center">
					<h3 class="user-title black font4"><span>John Henkein / One Media</span></h3>
					<p class="user-text dark font2">They have 1 Million clients across the globe, their customer support is top class.</p>
				</article>
		</div>
  </li>
  
  <li>
  		<div class="row">
				<article class="col-md-8 col-md-offset-2 text-center">
					<h3 class="user-title black font4"><span>Mia Kluisters / BBC</span></h3>
					<p class="user-text dark font2">They have designed 1567+ Websites with innovation. We value their 'out of box thinking' more than anything.</p>
				</article>
		</div>
  </li>

  <li>
  		<div class="row">
				<article class="col-md-8 col-md-offset-2 text-center">
					<h3 class="user-title black font4"><span>Ernest Young / Arena Inc.</span></h3>
					<p class="user-text dark font2">They have developed more than 400 Web &amp; Mobile Apps. They can build anything possible on world wide web.</p>
				</article>
		</div>
  </li>

</ul>

<div id="bx-pager" class="agency-slider-triggers">
  <a class="agency-triggered" data-slide-index="0" href="#"><img data-no-retina alt="" title="" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/agency/01.png" /></a>
  <a data-slide-index="1" href="#"><img data-no-retina alt="" title="" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/agency/02.png" /></a>
  <a data-slide-index="2" href="#"><img data-no-retina alt="" title="" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/agency/03.png" /></a>
</div>

					</article>
			</div>
		</div>
</section>




<section id="service-list" class="features features-bg parallax">	
	<div class="container-fluid">

	<div class="row">
		
		<article class="col-md-6 features-inner white-bg">
			<div class="row">
	  			<div class="col-md-6 feature-icon text-center">
	  				<div class="feature-icon-wrap">
		  				<i class="ion-ios7-bookmarks-outline color"></i>
		  				<h4 class="font4 black">Branding</h4>
		  				<p>Lorem Ipsum is simply dummy text of the printing and design.</p>
	  				</div>
	  			</div>
	  			<div class="col-md-6 feature-icon text-center">
	  				<div class="feature-icon-wrap">
	  					<i class="ion-ios7-analytics-outline color"></i>
	  					<h4 class="font4 black">Web Design</h4>
	  					<p>Lorem Ipsum is simply dummy text of the printing and design.</p>
	  				</div>
	  			</div>
	  		</div>

	  		<div class="row add-top-quarter">
	  			<div class="col-md-6 feature-icon text-center">
	  				<div class="feature-icon-wrap">
	  					<i class="ion-ios7-cart-outline color"></i>
	  					<h4 class="font4 black">Applications</h4>
	  					<p>Lorem Ipsum is simply dummy text of the printing and design.</p>
	  				</div>
	  			</div>
	  			<div class="col-md-6 feature-icon text-center">
	  				<div class="feature-icon-wrap">
	  					<i class="ion-ios7-chatboxes-outline color"></i>
	  					<h4 class="font4 black">Consulting</h4>
	  					<p>Lorem Ipsum is simply dummy text of the printing and design.</p>
	  				</div>
	  			</div>
	  		</div>


		</article>

	</div>
			
			
	</div>
</section>




<section id="clients" class="page page-section clients color-bg">	
	<div class="container">
		<div class="row">
			<article class="col-md-2 text-center">
				<img data-no-retina alt="" title="" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/clients/01.png"/>
			</article>
			<article class="col-md-2 text-center">
				<img data-no-retina alt="" title="" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/clients/02.png"/>
			</article>
			<article class="col-md-2 text-center">
				<img data-no-retina alt="" title="" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/clients/03.png"/>
			</article>
			<article class="col-md-2 text-center">
				<img data-no-retina alt="" title="" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/clients/04.png"/>
			</article>
			<article class="col-md-2 text-center">
				<img data-no-retina alt="" title="" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/clients/05.png"/>
			</article>
			<article class="col-md-2 text-center">
				<img data-no-retina alt="" title="" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/clients/06.png"/>
			</article>
		</div>
	</div>
</section>
<section id="team" class="page page-section team white-bg">	
	<div class="container">
		<div class="row">
				<article class="text-left col-md-12">
					<h1 class="sub-heading"><span class="dark font4">Team of Talents.</span></h1>
				</article>
		</div>
			<div class="row add-top-quarter">
					<article class="col-md-12 text-left">
					    	<!-- carouesel:starts -->
					    	<div id="team-carousel" class="team-carousel owl-carousel owl-nav-sticky-extra-wide owl-theme">



					    		<!-- item:starts -->
							<div class="item team-carousel-item team-stage">
					    		<img data-no-retina data-no-retina alt="polo" title="polo" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/team/01.jpg"/>
								<h3 class="font4 dark color-bg">John Doe / <span class="font2 black"> Founder</span></h3>
							</div>
							<!-- item:ends -->

					    		<!-- item:starts -->
							<div class="item team-carousel-item team-stage">
					    		<img data-no-retina data-no-retina alt="polo" title="polo" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/team/03.jpg"/>
								<h3 class="font4 black offwhite-bg">Juan Igor / <span class="font2 dark"> Developer</span></h3>
							</div>
							<!-- item:ends -->
							
					    		<!-- item:starts -->
							<div class="item team-carousel-item team-stage">
					    		<img data-no-retina data-no-retina alt="polo" title="polo" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/team/02.jpg"/>
								<h3 class="font4 dark color-bg">Amy Lee / <span class="font2 black"> Designer</span></h3>
							</div>
							<!-- item:ends -->



					    		<!-- item:starts -->
							<div class="item team-carousel-item team-stage">
					    		<img data-no-retina data-no-retina alt="polo" title="polo" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/team/04.jpg"/>
								<h3 class="font4 black offwhite-bg">Lia Heinz / <span class="font2 dark"> Manager</span></h3>
							</div>
							<!-- item:ends -->

							
							<!-- item:starts -->
							<div class="item team-carousel-item team-stage">
					    		<img data-no-retina data-no-retina alt="polo" title="polo" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/team/05.jpg"/>
								<h3 class="font4 dark color-bg">Rob Klasnic / <span class="font2 black"> Designer</span></h3>
							</div>
							<!-- item:ends -->


							<!-- item:starts -->
							<div class="item team-carousel-item team-stage">
					    		<img data-no-retina data-no-retina alt="polo" title="polo" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/team/06.jpg"/>
								<h3 class="font4 black offwhite-bg">Samanta Nell / <span class="font2 dark"> Developer</span></h3>
							</div>
							<!-- item:ends -->


							
					    		<!-- item:starts -->
							<div class="item team-carousel-item team-stage">
					    		<img data-no-retina data-no-retina alt="polo" title="polo" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/team/07.jpg"/>
								<h3 class="font4 dark color-bg">Clifford Zogbi / <span class="font2 black"> Writer</span></h3>
							</div>
							<!-- item:ends -->

							

						</div>
					    	<!-- carouesel:ends -->
					</article>
			</div>
		</div>
</section>

</section>
<!-- Master Wrap : ends -->
<?php echo $_smarty_tpl->getSubTemplate ('../../inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo '<script'; ?>
>
	var links = "<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/"; 
	<?php echo '</script'; ?>
>
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp24=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp25=ob_get_clean();?><?php echo Libs::js($_tmp24."app/themes/".$_tmp25."/Front-end/assets/javascripts/libs/plugins.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp26=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp27=ob_get_clean();?><?php echo Libs::js($_tmp26."app/themes/".$_tmp27."/Front-end/assets/javascripts/custom/navmenu-init.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp28=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp29=ob_get_clean();?><?php echo Libs::js($_tmp28."app/themes/".$_tmp29."/Front-end/assets/javascripts/custom/backstretch-init.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp30=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp31=ob_get_clean();?><?php echo Libs::js($_tmp30."app/themes/".$_tmp31."/Front-end/assets/javascripts/custom/equalheights-init.js",false);?>
 
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp32=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp33=ob_get_clean();?><?php echo Libs::js($_tmp32."app/themes/".$_tmp33."/Front-end/assets/javascripts/custom/bxslider-init.js",false);?>
 
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp34=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp35=ob_get_clean();?><?php echo Libs::js($_tmp34."app/themes/".$_tmp35."/Front-end/assets/javascripts/custom/main.js",false);?>
 

</body>
</html><?php }} ?>
