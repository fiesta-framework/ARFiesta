<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 16:53:09
         compiled from "..\app\themes\ARframework\modules\page\addpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:839566c42e521bcb9-90311006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f597eb559a538bce7bc83d31ee3010e469853f3' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\page\\addpage.tpl',
      1 => 1449883491,
      2 => 'file',
    ),
    '8e7df0294cadfdf84cc4b1412c27976c4e19e4c5' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\base.tpl',
      1 => 1449790155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '839566c42e521bcb9-90311006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566c42e597a9e4_47863239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c42e597a9e4_47863239')) {function content_566c42e597a9e4_47863239($_smarty_tpl) {?><!DOCTYPE html>
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
$_tmp16=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp17=ob_get_clean();?><?php echo Libs::css($_tmp16."app/themes/".$_tmp17."/assets/medias/js/timepicker/bootstrap-timepicker",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp18=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp19=ob_get_clean();?><?php echo Libs::css($_tmp18."app/themes/".$_tmp19."/assets/medias/js/datepicker/datepicker",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp20=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp21=ob_get_clean();?><?php echo Libs::css($_tmp20."app/themes/".$_tmp21."/assets/medias/js/datepicker/clockface",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp22=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp23=ob_get_clean();?><?php echo Libs::css($_tmp22."app/themes/".$_tmp23."/assets/medias/js/tag/jquery.tagsinput",false);?>

<style>
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
.slug{
    background: transparent;
    border: 0px;
    color: #9ea7b3!important;
}
.nav > li > a {
    position: relative;
    display: block;
    padding: 6px 7px;
}
.nav-tabs > li > a {
    border: 0px solid transparent;
    border-radius: 4px 4px 0 0;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    border: 0px solid #ddd;
    background-color: #fff !important;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    background-color: #fff !important;
}
.tagsinput {
    min-height: auto !important;
    height: auto !important;
}
.list li {
    height: 24px;
}
.bootstrap-datetimepicker-widget.dropdown-menu.pull-right ul {
    padding-left: 0px;
}
li.picker-switch.accordion-toggle i {
    font-style: initial;
    padding-left: 3%;
    font-size: 15px;
}
table.table-condensed td {
    text-align: center;
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
                                <h6><span class="icon icon-document-new"></span> Ajouter une nouvelle page</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#addarticle">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="addarticle">
                                <div class="well">
                                    <div class="input-group">
										<span class="input-group-addon ">Titre</span>
                                        <input type="text" name="titre" class="form-control inputcls">
                                    </div>
									<span><strong>Permalien :</strong> <?php echo Config::get('app.base_url');?>
<span id="editable-post-name"><input type="text"  name="slug" readonly class="slug" id="new-post-slug">
									</span>
									</span>
                                </div>
								<div class="well" id="textarea">
                                    <div class="input-group" style="width: 100%;">
                                        <textarea class="form-control" name="content" id="texteditor"></textarea>
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
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Publier">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="Publier">
                                <a class="btn btn-default  button save-draft disable" data-color="#ff0011" data-opacity="0.9">Enregistrer brouillon</a>
                                <a class="btn btn-default  button preview disable" data-color="#ff0011" data-opacity="0.5">Aperçu</a>
								<h5 class="timeline-header no-border"><span class="fontawesome-edit"></span></span> État :
									<strong>Brouillon</strong> <a href="#" id="btnEtat">Modifier</a>
									<div id="etat" class="input-group" style="margin-top: 2%;">
										<div class="col-lg-10" style="padding: 0px;">
											<select name="post_status" class="form-control" id="post_status">
												<option value="pending">En attente de relecture</option>
												<option selected="selected" value="draft">Brouillon</option>
											</select>	
										</div>
										<div class="col-lg-2" style="padding-right: 1%;padding: 0px;padding-left: 10px;margin-bottom: 3%;"><a class="btn btn-default  button preview disable" data-color="#ff0011" data-opacity="0.5">OK</a></div>
										<a href="#">Annuler</a>
                                    </div>
								</h5>								
								<h5 class="timeline-header no-border"><span class="icon-preview"></span>  Visibilité :
									<strong>Public</strong> <a href="#" id="btnVisibilite">Modifier</a>
									<div id="visibilite" class="skin skin-flat" style="padding-top: 4%;">
										<ul class="list" style="padding-left: 0px;">
														<li>
															<input tabindex="11" type="radio" value="public" name="visibilite" checked>
															<label for="square-radio-1" style="font-weight: 500;">Public </label>
														</li>
														<li>
															<input tabindex="12" type="radio" value="password" name="visibilite">
															<label for="square-radio-2" style="font-weight: 500;">Protégé par mot de passe </label>
														</li>
														<li style="height: 37px;" id="password">
															<div class="form-group">
																<input type="text" placeholder="Mot de passe" id="motdepasse" class="form-control">
															</div>
														</li>
														<li>
															<input type="radio" value="private" name="visibilite">
															<label for="square-radio-disabled" style="font-weight: 500;">Privé</label>
														</li>
										</ul>
										<div style="clear:both;"></div>
									</div>
								</h5>								
								<h5 class="timeline-header no-border"><span class="entypo-calendar"></span> Publier : 
									<strong>tout de suite</strong> <a href="#" id="btnDate_creation">Modifier</a>
                                    <div id="date_creation" class="input-group" style="margin-top: 4%;">
										<div id="datetimepicker1" class="input-group date">
                                            <input class="form-control" data-format="yyyy-MM-dd hh:mm:ss" type="text">
                                            <span class="input-group-addon add-on">
												<i style="font-style:normal;" data-time-icon="entypo-clock" data-date-icon="entypo-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
								</h5>
								<a href="#">Déplacer dans la Corbeille</a> <button class="btn btn-default  button preview disable" data-color="#ff0011" data-opacity="0.5">Publier</button>
                            </div>
                        </div>
				</div>
				<div class="col-sm-12">
					<div class="nest" id="DripClose">
							<div class="title-alt">
                                <h6>Attributs de la page</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#AttrPage">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="AttrPage">
                                <div class="well">
                                    <div class="form-group">
										<label for="inputLangue">Parent</label>
										<select class="form-control" id="sel1" name="parent">	
											<option value="0" selected>Selectionnez une page</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['value'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['value']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['name'] = 'value';
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total']);
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['post_title'];?>
</option>
											<?php endfor; endif; ?>
										</select>
									</div>
									<div class="form-group">
										<label for="inputLangue">Modèle</label>
										<select class="form-control" id="sel1" name="model">
											<option value="fr" selected>Français</option>
											<option value="en">English</option>
										</select>
									</div>									
								</div>
                            </div>
                    </div>
				</div>	
				<div class="col-sm-12">
					<div class="nest" id="DripClose">
							<div class="title-alt">
                                <h6>Image à la Une</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#ImgCover">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="ImgCover">
                                <div class="well">
                                    					
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
$_tmp24=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp25=ob_get_clean();?><?php echo Libs::js($_tmp24."app/themes/".$_tmp25."/assets/medias/js/preloader.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp26=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp27=ob_get_clean();?><?php echo Libs::js($_tmp26."app/themes/".$_tmp27."/assets/medias/js/bootstrap.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp28=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp29=ob_get_clean();?><?php echo Libs::js($_tmp28."app/themes/".$_tmp29."/assets/medias/js/flexgrid/js/flexigrid.pack.js",false);?>
	
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
$_tmp30=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp31=ob_get_clean();?><?php echo Libs::js($_tmp30."app/themes/".$_tmp31."/assets/medias/js/app.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp32=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp33=ob_get_clean();?><?php echo Libs::js($_tmp32."app/themes/".$_tmp33."/assets/medias/js/load.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp34=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp35=ob_get_clean();?><?php echo Libs::js($_tmp34."app/themes/".$_tmp35."/assets/medias/js/main.js",false);?>

	 
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp36=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp37=ob_get_clean();?><?php echo Libs::js($_tmp36."app/themes/".$_tmp37."/assets/medias/js/button/ladda/spin.min.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp38=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp39=ob_get_clean();?><?php echo Libs::js($_tmp38."app/themes/".$_tmp39."/assets/medias/js/button/ladda/ladda.min.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp40=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp41=ob_get_clean();?><?php echo Libs::js($_tmp40."app/themes/".$_tmp41."/assets/medias/js/button/progressbutton.jquery.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp42=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp43=ob_get_clean();?><?php echo Libs::js($_tmp42."app/themes/".$_tmp43."/assets/medias/js/iCheck/jquery.icheck.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp44=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp45=ob_get_clean();?><?php echo Libs::js($_tmp44."app/themes/".$_tmp45."/assets/medias/js/timepicker/bootstrap-timepicker.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp46=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp47=ob_get_clean();?><?php echo Libs::js($_tmp46."app/themes/".$_tmp47."/assets/medias/js/datepicker/bootstrap-datepicker.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp48=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp49=ob_get_clean();?><?php echo Libs::js($_tmp48."app/themes/".$_tmp49."/assets/medias/js/datepicker/clockface.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp50=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp51=ob_get_clean();?><?php echo Libs::js($_tmp50."app/themes/".$_tmp51."/assets/medias/js/datepicker/bootstrap-datetimepicker.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp52=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp53=ob_get_clean();?><?php echo Libs::js($_tmp52."app/themes/".$_tmp53."/assets/medias/js/tag/jquery.tagsinput.js",false);?>
	
<?php echo '<script'; ?>
>
jQuery(document).ready(function (){
	jQuery('#cms').addClass('active');
	jQuery('#cms2').addClass('active');
	jQuery("#btnDate_creation").click(function(event){
		event.preventDefault();
		jQuery('#date_creation').toggle("slow");
	});
	jQuery("#btnVisibilite").click(function(event){
		event.preventDefault();
		jQuery('#visibilite').toggle("slow");
	});
	jQuery("#btnEtat").click(function(event){
		event.preventDefault();
		jQuery('#etat').toggle("slow");
	});

	jQuery('#etat').hide();
	jQuery('#visibilite').hide();
	jQuery('#date_creation').hide();
	jQuery('#password').hide();
	
	jQuery('#visibilite input').on('ifChecked', function(event){
		if(jQuery(this).val() === "password"){
			jQuery('#password').toggle("slow");
		}else{
			jQuery('#password').hide("slow");
		}
	});
	
	jQuery('#visibilite  input').iCheck({
        radioClass: 'iradio_flat-blue'
    });
	$('#datetimepicker1').datetimepicker({
        language: 'fr-FR'
    });
	
	jQuery('.save-draft,.preview').click(function() {
            var itm = jQuery(this);
            if (itm.hasClass('disable')) {
                itm.attr('disabled', 'disabled');
            }
            var bar = itm.progressbutton({
                percent: -1
            });
            var clock = 0;
            var interval = setInterval(function() {
                bar.progressbutton({
                    percent: clock
                });
                clock = clock + 0.5;
                if (clock > 100) {
                    itm.removeAttr('disabled');
                    clearInterval(interval);
                    bar.progressbutton('reset');
					alert("Success")
                }
            }, 30);
    });
});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
