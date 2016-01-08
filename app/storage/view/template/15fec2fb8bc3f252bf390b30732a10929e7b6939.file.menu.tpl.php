<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-31 16:40:40
         compiled from "..\app\themes\ARframework\modules\page\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:985056854c783bd730-97513540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15fec2fb8bc3f252bf390b30732a10929e7b6939' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\page\\menu.tpl',
      1 => 1450892866,
      2 => 'file',
    ),
    '5c0c5d27d108802772e2b9f00cfd99ecd372f651' => 
    array (
      0 => 'C:\\wamp\\www\\ARCMS\\app\\themes\\ARframework\\base.tpl',
      1 => 1450887131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '985056854c783bd730-97513540',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56854c78cbe454_05097584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56854c78cbe454_05097584')) {function content_56854c78cbe454_05097584($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Html::charset();?>

    <title><?php echo Config::get('app.title');?>
 |   Menus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp1=ob_get_clean();?><?php echo Html::favicon($_tmp1."public/favicon.ico");?>

	    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"><?php echo '</script'; ?>
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
$_tmp13=ob_get_clean();?><?php echo Libs::css($_tmp12."app/themes/".$_tmp13."/assets/medias/js/iCheck/flat/all",false);?>

<?php ob_start();
echo Config::get('app.base_url');
$_tmp14=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp15=ob_get_clean();?><?php echo Libs::css($_tmp14."app/themes/".$_tmp15."/assets/medias/js/iCheck/line/all",false);?>

<?php ob_start();
echo Config::get('app.base_url');
$_tmp16=ob_get_clean();?><?php echo Libs::css($_tmp16."app/modules/page/Resources/public/css/menu",false);?>


		
		
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
                <h2 class="tittle-content-header"><span class="entypo-resize-small"></span><span> Menus</span></h2>
            </div>
        <div class="col-sm-9">
            <div class="devider-vertical visible-lg"></div>
                <div class="tittle-middle-header">
                    <div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <span id="messageIcon"></span>
                        <span id="message"></span>
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
	<li>Menus</li>
</ul>

            <!-- END OF BREADCRUMB -->
            <!--  DEVICE MANAGER -->
			
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-12">
                <div class="nest">
					<div class="title-alt">
						<div style="padding: 1%;">
							<form role="form" id="select-menu" method="post" class="form-inline">
                                        <div class="form-group">
                                            Sélectionnez le menu à modifier :
                                        </div>
                                        <div class="form-group">
											<select name="liste_menu"  class="form-control" id="select-menu-to-edit">
												<?php $_smarty_tpl->tpl_vars['GetAllmenus'] = new Smarty_variable($_smarty_tpl->tpl_vars['getListeMenu']->value, null, 0);?>								
												<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['menu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['name'] = 'menu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['GetAllmenus']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total']);
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['GetAllmenus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['GetAllmenus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['title'];?>
</option>
												<?php endfor; endif; ?>
											</select>
                                        </div>
										<div class="form-group">
											&nbsp;<button class="btn btn-info" type="submit">Sélectionner</button>&nbsp;
										</div>
										<div class="form-group">
											<span>ou</span>
												<a href="#" id="add_new"> Créez un nouveau menu</a>
											<span> .</span>
										</div>
										<div class="form-group pull-right">
											<a href="#" style="font-size: 18px;">Supprimer le menu <span class="icon icon-trash" style="font-size: 21px;color:red"></span></a>
										</div>
                            </form>
						</div>
					</div>
				</div> 			
			</div>
			<div class="col-sm-4" style="padding: 0px;">
				<div class="col-sm-12">
					<div class="nest">
							<div class="title-alt">
								<h6>Pages</h6>
								<div class="titleToggle">
									<a class="nav-toggle-alt" href="#BPages">
										<span class="entypo-up-open"></span>
									</a>
								</div>
							</div>
							<div class="body-nest" id="BPages" style="display:none">
								<div class="well">
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#toute" aria-controls="toute" role="tab" data-toggle="tab">Les plus récentes</a></li>
										<li role="presentation"><a href="#topcat" aria-controls="topcat" role="tab" data-toggle="tab">Afficher tout</a></li>
									</ul>
									  <!-- Tab panes -->
									<div class="tab-content" style="height: 200px;overflow: auto;padding-top: 5%;padding-left: 5%;padding-bottom: 5%;background-color: #fdfdfd;margin-bottom: 2%;" id="categorie">
										<div role="tabpanel" class="tab-pane active" id="toute">
											<div class="skin skin-flat">
												<ul class="list" id="checkedRecentPage" style="padding-left: 0px;">
													<?php $_smarty_tpl->tpl_vars['recentPages'] = new Smarty_variable($_smarty_tpl->tpl_vars['getAllRecentPage']->value, null, 0);?>								
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['page'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['page']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['name'] = 'page';
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recentPages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total']);
?>
													<li>
														<input type="checkbox" name="recentpage" data-name="<?php echo $_smarty_tpl->tpl_vars['recentPages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['post_name'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['recentPages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['post_title'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['recentPages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['ID'];?>
">
														<label for="flat-checkbox-1" style="font-weight: 500;">
															<?php echo $_smarty_tpl->tpl_vars['recentPages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['post_title'];?>

														</label>
													</li>
													<?php endfor; endif; ?>
												</ul>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="topcat">
											<div class="skin skin-flat">
												<ul class="list" id="checkedAllPage" style="padding-left: 0px;">
													<?php $_smarty_tpl->tpl_vars['pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['getAllPage']->value, null, 0);?>								
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['page'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['page']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['name'] = 'page';
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total']);
?>
													<li>
														<input type="checkbox" data-name="<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['post_name'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['post_title'];?>
" name="allpage" value="<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['ID'];?>
">
														<label for="flat-checkbox-1" style="font-weight: 500;">
															<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['post_title'];?>

														</label>
													</li>
													<?php endfor; endif; ?>
												</ul>
											</div>
										</div>
									</div>
									<a href="#"><span class="entypo-list-add"></span> Tout sélectionner</a>
									&nbsp;<span class="pull-right"><button class="btn btn-info" disabled id="addToMenuPage" type="submit">Ajouter au menu</button></span>
								</div>
                            </div>
					</div> 			
				</div>
				<div class="col-sm-12">
					<div class="nest">
							<div class="title-alt" style="margin: 0px auto 0;">
								<h6>Articles</h6>
								<div class="titleToggle">
									<a class="nav-toggle-alt" href="#BArticles">
										<span class="entypo-up-open"></span>
									</a>
								</div>
							</div>
							<div class="body-nest" id="BArticles" style="display:none">
								<div class="well">
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#art_toute" aria-controls="art_toute" role="tab" data-toggle="tab">Les plus récentes</a></li>
										<li role="presentation"><a href="#art_topcat" aria-controls="art_topcat" role="tab" data-toggle="tab">Afficher tout</a></li>
									</ul>
									  <!-- Tab panes -->
									<div class="tab-content" style="height: 200px;overflow: auto;padding-top: 5%;padding-left: 5%;padding-bottom: 5%;background-color: #fdfdfd;margin-bottom: 2%;" id="categorie">
										<div role="tabpanel" class="tab-pane active" id="art_toute">
											<div class="skin skin-flat">
												<ul class="list" style="padding-left: 0px;">
													<ul class="list" style="padding-left: 0px;">
													<?php $_smarty_tpl->tpl_vars['recentPosts'] = new Smarty_variable($_smarty_tpl->tpl_vars['getAllRecentPost']->value, null, 0);?>								
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['name'] = 'recentPost';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recentPosts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recentPost']['total']);
?>
													<li>
														<input type="checkbox" name="recentarticle" data-name="<?php echo $_smarty_tpl->tpl_vars['recentPosts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recentPost']['index']]['post_name'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['recentPosts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recentPost']['index']]['post_title'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['recentPosts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recentPost']['index']]['ID'];?>
">
														<label for="flat-checkbox-1" style="font-weight: 500;">
															<?php echo $_smarty_tpl->tpl_vars['recentPosts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recentPost']['index']]['post_title'];?>

														</label>
													</li>
													<?php endfor; endif; ?>
												</ul>
												</ul>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="art_topcat">
											<div class="skin skin-flat">
												<ul class="list" style="padding-left: 0px;">
													<ul class="list" style="padding-left: 0px;">
													<?php $_smarty_tpl->tpl_vars['posts'] = new Smarty_variable($_smarty_tpl->tpl_vars['getAllPost']->value, null, 0);?>								
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['post'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['post']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['name'] = 'post';
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['post']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['post']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['post']['total']);
?>
													<li>
														<input type="checkbox" name="allarticle" data-name="<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_name'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_title'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['ID'];?>
">
														<label for="flat-checkbox-1" style="font-weight: 500;">
															<?php echo $_smarty_tpl->tpl_vars['posts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['post']['index']]['post_title'];?>

														</label>
													</li>
													<?php endfor; endif; ?>
													</ul>
												</ul>
											</div>
										</div>
									</div>
									<a href="#"><span class="entypo-list-add"></span> Tout sélectionner</a>
									&nbsp;<span class="pull-right"><button class="btn btn-info" disabled id="addToMenuArticle" type="submit">Ajouter au menu</button></span>
								</div>
                            </div>
					</div> 			
				</div>	
				<div class="col-sm-12">
					<div class="nest">
							<div class="title-alt" style="margin: 0px auto 0;">
								<h6>Liens personnalisés	</h6>
								<div class="titleToggle">
									<a class="nav-toggle-alt" href="#LiensPersonnalises">
										<span class="entypo-up-open"></span>
									</a>
								</div>
							</div>
							<div class="body-nest" id="LiensPersonnalises" style="height:141px;display:none">
									<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label">Link</label>
												<div class="col-lg-10">
													<input type="text" value="http://" name="inputLink" id="inputLink" class="form-control">
													<p class="help-block" style=""></p>
												</div>
									</div>
									<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label">Title</label>
												<div class="col-lg-10">
													<input type="text" placeholder="Élément du menu" name="inputElementMenu" id="inputElementMenu" class="form-control">
													<p class="help-block"></p>
												</div>
									</div>
									<div class="form-group pull-right">
										<div class="col-lg-12">
											<button class="btn btn-info" id="addToMenuLink" type="submit">Ajouter au menu</button>
										</div>
									</div>
                            </div>
					</div> 			
				</div>
				<div class="col-sm-12">
					<div class="nest">
							<div class="title-alt" style="margin: 0px auto 0;">
								<h6>Catégories</h6>
								<div class="titleToggle">
									<a class="nav-toggle-alt" href="#BCategories">
										<span class="entypo-up-open"></span>
									</a>
								</div>
							</div>
							<div class="body-nest" id="BCategories" style="display:none">
								<div class="well">
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#cat_toute" aria-controls="cat_toute" role="tab" data-toggle="tab">Les plus récentes</a></li>
										<li role="presentation"><a href="#cat_topcat" aria-controls="cat_topcat" role="tab" data-toggle="tab">Afficher tout</a></li>
									</ul>
									  <!-- Tab panes -->
									<div class="tab-content" style="height: 200px;overflow: auto;padding-top: 5%;padding-left: 5%;padding-bottom: 5%;background-color: #fdfdfd;margin-bottom: 2%;" id="categorie">
										<div role="tabpanel" class="tab-pane active" id="cat_toute">
											<div class="skin skin-flat">
												<ul class="list" style="padding-left: 0px;">
													<li>
														<input type="checkbox" id="flat-checkbox-1">
														<label for="flat-checkbox-1" style="font-weight: 500;">Checkbox 1</label>
													</li>
													<li>
														<input type="checkbox" id="flat-checkbox-2">
														<label for="flat-checkbox-2" style="font-weight: 500;">Checkbox 2</label>
													</li>
												</ul>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="cat_topcat">
											<div class="skin skin-flat">
												<ul class="list" style="padding-left: 0px;">
													<li>
														<input type="checkbox">
														<label for="flat-checkbox-1" style="font-weight: 500;">Checkbox 1</label>
													</li>
													<li>
														<input type="checkbox">
														<label for="flat-checkbox-2" style="font-weight: 500;">Checkbox 2</label>
													</li>
													<li>
														<input type="checkbox">
														<label for="flat-checkbox-3" style="font-weight: 500;">Checkbox 3</label>
													</li>
													<li>
														<input type="checkbox">
														<label for="flat-checkbox-4" style="font-weight: 500;">Checkbox 4</label>
													</li>
													<li>
														<input type="checkbox">
														<label for="flat-checkbox-4" style="font-weight: 500;">Checkbox 5</label>
													</li>
													<li>
														<input type="checkbox">
														<label for="flat-checkbox-4" style="font-weight: 500;">Checkbox 6</label>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<a href="#"><span class="entypo-list-add"></span> Tout sélectionner</a>
									&nbsp;<span class="pull-right"><button class="btn btn-info" type="submit">Ajouter au menu</button></span>
								</div>
                            </div>
					</div> 			
				</div>	
			</div>
			<div class="col-sm-8">
                <div class="nest" id="Form">
                    <div class="title-alt">
                        <div style="padding: 1%;">
							<form role="form" id="SaveData" method="post"class="form-inline">
                                        <div class="form-group">
                                            <i>Nom du menu</i>
                                        </div>
                                        <div class="form-group">
											&nbsp;<input id="big_menu" name="menu" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['getMenu']->value['title'];?>
" style="width: 7cm;" />
											<input id="id_menu" name="id_menu" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['getMenu']->value['id'];?>
" />
											<input id="action_menu" name="action_menu" type="hidden" class="form-control" value="update" />
                                        </div>
										<div class="form-group pull-right">
											<button  class="btn btn-warning"  type="submit">Enregistrer le menu</button>
										</div>
                            </form>
						</div>
                    </div>
                    <div class="body-nest" style="height: 625px;">
						<p>
							<h4>Structure du menu</h4>
							<p>Glissez chaque élément pour les placer dans l’ordre que vous préférez. Cliquez sur la flèche à droite de l’élément pour afficher d’autres options de configuration.</p>
						</p>
						<div id="menuDragAndDrop">
							<ol class="dd-list" id="listeMenus" style="width: 66%;">
								<?php $_smarty_tpl->tpl_vars['menus'] = new Smarty_variable($_smarty_tpl->tpl_vars['getAllMenu']->value, null, 0);?>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['menu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['name'] = 'menu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menus']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['menu']['total']);
?>
								<?php if (count($_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['sublink'])>0) {?>
								<li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['id'];?>
">
									<div class="dd-handle dd3-handle">Drag</div>
									<div class="dd3-content"><?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['title'];?>
 <i style="font-size: 10px;color: #999;">Sous Menu</i>
										<span class="pull-right" data-type="details">

											<a class="editMenu" data-id="<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['id'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['title'];?>
" href="#" style="color: #757575;">
												<span class="entypo-down-open"></span>
											</a>
										</span>
									</div>
									<div class="contentmenu" style="display:none"></div>
									<ol class="dd-list">
										<?php $_smarty_tpl->tpl_vars['sbmnu'] = new Smarty_variable($_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['sublink'], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['submenu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['name'] = 'submenu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sbmnu']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['submenu']['total']);
?>
										<li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['sbmnu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['submenu']['index']]['id'];?>
">
											<div class="dd-handle dd3-handle">Drag</div>
											<div class="dd3-content"><?php echo $_smarty_tpl->tpl_vars['sbmnu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['submenu']['index']]['title'];?>

												<span class="pull-right">
													
													<a class="editMenu" data-id="<?php echo $_smarty_tpl->tpl_vars['sbmnu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['submenu']['index']]['id'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['sbmnu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['submenu']['index']]['title'];?>
" href="#" style="color: #757575;">
														<span class="entypo-down-open"></span>
													</a>
												</span>
											</div>
										</li>
										<div class="contentmenu" style="display:none"></div>
										<?php endfor; endif; ?>
									</ol>
								</li>
								<?php } else { ?>
								<li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['id'];?>
">
									<div class="dd-handle dd3-handle">Drag</div>
									<div class="dd3-content"><?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['title'];?>

										<span class="pull-right">

											<a class="editMenu" data-id="<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['id'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['menu']['index']]['title'];?>
" href="#" style="color: #757575;">
												<span class="entypo-down-open"></span>
											</a>
										</span>
									</div>
								</li>
								<div class="contentmenu" style="display:none"></div>
								<?php }?>
								<?php endfor; endif; ?>
							</ol>
							<div class="well" id="resultat" style="display:block"></div>
						</div>
						<hr/>
						<p>
							<h4>Réglages du menu</h4>
							<p>
								<div class="form-group"  id="settingMenu">
                                    <label class="col-lg-4 col-sm-4 control-label" for="inputEmail1">Emplacements du thème</label>
                                    <div class="col-lg-8">
                                        <ul class="list" style="padding-left: 0px;padding-right: 135px;">
											<li>
												<input type="checkbox">
												<label for="flat-checkbox-1" style="font-weight: 500;">Main Menu</label>
											</li>
										</ul>
										
										<ul class="list" style="padding-left: 0px;padding-right: 135px;">
											<li>
												<input type="checkbox">
												<label for="flat-checkbox-1" style="font-weight: 500;">Footer Menu</label>
											</li>
										</ul>
                                    </div>
                                </div>
							</p>
						</p>
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
$_tmp17=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp18=ob_get_clean();?><?php echo Libs::js($_tmp17."app/themes/".$_tmp18."/assets/medias/js/preloader.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp19=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp20=ob_get_clean();?><?php echo Libs::js($_tmp19."app/themes/".$_tmp20."/assets/medias/js/bootstrap.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp21=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp22=ob_get_clean();?><?php echo Libs::js($_tmp21."app/themes/".$_tmp22."/assets/medias/js/flexgrid/js/flexigrid.pack.js",false);?>
	
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
$_tmp23=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp24=ob_get_clean();?><?php echo Libs::js($_tmp23."app/themes/".$_tmp24."/assets/medias/js/app.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp25=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp26=ob_get_clean();?><?php echo Libs::js($_tmp25."app/themes/".$_tmp26."/assets/medias/js/load.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp27=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp28=ob_get_clean();?><?php echo Libs::js($_tmp27."app/themes/".$_tmp28."/assets/medias/js/main.js",false);?>

	 
<?php ob_start();
echo Config::get('app.base_url');
$_tmp29=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp30=ob_get_clean();?><?php echo Libs::js($_tmp29."app/themes/".$_tmp30."/assets/medias/js/button/ladda/spin.min.js",false);?>

<?php ob_start();
echo Config::get('app.base_url');
$_tmp31=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp32=ob_get_clean();?><?php echo Libs::js($_tmp31."app/themes/".$_tmp32."/assets/medias/js/button/ladda/ladda.min.js",false);?>

<?php ob_start();
echo Config::get('app.base_url');
$_tmp33=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp34=ob_get_clean();?><?php echo Libs::js($_tmp33."app/themes/".$_tmp34."/assets/medias/js/button/progressbutton.jquery.js",false);?>

<?php ob_start();
echo Config::get('app.base_url');
$_tmp35=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp36=ob_get_clean();?><?php echo Libs::js($_tmp35."app/themes/".$_tmp36."/assets/medias/js/iCheck/jquery.icheck.js",false);?>

<?php ob_start();
echo Config::get('app.base_url');
$_tmp37=ob_get_clean();?><?php echo Libs::js($_tmp37."app/modules/page/Resources/public/js/jquery.nestable.js",false);?>

<?php ob_start();
echo Config::get('app.base_url');
$_tmp38=ob_get_clean();?><?php echo Libs::js($_tmp38."app/modules/page/Resources/public/js/menu.js",false);?>


</body>
</html>
<?php }} ?>
