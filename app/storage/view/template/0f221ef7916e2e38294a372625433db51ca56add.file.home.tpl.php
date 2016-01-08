<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-31 17:09:44
         compiled from "..\themes\AR\modules\page\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254465685534882da13-89256226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f221ef7916e2e38294a372625433db51ca56add' => 
    array (
      0 => '..\\themes\\AR\\modules\\page\\home.tpl',
      1 => 1449863501,
      2 => 'file',
    ),
    'dd97241db37db08b22de86e49d7212e3b176295c' => 
    array (
      0 => 'C:\\wamp\\www\\ARCMS\\themes\\AR\\homepage.tpl',
      1 => 1450289756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254465685534882da13-89256226',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56855348bf66f3_75148838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56855348bf66f3_75148838')) {function content_56855348bf66f3_75148838($_smarty_tpl) {?><!DOCTYPE html>
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
<body class="intro-07-wrap">
<div class="sticky-border sticky-border-top"></div>
<div class="sticky-border sticky-border-right"></div>
<div class="sticky-border sticky-border-bottom"></div>
<div class="sticky-border sticky-border-left"></div>
<?php echo $_smarty_tpl->getSubTemplate ('../../inc/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../../inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="mastwrap" class="mastwrap">
	<section id="intro" class="intro intro-07 pad-bottom intro-07-trans-bg fullheight">	
		 
<?php echo $_smarty_tpl->tpl_vars['post_content']->value;?>


	</section>
</section>
<!-- Master Wrap : ends -->
<?php echo $_smarty_tpl->getSubTemplate ('../../inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
$_tmp29=ob_get_clean();?><?php echo Libs::js($_tmp28."themes/".$_tmp29."/assets/javascripts/custom/equalheights-init.js",false);?>
 
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp30=ob_get_clean();?><?php ob_start();
echo Config::get('themes.nameFrontEnd');
$_tmp31=ob_get_clean();?><?php echo Libs::js($_tmp30."themes/".$_tmp31."/assets/javascripts/custom/main.js",false);?>
 

</body>
</html><?php }} ?>
