{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Nouveau Post{/block} 
{block name=styles}
{$smarty.block.parent} 
	{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/iCheck/flat/all",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/iCheck/line/all",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/timepicker/bootstrap-timepicker",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/datepicker/datepicker",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/datepicker/clockface",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/tag/jquery.tagsinput",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/dropZone/downloads/css/dropzone",false)}
	{Libs::css("{Config::get('app.base_url')}app/modules/page/Resources/public/css/addpost",false)}
{/block} 
{block name=FiligranTitle}
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
                        <span id="messageIcon"></span>
                        <span id="message"></span>
                    </div>
                </div>
        </div>
    </div>
</div>
{/block}
{block name=BREADCRUMB}
<ul id="breadcrumb">
	<li><span class="entypo-home"></span></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li><a href="{Config::get('app.base_url')}{Config::get('panel.route')}" title="Sample page 1">Backend</a></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li>Nouveau Post</li>
</ul>
{/block}
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-12">
		<form method="post" id="addPagearticle" action="#">
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
                                        <input type="text" name="titre" class="form-control inputcls">
                                    </div>
									<span><strong>Permalien :</strong> {Config::get('app.base_url')}page/t/<span id="editable-post-name"><input type="text" name="slug" readonly class="slug" id="new-post-slug">
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
				<div class="col-sm-12" id="imageBlock"></div>
				<div class="col-sm-12" id="videoBlock"></div>
				<div class="col-sm-12" id="audioBlock"></div>
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
												<option value="0"  selected="selected">Selectionnez l'état de votre page</option>
												<option value="pending">En attente de relecture</option>
												<option value="draft">Brouillon</option>
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
																<input type="text" placeholder="Mot de passe" name="password" id="motdepasse" class="form-control">
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
                                            <input class="form-control"  name="date" data-format="yyyy-MM-dd hh:mm:ss" type="text">
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
											<input type="radio"  name="format" value="0" checked>
											<label for="square-radio-1" style="font-weight: 500;"><span class="fontawesome-pushpin"></span> Par défaut </label>
										</li>
										<li>
											<input type="radio" name="format" value="image">
											<label for="square-radio-2" style="font-weight: 500;"><span class="entypo-picture"></span> Image </label>
										</li>
										<li>
											<input type="radio"  name="format" value="video">
											<label for="square-radio-disabled" style="font-weight: 500;"><span class="entypo-video"></span> Vidéo</label>
										</li>
										<li>
											<input type="radio"  name="format" value="audio">
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
									</ul>
									  <!-- Tab panes -->
									<div class="tab-content" style="height: 200px;overflow: auto;padding-top: 5%;padding-left: 5%;padding-bottom: 5%;background-color: #fdfdfd;margin-bottom: 2%;" id="categorie">
										<div role="tabpanel" class="tab-pane active" id="toute">
											<div class="skin skin-flat">
												<ul class="list" style="padding-left: 0px;">
													{section name=value loop=$terms}
													<li>
														<input type="checkbox" name="terms" value="{$terms[value].term_id}">
														<label for="flat-checkbox-1" style="font-weight: 500;">{utf8_decode($terms[value].name)}</label>
													</li>
													{/section}
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
									<input id="tags_2" name="tags" type="text" class="tags" />
								</div>
                            </div>
                    </div>
				</div>  
            </div>  
		</form>
		</div>
	</div>
</div>
{/block}
{block name=scriptFooter}
{$smarty.block.parent} 
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/button/ladda/spin.min.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/button/ladda/ladda.min.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/button/progressbutton.jquery.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/iCheck/jquery.icheck.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/timepicker/bootstrap-timepicker.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/datepicker/bootstrap-datepicker.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/datepicker/clockface.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/datepicker/bootstrap-datetimepicker.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/tag/jquery.tagsinput.js",false)}	
	{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/dropZone/lib/dropzone.js",false)}
	{Libs::js("{Config::get('app.base_url')}app/modules/page/Resources/public/js/addpost.js",false)}
{/block}