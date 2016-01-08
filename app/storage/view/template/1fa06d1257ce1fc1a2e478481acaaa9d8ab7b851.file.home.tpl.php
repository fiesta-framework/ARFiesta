<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-14 02:27:03
         compiled from "..\app\themes\ARframework\modules\welcom\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17330566e1ae7e5d7c2-38973544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa06d1257ce1fc1a2e478481acaaa9d8ab7b851' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\welcom\\home.tpl',
      1 => 1449929111,
      2 => 'file',
    ),
    '124e0210b70c10b4066047c3c540dd607201bbf0' => 
    array (
      0 => 'C:\\wamp\\www\\ARCMS\\app\\themes\\ARframework\\defaultInstall.tpl',
      1 => 1449254796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17330566e1ae7e5d7c2-38973544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566e1ae8165349_18465594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e1ae8165349_18465594')) {function content_566e1ae8165349_18465594($_smarty_tpl) {?><html>
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
