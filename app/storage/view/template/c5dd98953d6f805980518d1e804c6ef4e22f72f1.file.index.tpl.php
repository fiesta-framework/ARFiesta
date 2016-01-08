<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-13 01:46:25
         compiled from "..\app\themes\ARframework\modules\welcom\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17133566cbfe177acb0-88307494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5dd98953d6f805980518d1e804c6ef4e22f72f1' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\welcom\\index.tpl',
      1 => 1449966182,
      2 => 'file',
    ),
    'b0973a25777f12e7f630953ea5916b1004c0494b' => 
    array (
      0 => 'C:\\wamp\\www\\ARCMS\\app\\themes\\ARframework\\install.tpl',
      1 => 1449939584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17133566cbfe177acb0-88307494',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566cbfe1ada200_30088293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566cbfe1ada200_30088293')) {function content_566cbfe1ada200_30088293($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Html::charset();?>

    <title><?php echo Config::get('app.title');?>
 |   Installation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp1=ob_get_clean();?><?php echo Html::favicon($_tmp1."public/favicon.ico");?>

	<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"><?php echo '</script'; ?>
>
	
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
<body class="installBody">
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
                         Installation<span><?php echo Config::get('app.version');?>
</span>
						</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4" id="etap_1">
                    <div class="account-box">
						<h2 class="conf_title">Général</h2>
						<form class="config_form" id="form_1" role="form">
                            <div class="form-group">
                                <label for="inputNomDeDeveloppeur">Nom de développeur</label>
								<input type="text" class="form-control" id="dev_name" name="dev_name" placeholder="Votre nom">
                            </div>
                            <div class="form-group">
                                <label for="inputLangue">Langue</label>
                                <select class="form-control" id="sel1" name="langue">
									<option value="fr_FR" selected>Français</option>
									<option value="en_EN">English</option>
								</select>
                            </div>
							<div class="row-block">
								<div class="row">
									<div class="col-md-12 row-block">
									   <button class="btn btn btn-primary pull-right" name="nxt" id="nxt"type="submit">
										Suivant
										</button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
				<div class="col-md-4 col-md-offset-4" id="etap_2" style="display:none">
                    <div class="account-box">
						<h2 class="conf_title">Base de données</h2>
						<form class="config_form" id="form_2" role="form">
                            <div class="form-group">
                                <label for="inputServer">Serveur Database</label>
								<input type="text" class="form-control" id="migname" name="db_host" placeholder="Server" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> localhost</p>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Nom de Database</label>
								<input type="text" class="form-control" id="migname" name="db_name" placeholder="Database" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> test</p>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Nom de Database User</label>
								<input type="text" class="form-control" id="migname" name="db_usr" placeholder="Database User" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> root</p>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Mot de passe</label>
								<input type="text" class="form-control" id="migname" name="db_pass" placeholder="Mot de passe" value="">
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Prefixe des Tables</label>
								<input type="text" class="form-control" id="migname" name="db_prefix" placeholder="Prefixe" value="<?php $_smarty_tpl->tpl_vars['str'] = new Smarty_variable(str_shuffle('azertyuiopqsdfghjklmwxcvbn'), null, 0);
echo substr($_smarty_tpl->tpl_vars['str']->value,0,3);?>
">
								<p class="conf_input_note">Si vous gardez ce champ vide , le préfixage sera désactivé</p>
                            </div>
							<div class="row-block">
								<div class="row">
									<div class="col-md-12 row-block">
									   <button class="btn btn btn-primary pull-right" name="nxt" id="nxt" type="submit">
										Suivant
										</button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
				<div class="col-md-4 col-md-offset-4" id="etap_3" style="display:none">
                    <div class="account-box">
						<h2 class="conf_title">Sécurité</h2>
						<form class="config_form" id="form_3" role="form">
                            <div class="form-group">
                                <label for="inputKey1">clé de sécurité 1</label>
								<input type="text" class="form-control" id="migname" name="sec_1" placeholder="Server" value="<?php echo md5(uniqid(rand(),true));?>
" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputKey2">clé de sécurité 2</label>
                                <input type="text" class="form-control" id="migname" name="sec_2" placeholder="Database" value="<?php echo md5(uniqid(rand(),true));?>
" readonly>
                            </div>
							<div class="row-block">
								<div class="row">
									<div class="col-md-12 row-block">
									   <button class="btn btn btn-primary pull-right" name="nxt" id="nxt"type="submit">
										Suivant
										</button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
			<div class="col-md-4 col-md-offset-4" id="etap_4" style="display:none">
                    <div class="account-box">
						<h2 class="conf_title">Panel</h2>
						<form class="config_form" id="form_4" role="form">
                            <div class="form-group">
                                <label for="inputServer">Etat</label>
								<select class="form-control" id="sel1" name="state">
									<option value="true" selected>Activé</option>
									<option value="false">Désactivé</option>
								</select>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Identifiant</label>
								<input type="text" class="form-control" id="migname" name="username" placeholder="Identifiant" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> admin</p>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Mot de passe</label>
								<input type="text" class="form-control" id="migname" name="password" placeholder="Mot de passe" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> 123</p>
                            </div>
							<div class="row-block">
								<div class="row">
									<div class="col-md-12 row-block">
									   <button class="btn btn btn-primary pull-right" name="nxt" id="nxt" type="submit">
										Suivant
										</button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">© 2015 <a href="#"><?php echo Config::get('app.project');?>
</a> All Rights Reserved</h6>
        </div>
    </div>

    <!--  END OF PAPER WRAP -->
    <!-- MAIN EFFECT -->
	
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
		var baselinks = "<?php echo Config::get('app.base_url');?>
"; 
	<?php echo '</script'; ?>
>
	<?php echo Libs::js("app/modules/welcom/Resources/public/js/hello.js",false);?>

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
 type="text/javascript">
		var Timer3 = setInterval(function(){ fade3() }, 400);
		var Timer1 = setInterval(function(){ fade1() }, 500);
		var Timer2 = setInterval(function(){ fade2() }, 1000);
		function fade1(){
			$( "#welcom" ).fadeTo( "slow", 1 );
			clearInterval(Timer1);
		}
		function fade2(){
			$( "#bottom_panel" ).fadeTo( "slow", 1 );
			clearInterval(Timer2);
		}
		function fade3(){
			$( "#hello_logo" ).fadeTo( "slow", 1 );
			clearInterval(Timer3);
		}
	<?php echo '</script'; ?>
>
	
</body>
</html>
<?php }} ?>
