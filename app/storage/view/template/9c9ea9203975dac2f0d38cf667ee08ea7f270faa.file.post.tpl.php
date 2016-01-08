<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-10 03:13:18
         compiled from "..\app\themes\ARframework\Front-end\modules\page\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126505668dfbee4fc29-81060984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9ea9203975dac2f0d38cf667ee08ea7f270faa' => 
    array (
      0 => '..\\app\\themes\\ARframework\\Front-end\\modules\\page\\post.tpl',
      1 => 1449713521,
      2 => 'file',
    ),
    '0e2a41de44261dbb2b6fa97cd0c1490adba39389' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\Front-end\\base.tpl',
      1 => 1449686393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126505668dfbee4fc29-81060984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5668dfbf4e9986_86604845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5668dfbf4e9986_86604845')) {function content_5668dfbf4e9986_86604845($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '../core/Associates/Smarty/plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo Config::get('app.title');?>
 -   <?php echo $_smarty_tpl->tpl_vars['post_title']->value;?>
</title>
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
	
<section id="news" class="news pad-bottom-half white-bg">	
	<div class="container">
		<div class="row">
				<article class="text-left col-md-12">
					<h4><span class="dark font2">By Admin / Category</span></h4>
					<h1 class="main-heading"><span class="black font4"><em class="dark font3 weight-light"><?php echo $_smarty_tpl->tpl_vars['post_title']->value;?>
</em></span></h1>
		  			<div class="news-date text-left add-top-quarter">
		  					<h1 class="black font4"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post_date']->value,'%d');?>
</h1>
		  					<h3 class="black font3 weight-light"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post_date']->value,'%B');?>
</h3>
		  			</div>
				</article>
		</div>
	</div>
</section>

	 
<section class="news-image-wrap white-bg">
	<div class="container">
		<div class="row">
				<article class="text-center col-md-12">
					<img data-no-retina alt="" title="" class="img-responsive" src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/bg/01.jpg"/>
				</article>
		</div>
	</div>
</section>
<section class="about pad-top-half pad-bottom white-bg">
	<div class="container">
		<div class="row">
				<article class="text-left col-md-12">
					<p class="promo-text dark font2 weight-light black"><?php echo $_smarty_tpl->tpl_vars['post_content']->value;?>
</p>
				</article>
		</div>
		<div class="row add-top-quarter">
				<article class="text-left col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sed libero at congue. Praesent vulputate dolor velit, in condimentum odio pellentesin condimentum odio pellentesque a. Nulla facilisi. Aliquam in justo non libero faucique a. Nulla facilisi. Aliquam in justo non libero faucibus venenatis sed et quam. Nulla rutrum non tellus in fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sed libero at congue.</p>
				</article>
				<article class="text-left col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sed libero at congue. Praesent vulputate dolor velit, in condimentum odio pellentesin condimentum odio pellentesque a. Nulla facilisi. Aliquam in justo non libero faucique a. Nulla facilisi. Aliquam in justo non libero faucibus venenatis sed et quam. Nulla rutrum non tellus in fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sed libero at congue.</p>
				</article>
		</div>
	</div>
</section>
<section id="call-to-action" class="page page-section call-to-action color-bg">	
	<div class="container">
		<div class="row">
			<article class="col-md-12 text-center">
					<h1 class="sub-heading"><span class="dark font4">Looking for More?</span></h1>
	  				<div class="btn-wrap  text-center">
                    	<a class="btn btn-seven btn-seven-dark" href="#">Click to Action</a>
                  </div>
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
 
 
<?php echo '<script'; ?>
>
$(document).ready(function (){
	$('#mastwrap').removeClass('slant-bottom-white');
	$('#footer').addClass('space-top');
	$('#mastwrap').addClass('slant-bottom-color');
});
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
