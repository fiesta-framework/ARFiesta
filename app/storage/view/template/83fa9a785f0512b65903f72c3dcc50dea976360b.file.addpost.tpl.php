<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 16:53:05
         compiled from "..\app\themes\ARframework\modules\page\addpost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8624566c42e1452324-69804881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83fa9a785f0512b65903f72c3dcc50dea976360b' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\page\\addpost.tpl',
      1 => 1449886645,
      2 => 'file',
    ),
    '8e7df0294cadfdf84cc4b1412c27976c4e19e4c5' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\base.tpl',
      1 => 1449790155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8624566c42e1452324-69804881',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566c42e1c26376_57658874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c42e1c26376_57658874')) {function content_566c42e1c26376_57658874($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <?php echo Html::charset();?>

    <title><?php echo Config::get('app.title');?>
 |   Nouveau Post</title>
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

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp24=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp25=ob_get_clean();?><?php echo Libs::css($_tmp24."app/themes/".$_tmp25."/assets/medias/js/dropZone/downloads/css/dropzone",false);?>

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
                <h2 class="tittle-content-header"><span class="icon icon-document-new"></span><span> Nouveau Post</span></h2>
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
	<li>Nouveau Post</li>
</ul>

            <!-- END OF BREADCRUMB -->
            <!--  DEVICE MANAGER -->
			
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-8" style="padding: 0px;">
				<div class="col-sm-12">
                        <div class="nest">
                            <div class="title-alt">
                                <h6><span class="icon icon-document-new"></span> Ajouter un nouvel article</h6>
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
                                        <input type="text" class="form-control inputcls">
                                    </div>
									<span><strong>Permalien :</strong> <?php echo Config::get('app.base_url');?>
<span id="editable-post-name"><input type="text" readonly class="slug" id="new-post-slug">
									</span>
									</span>
                                </div>
								<div class="well" id="textarea">
                                    <div class="input-group" style="width: 100%;">
                                        <textarea class="form-control" id="texteditor"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
				<div class="col-sm-12" id="imageBlock">
                        <div class="nest">
                            <div class="title-alt">
                                <h6><span class="icon icon-document-new"></span> Format Image</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#addimage">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="addimage">
								<form action="assets/js/dropZone/upload" class="dropzone" id="my-dropzone"></form>
								<button style="margin-top:10px;" class="btn btn-info" id="submit-all">Soumettre tous les fichiers</button>
                            </div>
                        </div>
                </div>
				<div class="col-sm-12" id="videoBlock">
                        <div class="nest">
                            <div class="title-alt">
                                <h6><span class="icon icon-document-new"></span> Format Video</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#addvideo">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="addvideo">
                                <div class="well">
									<div class="form-group">
                                        <label for="VideoID">Video Type</label><br/>
                                        <div class="skin skin-flat" id="videoType">
											<ul class="list" style="padding-left: 0px;">
												<li>
													<input tabindex="11" type="radio" name="video_type" checked>
													<label for="square-radio-1" style="font-weight: 500;"><span class="entypo-video"></span> Youtube </label>
												</li>
												<li>
													<input tabindex="12" type="radio" name="video_type">
													<label for="square-radio-2" style="font-weight: 500;"><span class="entypo-vimeo"></span> Vimeo </label>
												</li>
												<li>
													<input type="radio"  name="video_type">
													<label for="square-radio-disabled" style="font-weight: 500;"><span class="entypo-upload-cloud"></span> Self Hosted</label>
												</li>
											</ul>
											<div style="clear:both;"></div>
										</div>
                                    </div>
									
                                    <div class="form-group">
                                        <label for="VideoID">Video ID</label><br/>
										Add the video id
                                        <input type="text" name="videoid" class="form-control" style="margin-top: 1%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
				<div class="col-sm-12" id="audioBlock">
                        <div class="nest">
                            <div class="title-alt">
                                <h6><span class="icon icon-document-new"></span> Format Audio</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#addaudio">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="addaudio">
                                <div class="well">
									<div class="form-group">
                                        <label for="VideoID">Audio Type</label><br/>
                                        <div class="skin skin-flat" id="audioType">
											<ul class="list" style="padding-left: 0px;">
												<li>
													<input type="radio" name="audio_type" checked>
													<label for="square-radio-1" style="font-weight: 500;"><span class="entypo-soundcloud"></span> Soundcloud </label>
												</li>
												<li>
													<input type="radio"  name="audio_type">
													<label for="square-radio-disabled" style="font-weight: 500;"><span class="entypo-upload-cloud"></span> Self Hosted</label>
												</li>
											</ul>
											<div style="clear:both;"></div>
										</div>
                                    </div>
									
                                    <div class="form-group">
                                        <label for="VideoID">Audio ID</label><br/>
										Add the audio id
                                        <input type="text" name="videoid" class="form-control" style="margin-top: 1%;">
                                    </div>
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
					<div class="nest">
							<div class="title-alt">
                                <h6>Format</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Format">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="Format">
								<div class="skin skin-flat">
									<ul class="list" style="padding-left: 0px;">
										<li>
											<input type="radio"  name="square-radio" value="0" checked>
											<label for="square-radio-1" style="font-weight: 500;"><span class="fontawesome-pushpin"></span> Par défaut </label>
										</li>
										<li>
											<input type="radio" name="square-radio" value="image">
											<label for="square-radio-2" style="font-weight: 500;"><span class="entypo-picture"></span> Image </label>
										</li>
										<li>
											<input type="radio"  name="square-radio" value="video">
											<label for="square-radio-disabled" style="font-weight: 500;"><span class="entypo-video"></span> Vidéo</label>
										</li>
										<li>
											<input type="radio"  name="square-radio" value="audio">
											<label for="square-radio-disabled-checked" style="font-weight: 500;"><span class="entypo-note-beamed"></span> Son</label>
										</li>
									</ul>
									<div style="clear:both;"></div>
								</div>
                            </div>
                    </div>
				</div>
				<div class="col-sm-12">
					<div class="nest">
							<div class="title-alt">
                                <h6>Catégories</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Drip">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="Drip">
								<div class="well">
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#toute" aria-controls="toute" role="tab" data-toggle="tab">Toutes</a></li>
										<li role="presentation"><a href="#topcat" aria-controls="topcat" role="tab" data-toggle="tab">Les plus utilisées</a></li>
									</ul>
									  <!-- Tab panes -->
									<div class="tab-content" style="height: 200px;overflow: auto;padding-top: 5%;padding-left: 5%;padding-bottom: 5%;background-color: #fdfdfd;margin-bottom: 2%;" id="categorie">
										<div role="tabpanel" class="tab-pane active" id="toute">
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
										<div role="tabpanel" class="tab-pane" id="topcat">
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
									</div>
									<a href="#"><span class="entypo-list-add"></span> Ajouter une nouvelle catégorie</a> 
								</div>
                            </div>
                    </div>
				</div>  
				<div class="col-sm-12">
					<div class="nest">
							<div class="title-alt">
                                <h6>Étiquettes</h6>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Étiquettes">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body-nest" id="Étiquettes">
								<div class="well">
									<input id="tags_2" type="text" class="tags" />
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
$_tmp26=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp27=ob_get_clean();?><?php echo Libs::js($_tmp26."app/themes/".$_tmp27."/assets/medias/js/preloader.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp28=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp29=ob_get_clean();?><?php echo Libs::js($_tmp28."app/themes/".$_tmp29."/assets/medias/js/bootstrap.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp30=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp31=ob_get_clean();?><?php echo Libs::js($_tmp30."app/themes/".$_tmp31."/assets/medias/js/flexgrid/js/flexigrid.pack.js",false);?>
	
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
$_tmp32=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp33=ob_get_clean();?><?php echo Libs::js($_tmp32."app/themes/".$_tmp33."/assets/medias/js/app.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp34=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp35=ob_get_clean();?><?php echo Libs::js($_tmp34."app/themes/".$_tmp35."/assets/medias/js/load.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp36=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp37=ob_get_clean();?><?php echo Libs::js($_tmp36."app/themes/".$_tmp37."/assets/medias/js/main.js",false);?>

	 
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp38=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp39=ob_get_clean();?><?php echo Libs::js($_tmp38."app/themes/".$_tmp39."/assets/medias/js/button/ladda/spin.min.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp40=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp41=ob_get_clean();?><?php echo Libs::js($_tmp40."app/themes/".$_tmp41."/assets/medias/js/button/ladda/ladda.min.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp42=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp43=ob_get_clean();?><?php echo Libs::js($_tmp42."app/themes/".$_tmp43."/assets/medias/js/button/progressbutton.jquery.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp44=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp45=ob_get_clean();?><?php echo Libs::js($_tmp44."app/themes/".$_tmp45."/assets/medias/js/iCheck/jquery.icheck.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp46=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp47=ob_get_clean();?><?php echo Libs::js($_tmp46."app/themes/".$_tmp47."/assets/medias/js/timepicker/bootstrap-timepicker.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp48=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp49=ob_get_clean();?><?php echo Libs::js($_tmp48."app/themes/".$_tmp49."/assets/medias/js/datepicker/bootstrap-datepicker.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp50=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp51=ob_get_clean();?><?php echo Libs::js($_tmp50."app/themes/".$_tmp51."/assets/medias/js/datepicker/clockface.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp52=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp53=ob_get_clean();?><?php echo Libs::js($_tmp52."app/themes/".$_tmp53."/assets/medias/js/datepicker/bootstrap-datetimepicker.js",false);?>

	<?php ob_start();
echo Config::get('app.base_url');
$_tmp54=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp55=ob_get_clean();?><?php echo Libs::js($_tmp54."app/themes/".$_tmp55."/assets/medias/js/tag/jquery.tagsinput.js",false);?>
	
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp56=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp57=ob_get_clean();?><?php echo Libs::js($_tmp56."app/themes/".$_tmp57."/assets/medias/js/dropZone/lib/dropzone.js",false);?>

<?php echo '<script'; ?>
>
jQuery(document).ready(function (){
	jQuery('#cms').addClass('active');
	jQuery('#cms3').addClass('active');
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
	
	jQuery('#imageBlock').hide();
	jQuery('#videoBlock').hide();
	jQuery('#audioBlock').hide();
	
	jQuery('#visibilite input').on('ifChecked', function(event){
		if(jQuery(this).val() === "password"){
			jQuery('#password').toggle("slow");
		}else{
			jQuery('#password').hide("slow");
		}
	});
	
	jQuery('#Format input').on('ifChecked', function(event){
		if(jQuery(this).val() === "image"){
			jQuery('#imageBlock').show("slow");
			jQuery('#audioBlock').hide("slow");
			jQuery('#videoBlock').hide("slow");
		}else if(jQuery(this).val() === "video"){
			jQuery('#audioBlock').hide("slow");
			jQuery('#imageBlock').hide("slow");
			jQuery('#videoBlock').show("slow");
		}else if(jQuery(this).val() === "audio"){
			jQuery('#audioBlock').show("slow");
			jQuery('#imageBlock').hide("slow");
			jQuery('#videoBlock').hide("slow");
		}else{
			jQuery('#imageBlock').hide("slow");
			jQuery('#audioBlock').hide("slow");
			jQuery('#videoBlock').hide("slow");
		}
	});
	
	jQuery('#visibilite,#Format,#categorie,#videoType,#audioType  input').iCheck({
		checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
    });
	$('#datetimepicker1').datetimepicker({
        language: 'fr-FR'
    });
	jQuery('#tags_2').tagsInput({
        width: 'auto',
        onChange: function(elem, elem_tags) {
			console.log($(this).val());
            var languages = ['php', 'ruby', 'javascript'];
            jQuery('.tag', elem_tags).each(function() {
                if ($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
                    $(this).css('background-color', '#FBB44C');
            });
        }
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
	
	//images
	Dropzone.options.myDropzone = {
        autoProcessQueue: false,
        init: function() {
            var submitButton = document.querySelector("#submit-all")
            myDropzone = this; // closure
            submitButton.addEventListener("click", function() {
                myDropzone.processQueue(); // Tell Dropzone to process all queued files.
            });
            this.on("addedfile", function() {
                // Show submit button here and/or inform user to click it.
            });
        }
    };
});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
