<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-08 22:17:12
         compiled from "..\app\themes\ARframework\modules\user\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1416056902758c9b192-19088295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2af98d5d5bd66a607871a7c1c4592e11212cedce' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\user\\login.tpl',
      1 => 1449965612,
      2 => 'file',
    ),
    '9e0942bdf643058a8a4bce76fca1f0a2531e49cb' => 
    array (
      0 => 'C:\\wamp\\www\\ARFIESTACMS\\app\\themes\\ARframework\\base_login.tpl',
      1 => 1449963207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1416056902758c9b192-19088295',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_569027590bffe0_48687566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569027590bffe0_48687566')) {function content_569027590bffe0_48687566($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Html::charset();?>

    <title><?php echo Config::get('app.title');?>
 |   Authentification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp1=ob_get_clean();?><?php echo Html::favicon($_tmp1."public/favicon.ico");?>

	<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"><?php echo '</script'; ?>
>
	<?php echo Libs::js("app/modules/welcom/Resources/public/js/hello.js",false);?>

	
		<?php ob_start();
echo Config::get('app.base_url');
$_tmp2=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp3=ob_get_clean();?><?php echo Libs::css($_tmp2."app/themes/".$_tmp3."/assets/medias/css/loader-style",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp4=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp5=ob_get_clean();?><?php echo Libs::css($_tmp4."app/themes/".$_tmp5."/assets/medias/css/bootstrap",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp6=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp7=ob_get_clean();?><?php echo Libs::css($_tmp6."app/themes/".$_tmp7."/assets/medias/css/signin",false);?>

	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
        <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/ico/minus.png">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
	
<div class="container">
        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo-login">
                        <h1><img src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/img/logo.png" style="">
                         Connexion<span><?php echo Config::get('app.version');?>
</span>
						</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="account-box">
						<form accept-charset="UTF-8"  id="formconnexion" role="form" class="form-signin" method="post" action="#">
                            <div class="form-group">
                                <a href="#" class="pull-right label-forgot" style="display:none">Forgot email?</a>
                                <label for="inputPass1">Username</label>
								<input class="form-control lg_input" placeholder="Username" name="username" id="username" type="text">
                            </div>
                            <div class="form-group">
                                <a href="#" class="pull-right label-forgot" style="display:none">Forgot password?</a>
                                <label for="inputPassword">Mot de passe </label>
                                <input class="form-control lg_input" placeholder="Mot de passe " name="password" id="password" type="password">
                            </div>
                            <button class="btn btn btn-primary pull-right" id="login" type="submit">
                                Connexion
                            </button>
                        </form>
                        <a class="forgotLnk" href="index.html"></a>
                        <div class="or-box" style="display:none">
                            <center><span class="text-center login-with">Login or <b>Sign Up</b></span></center>
                            <div class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-facebook btn-block">
                                        <span class="entypo-facebook space-icon"></span>Facebook</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-twitter btn-block">
                                        <span class="entypo-twitter space-icon"></span>Twitter</a>
                                </div>
                            </div>
                            <div style="margin-top:25px" class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-google btn-block"><span class="entypo-gplus space-icon"></span>Google +</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-instagram btn-block"><span class="entypo-instagrem space-icon"></span>Instagram</a>
                                </div>
                            </div>
                        </div>
                        <hr style="display:none">
                        <div class="row-block">
                            <div class="row">
                                <div class="col-md-12 row-block" style="display:none">
                                    <a href="index.html" class="btn btn-primary btn-block">Create New Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">© <?php echo Config::get('app.title');?>
 2015</h6>
        </div>
    </div>

    <!--  END OF PAPER WRAP -->
	

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp8=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp9=ob_get_clean();?><?php echo Libs::js($_tmp8."app/themes/".$_tmp9."/assets/medias/js/preloader.js",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp10=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp11=ob_get_clean();?><?php echo Libs::js($_tmp10."app/themes/".$_tmp11."/assets/medias/js/bootstrap.js",false);?>

		<?php echo '<script'; ?>
>
			var links = "<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/"; 
			var base = "<?php echo Config::get('app.base_url');?>
";
		<?php echo '</script'; ?>
>
		<?php ob_start();
echo Config::get('app.base_url');
$_tmp12=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp13=ob_get_clean();?><?php echo Libs::js($_tmp12."app/themes/".$_tmp13."/assets/medias/js/app.js",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp14=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp15=ob_get_clean();?><?php echo Libs::js($_tmp14."app/themes/".$_tmp15."/assets/medias/js/load.js",false);?>

		<?php ob_start();
echo Config::get('app.base_url');
$_tmp16=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp17=ob_get_clean();?><?php echo Libs::js($_tmp16."app/themes/".$_tmp17."/assets/medias/js/main.js",false);?>

	
<?php echo '<script'; ?>
>
$( document ).ready(function() {
	$('#formconnexion').submit(function () {
		$.post("<?php echo Config::get('app.base_url');?>
user/auth",$('#formconnexion').serialize(),function(data){
            if(data=="ok"){
				location.href = "<?php echo Config::get('app.base_url');?>
backend";
			}
            else alert('Un erreur est survenue');
        }).fail(function() {
			alert( "Utilisateur inconnue !" );
		});
        //
        return false;
    });
});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
