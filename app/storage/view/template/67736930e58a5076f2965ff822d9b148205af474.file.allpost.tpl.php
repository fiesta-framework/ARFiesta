<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 15:05:40
         compiled from "..\themes\AR\modules\page\allpost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88566c29b4048a74-51627494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67736930e58a5076f2965ff822d9b148205af474' => 
    array (
      0 => '..\\themes\\AR\\modules\\page\\allpost.tpl',
      1 => 1449858863,
      2 => 'file',
    ),
    '7c9c6477ba5c8511d17c17e4110b0d17bc31b377' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\themes\\AR\\base.tpl',
      1 => 1449771887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88566c29b4048a74-51627494',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566c29b45599a9_73117575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c29b45599a9_73117575')) {function content_566c29b45599a9_73117575($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '../core/Associates/Smarty/plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo Config::get('app.title');?>
 -   Articles </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp1=ob_get_clean();?><?php echo Html::favicon($_tmp1."public/favicon.ico");?>

	
		<?php ob_start();
echo Config::get('app.base_url');
$_tmp2=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp3=ob_get_clean();?><?php echo Libs::css($_tmp2."themes/".$_tmp3."/assets/bootstrap/css/bootstrap",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp4=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp5=ob_get_clean();?><?php echo Libs::css($_tmp4."themes/".$_tmp5."/assets/fonts/fonts",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp6=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp7=ob_get_clean();?><?php echo Libs::css($_tmp6."themes/".$_tmp7."/assets/stylesheets/plugins-common",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp8=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp9=ob_get_clean();?><?php echo Libs::css($_tmp8."themes/".$_tmp9."/assets/stylesheets/owl.carousel",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp10=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp11=ob_get_clean();?><?php echo Libs::css($_tmp10."themes/".$_tmp11."/assets/stylesheets/owl.theme",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp12=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp13=ob_get_clean();?><?php echo Libs::css($_tmp12."themes/".$_tmp13."/assets/stylesheets/intro07",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp14=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp15=ob_get_clean();?><?php echo Libs::css($_tmp14."themes/".$_tmp15."/assets/stylesheets/main",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp16=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp17=ob_get_clean();?><?php echo Libs::css($_tmp16."themes/".$_tmp17."/assets/stylesheets/less-compiled",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp18=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp19=ob_get_clean();?><?php echo Libs::css($_tmp18."themes/".$_tmp19."/assets/stylesheets/main-bg",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp20=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp21=ob_get_clean();?><?php echo Libs::css($_tmp20."themes/".$_tmp21."/assets/stylesheets/main-responsive",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp22=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp23=ob_get_clean();?><?php echo Libs::css($_tmp22."themes/".$_tmp23."/assets/stylesheets/main-retina",false);?>

	
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
	
<section id="news" class="news pad-bottom white-bg">	
	<div class="container">
		<div class="row">
				<article class="text-left col-md-12">
					<h1 class="main-heading"><span class="black font4">Nouvelles Postes. <em class="dark font3 weight-light">Les dernières mises à jour de notre blog</em></span></h1>
				</article>
		</div>
	</div>
</section>

	 
<section class="news-list-wrap">
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
	<section class="news-list news-list-01 page-section <?php if ($_smarty_tpl->tpl_vars['post']->key%2) {?>white-bg <?php } else { ?>offwhite-bg<?php }?>">	
		<a href="<?php echo Config::get('app.base_url');?>
page/t/<?php echo $_smarty_tpl->tpl_vars['post']->value->post_name;?>
">
			<div class="container">
				<div class="row">
							<div class="col-md-9 text-left">
									<h3 class="font2 black"><?php echo $_smarty_tpl->tpl_vars['post']->value->post_title;?>
</h3>
									<div class="news-border color-bg"></div>
									<p><?php echo $_smarty_tpl->tpl_vars['post']->value->post_short_content;?>
</p>
							</div>
							<div class="col-md-3 news-date text-left">
									<h1 class="black font4"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->post_date,'%d');?>
</h1>
									<h3 class="black font3 weight-light"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->post_date,'%B');?>
</h3>
							</div>
				</div>
			</div>
		</a>
	</section>
	<?php } ?>
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
themes/<?php echo Config::get('themes.nameFrontEnd');?>
/assets/"; 
	<?php echo '</script'; ?>
>
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp24=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp25=ob_get_clean();?><?php echo Libs::js($_tmp24."themes/".$_tmp25."/assets/javascripts/libs/plugins.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp26=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp27=ob_get_clean();?><?php echo Libs::js($_tmp26."themes/".$_tmp27."/assets/javascripts/custom/navmenu-init.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp28=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp29=ob_get_clean();?><?php echo Libs::js($_tmp28."themes/".$_tmp29."/assets/javascripts/custom/backstretch-init.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp30=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp31=ob_get_clean();?><?php echo Libs::js($_tmp30."themes/".$_tmp31."/assets/javascripts/custom/equalheights-init.js",false);?>
 
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp32=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp33=ob_get_clean();?><?php echo Libs::js($_tmp32."themes/".$_tmp33."/assets/javascripts/custom/bxslider-init.js",false);?>
 
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp34=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp35=ob_get_clean();?><?php echo Libs::js($_tmp34."themes/".$_tmp35."/assets/javascripts/custom/main.js",false);?>
 

</body>
</html><?php }} ?>
