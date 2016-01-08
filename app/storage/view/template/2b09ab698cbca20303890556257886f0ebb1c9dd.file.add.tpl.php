<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-11 03:00:13
         compiled from "..\app\themes\ARframework\modules\page\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3517566a2e2d79a704-60788710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b09ab698cbca20303890556257886f0ebb1c9dd' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\page\\add.tpl',
      1 => 1449788390,
      2 => 'file',
    ),
    '8e7df0294cadfdf84cc4b1412c27976c4e19e4c5' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\base.tpl',
      1 => 1449790155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3517566a2e2d79a704-60788710',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566a2e2dc595a5_38090843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a2e2dc595a5_38090843')) {function content_566a2e2dc595a5_38090843($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Html::charset();?>

    <title><?php echo Config::get('app.title');?>
 |   Nouvelle Page</title>
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
$_tmp3=ob_get_clean();?><?php echo Libs::css($_tmp2."app/themes/".$_tmp3."/assets/medias/css/style",false);?>

			<?php ob_start();
echo Config::get('app.base_url');
$_tmp4=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp5=ob_get_clean();?><?php echo Libs::css($_tmp4."app/themes/".$_tmp5."/assets/medias/css/loader-style",false);?>

			<?php ob_start();
echo Config::get('app.base_url');
$_tmp6=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp7=ob_get_clean();?><?php echo Libs::css($_tmp6."app/themes/".$_tmp7."/assets/medias/css/bootstrap",false);?>

			<?php ob_start();
echo Config::get('app.base_url');
$_tmp8=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp9=ob_get_clean();?><?php echo Libs::css($_tmp8."app/themes/".$_tmp9."/assets/medias/js/button/ladda/ladda.min",false);?>

			<?php ob_start();
echo Config::get('app.base_url');
$_tmp10=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp11=ob_get_clean();?><?php echo Libs::css($_tmp10."app/themes/".$_tmp11."/assets/medias/js/flexgrid/css/flexigrid.pack",false);?>

		 
<style>
.flexigrid div.fbutton .add {
	background: url(<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/js/flexgrid/css/images/add.png) no-repeat center left;
}
.flexigrid div.fbutton .delete {
    background: url(<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/js/flexgrid/css/images/close.png) no-repeat center left;
}
.flexigrid div.fbutton .edit {
	background: url(<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/js/flexgrid/css/images/edit.png) no-repeat center left;
}
#mceu_13{
	border-width: 0px !important;
}
#textarea{
	margin: 0px;
    padding: 1px;
}
.inputcls{
    height: 57px !important;
    font-size: 36px !important;
    font-weight: 300;
}
</style>

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
    <!-- TOP NAVBAR -->
    <?php echo $_smarty_tpl->getSubTemplate ('../../inc/topNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /END OF TOP NAVBAR -->
    <!-- SIDE MENU -->
    <?php echo $_smarty_tpl->getSubTemplate ('../../inc/sideMenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- END OF SIDE MENU -->
    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <!-- CONTENT -->
            <!--TITLE -->
			
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="icon icon-document-new"></span><span> Nouvelle Page</span></h2>
            </div>
        <div class="col-sm-9">
            <div class="devider-vertical visible-lg"></div>
                <div class="tittle-middle-header">
                    <div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <span class="tittle-alert entypo-info-circled"></span>
                            Welcome back,&nbsp;
                        <strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                    </div>
                </div>
        </div>
    </div>
</div>

            <!--/ TITLE -->
            <!-- BREADCRUMB -->
			
<ul id="breadcrumb">
	<li><span class="entypo-home"></span></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li><a href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
" title="Sample page 1">Backend</a></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li>Nouvelle Page</li>
</ul>

            <!-- END OF BREADCRUMB -->
            <!--  DEVICE MANAGER -->
			
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-8">
                        <div class="nest" id="DripClose">
                            <div class="title-alt">
                                <h6><span class="icon icon-document-new"></span> Nouvelle page</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#DriptClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Drip">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="masked">
                                <div class="well">
                                    <div class="input-group">
										<span class="input-group-addon ">Titre</span>
                                        <input type="text" class="form-control inputcls">
                                    </div>
                                </div>
								<div class="well" id="textarea">
                                    <div class="input-group" style="width: 100%;">
                                        <textarea class="form-control" id="texteditor"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
			<div class="col-sm-4">
				<div class="col-sm-12">
					<div class="nest" id="DripClose">
							<div class="title-alt">
                                <h6>Publier</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#DriptClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Drip">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="masked">
                                <div>
                                    <div class="well">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
                <div class="col-sm-12">
					<div class="nest" id="DripClose">
							<div class="title-alt">
                                <h6>Publier</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#DriptClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Drip">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="masked">
                                <div>
                                    <div class="well">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>    
            </div>  			
		</div>
	</div>
</div>

            <!--  / DEVICE MANAGER -->
			<!-- FOOTER -->
			<?php echo $_smarty_tpl->getSubTemplate ('../../inc/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <!-- / END OF FOOTER -->
        </div>
    </div>
    <!--  END OF PAPER WRAP -->
    <!-- RIGHT SLIDER CONTENT -->
    <?php echo $_smarty_tpl->getSubTemplate ('../../inc/SlideBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- END OF RIGHT SLIDER CONTENT-->
    <!-- MAIN EFFECT -->
	

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp12=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp13=ob_get_clean();?><?php echo Libs::js($_tmp12."app/themes/".$_tmp13."/assets/medias/js/preloader.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp14=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp15=ob_get_clean();?><?php echo Libs::js($_tmp14."app/themes/".$_tmp15."/assets/medias/js/bootstrap.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp16=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp17=ob_get_clean();?><?php echo Libs::js($_tmp16."app/themes/".$_tmp17."/assets/medias/js/flexgrid/js/flexigrid.pack.js",false);?>
	
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
$_tmp18=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp19=ob_get_clean();?><?php echo Libs::js($_tmp18."app/themes/".$_tmp19."/assets/medias/js/app.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp20=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp21=ob_get_clean();?><?php echo Libs::js($_tmp20."app/themes/".$_tmp21."/assets/medias/js/load.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp22=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp23=ob_get_clean();?><?php echo Libs::js($_tmp22."app/themes/".$_tmp23."/assets/medias/js/main.js",false);?>

	 
<?php echo '<script'; ?>
>
$(document).ready(function (){
	$('#cms').addClass('active');
});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
