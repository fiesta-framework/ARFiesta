<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-10 19:22:52
         compiled from "..\app\themes\ARframework\modules\backend\mvc_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42835669c2fcc48159-73814984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a11d0951d3d0132e9418f759b08607b7a09dbf19' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\backend\\mvc_view.tpl',
      1 => 1449771538,
      2 => 'file',
    ),
    '8e7df0294cadfdf84cc4b1412c27976c4e19e4c5' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\base.tpl',
      1 => 1449768481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42835669c2fcc48159-73814984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5669c2fd3b4df1_64474891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669c2fd3b4df1_64474891')) {function content_5669c2fd3b4df1_64474891($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Html::charset();?>

    <title><?php echo Config::get('app.title');?>
 |   Views</title>
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

		
<?php ob_start();
echo Config::get('app.base_url');
$_tmp12=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp13=ob_get_clean();?><?php echo Libs::css($_tmp12."app/themes/".$_tmp13."/assets/medias/js/tree/jquery.treeview",false);?>


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
                <h2 class="tittle-content-header"><span class="icon-preview"></span><span> Views</span></h2>
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
	<li>Views</li>
</ul>

            <!-- END OF BREADCRUMB -->
            <!--  DEVICE MANAGER -->
			
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-4">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Nouvelle vue</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="new_view" method="post" name="new_view" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label" for="name">Dossier</label>
                                                <div class="controls">
													<select class="form-control" id="dossier" name="dossier">
														<option value="Back-end" selected="selected">Back-end</option>
														<option value="Front-end">Front-end</option>
													</select>
                                                </div>
                                            </div>
											<div class="control-group">
                                                <label class="control-label" for="name">Module</label>
                                                <div class="controls">
													<select class="form-control" id="module" name="module">
														<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
															<?php $_smarty_tpl->tpl_vars['r'] = new Smarty_variable(explode('modules/',$_smarty_tpl->tpl_vars['value']->value), null, 0);?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value[1];?>
</option>
														<?php } ?>
													</select>
                                                </div>
                                            </div>
											<div class="control-group">
                                                <label class="control-label" for="name">Nom de la vue</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="new_view_file_name" name="new_view_file_name" placeholder="Nom de fichier">
													<input type="hidden" name="pathview" value="<?php echo Config::get('themes.basepath');?>
">
													<input type="hidden" name="ThemeName" value="<?php echo Config::get('themes.name');?>
">
													<label>* vous pouvez créer des vues dans des dossiers, même s'ils ne sont pas existés, en utilisant '.', par exemple: "user.show"</label>
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<input type="submit" value="Créé" class="btn btn-primary" />
												<input type="hidden" name="action" value="new_view">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>	
                        </div>
        </div>
		<div class="col-sm-4">
						<div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-dashboard"></span>&nbsp;Back-end</h6>
                            </div>
                            <div id="RealTime" style="min-height:296px;" class="body-nest">
                            <div class="table-responsive">
								<?php echo $_smarty_tpl->tpl_vars['listeviewBackend']->value;?>

                            </div>
                            </div>	
                        </div>
        </div>
		<div class="col-sm-4">
						<div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="icon icon-monitor"></span>&nbsp;Front-end</h6>
                            </div>
                            <div id="RealTime" style="min-height:296px;" class="body-nest">
                            <div class="table-responsive">
								<?php echo $_smarty_tpl->tpl_vars['listeviewFrontend']->value;?>

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
$_tmp14=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp15=ob_get_clean();?><?php echo Libs::js($_tmp14."app/themes/".$_tmp15."/assets/medias/js/preloader.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp16=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp17=ob_get_clean();?><?php echo Libs::js($_tmp16."app/themes/".$_tmp17."/assets/medias/js/bootstrap.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp18=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp19=ob_get_clean();?><?php echo Libs::js($_tmp18."app/themes/".$_tmp19."/assets/medias/js/flexgrid/js/flexigrid.pack.js",false);?>
	
	<?php echo '<script'; ?>
>
		var links = "<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/"; 
	<?php echo '</script'; ?>
>
    <?php ob_start();
echo Config::get('app.base_url');
$_tmp20=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp21=ob_get_clean();?><?php echo Libs::js($_tmp20."app/themes/".$_tmp21."/assets/medias/js/app.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp22=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp23=ob_get_clean();?><?php echo Libs::js($_tmp22."app/themes/".$_tmp23."/assets/medias/js/load.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp24=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp25=ob_get_clean();?><?php echo Libs::js($_tmp24."app/themes/".$_tmp25."/assets/medias/js/main.js",false);?>

	 
<?php ob_start();
echo Config::get('app.base_url');
$_tmp26=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp27=ob_get_clean();?><?php echo Libs::js($_tmp26."app/themes/".$_tmp27."/assets/medias/js/tree/lib/jquery.cookie.js",false);?>

<?php ob_start();
echo Config::get('app.base_url');
$_tmp28=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp29=ob_get_clean();?><?php echo Libs::js($_tmp28."app/themes/".$_tmp29."/assets/medias/js/tree/jquery.treeview.js",false);?>

<?php echo '<script'; ?>
>
$(document).ready(function (){
	$('#mvc').addClass('active');
	$(".filetree").treeview({
        animated: "fast",
        collapsed: true,
        unique: true,
        persist: "cookie",
        toggle: function() {
			//window.console && console.log("%o was toggled", this);
        }
    });
});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>