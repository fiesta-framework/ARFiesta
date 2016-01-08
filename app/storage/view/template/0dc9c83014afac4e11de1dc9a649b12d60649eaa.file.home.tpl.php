<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 15:01:44
         compiled from "..\app\themes\ARframework\modules\welcom\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25757566c28c8558e10-87040156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc9c83014afac4e11de1dc9a649b12d60649eaa' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\welcom\\home.tpl',
      1 => 1449546106,
      2 => 'file',
    ),
    'b591011c4eda6911339ebdb1af1920238bc71cba' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\defaultInstall.tpl',
      1 => 1449254796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25757566c28c8558e10-87040156',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566c28c879b0a4_06598792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c28c879b0a4_06598792')) {function content_566c28c879b0a4_06598792($_smarty_tpl) {?><html>
<head>
	<?php echo Html::charset("utf-8");?>

	<title><?php echo Config::get('app.title');?>
 |   Welcom</title>
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp1=ob_get_clean();?><?php echo Html::favicon($_tmp1."public/favicon.ico");?>

	<?php echo Libs::css("public/assets/css/bootstrap-3.3.1.min.css",false);?>

	<?php echo Libs::css("public/assets/css/bootstrap-theme-3.3.1.min.css",false);?>

	<?php echo Libs::css("app/modules/welcom/Resources/public/css/hello.css",false);?>

	<?php echo Libs::js("public/assets/js/jquery-1.11.3.min.js",false);?>

	<?php echo Libs::js("app/modules/welcom/Resources/public/js/hello.js",false);?>

</head>
<body>
 
		<img src="<?php echo Config::get('app.base_url');?>
public/assets/images/ArFramework_logo.png" class="img" id="hello_logo" style="display:none">
		<div id="welcom" style="display:none">
			<div class="text">
				<?php ob_start();?><?php echo Config::get('app.owner');?>
<?php $_tmp2=ob_get_clean();?><?php echo Lang::__("WELCOM",$_tmp2);?>
				
			</div>
				<?php echo ShortCode::add_shortcode("[module id=13 name=welcom view=shortcode.listing backend=1]");?>

		</div>
		<?php if (isset($_SESSION['ArFramework_pnl_fst_username'])&&$_SESSION['ArFramework_pnl_fst_username']==Config::get('panel.username')) {?>
			<div class="bottom_panel" id="bottom_panel" style="display:none">
				<a id="fst_panel" href="<?php echo Config::get('panel.route');?>
" target="_blank"><div class="btn hello_button" id="login"><?php echo Config::get('app.project');?>
 Panel</div></a>
			</div>
		<?php }?>


	
<?php echo '<script'; ?>
 type="text/javascript">
		var Timer3 = setInterval(function(){ fade3() }, 400);
		var Timer1 = setInterval(function(){ fade1() }, 500);
		var Timer2 = setInterval(function(){ fade2() }, 1000);

		function fade1 () 
		{
			$( "#welcom" ).fadeTo( "slow", 1 );
			clearInterval(Timer1);
		}

		function fade2 () 
		{
			$( "#bottom_panel" ).fadeTo( "slow", 1 );
			clearInterval(Timer2);
		}

		function fade3 () 
		{
			$( "#hello_logo" ).fadeTo( "slow", 1 );
			clearInterval(Timer3);
		}
	<?php echo '</script'; ?>
>
 
	<?php echo '<script'; ?>
>
		$(document).ready(function (){
			$("body").removeClass('installBody');
		});
	<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
