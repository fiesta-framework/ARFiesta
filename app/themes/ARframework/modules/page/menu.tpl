{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Menus{/block} 
{block name=styles}
{$smarty.block.parent}
{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/iCheck/flat/all",false)}
{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/iCheck/line/all",false)}
{Libs::css("{Config::get('app.base_url')}app/modules/page/Resources/public/css/menu",false)}
{/block} 
{block name=FiligranTitle}
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
{/block}
{block name=BREADCRUMB}
<ul id="breadcrumb">
	<li><span class="entypo-home"></span></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li><a href="{Config::get('app.base_url')}{Config::get('panel.route')}" title="Sample page 1">Backend</a></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li>Menus</li>
</ul>
{/block}
{block name=body}
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
												{$GetAllmenus 		= $getListeMenu}								
												{section name=menu loop=$GetAllmenus}
													<option value="{$GetAllmenus[menu].id}">{$GetAllmenus[menu].title}</option>
												{/section}
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
													{$recentPages 	= $getAllRecentPage}								
													{section name=page loop=$recentPages}
													<li>
														<input type="checkbox" name="recentpage" data-name="{$recentPages[page].post_name}" data-title="{$recentPages[page].post_title}" value="{$recentPages[page].ID}">
														<label for="flat-checkbox-1" style="font-weight: 500;">
															{$recentPages[page].post_title}
														</label>
													</li>
													{/section}
												</ul>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="topcat">
											<div class="skin skin-flat">
												<ul class="list" id="checkedAllPage" style="padding-left: 0px;">
													{$pages 		= $getAllPage}								
													{section name=page loop=$pages}
													<li>
														<input type="checkbox" data-name="{$pages[page].post_name}" data-title="{$pages[page].post_title}" name="allpage" value="{$pages[page].ID}">
														<label for="flat-checkbox-1" style="font-weight: 500;">
															{$pages[page].post_title}
														</label>
													</li>
													{/section}
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
													{$recentPosts 		= $getAllRecentPost}								
													{section name=recentPost loop=$recentPosts}
													<li>
														<input type="checkbox" name="recentarticle" data-name="{$recentPosts[recentPost].post_name}" data-title="{$recentPosts[recentPost].post_title}" value="{$recentPosts[recentPost].ID}">
														<label for="flat-checkbox-1" style="font-weight: 500;">
															{$recentPosts[recentPost].post_title}
														</label>
													</li>
													{/section}
												</ul>
												</ul>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="art_topcat">
											<div class="skin skin-flat">
												<ul class="list" style="padding-left: 0px;">
													<ul class="list" style="padding-left: 0px;">
													{$posts 		= $getAllPost}								
													{section name=post loop=$posts}
													<li>
														<input type="checkbox" name="allarticle" data-name="{$posts[post].post_name}" data-title="{$posts[post].post_title}" value="{$posts[post].ID}">
														<label for="flat-checkbox-1" style="font-weight: 500;">
															{$posts[post].post_title}
														</label>
													</li>
													{/section}
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
											&nbsp;<input id="big_menu" name="menu" type="text" class="form-control" value="{$getMenu.title}" style="width: 7cm;" />
											<input id="id_menu" name="id_menu" type="hidden" class="form-control" value="{$getMenu.id}" />
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
								{$menus = $getAllMenu}
								{section name=menu loop=$menus}
								{if count($menus[menu].sublink)>0}
								<li class="dd-item dd3-item" data-id="{$menus[menu].id}">
									<div class="dd-handle dd3-handle">Drag</div>
									<div class="dd3-content">{$menus[menu].title} <i style="font-size: 10px;color: #999;">Sous Menu</i>
										<span class="pull-right" data-type="details">

											<a class="editMenu" data-id="{$menus[menu].id}" data-title="{$menus[menu].title}" href="#" style="color: #757575;">
												<span class="entypo-down-open"></span>
											</a>
										</span>
									</div>
									<div class="contentmenu" style="display:none"></div>
									<ol class="dd-list">
										{$sbmnu = $menus[menu].sublink}
										{section name=submenu loop=$sbmnu}
										<li class="dd-item dd3-item" data-id="{$sbmnu[submenu].id}">
											<div class="dd-handle dd3-handle">Drag</div>
											<div class="dd3-content">{$sbmnu[submenu].title}
												<span class="pull-right">
													
													<a class="editMenu" data-id="{$sbmnu[submenu].id}" data-title="{$sbmnu[submenu].title}" href="#" style="color: #757575;">
														<span class="entypo-down-open"></span>
													</a>
												</span>
											</div>
										</li>
										<div class="contentmenu" style="display:none"></div>
										{/section}
									</ol>
								</li>
								{else}
								<li class="dd-item dd3-item" data-id="{$menus[menu].id}">
									<div class="dd-handle dd3-handle">Drag</div>
									<div class="dd3-content">{$menus[menu].title}
										<span class="pull-right">

											<a class="editMenu" data-id="{$menus[menu].id}" data-title="{$menus[menu].title}" href="#" style="color: #757575;">
												<span class="entypo-down-open"></span>
											</a>
										</span>
									</div>
								</li>
								<div class="contentmenu" style="display:none"></div>
								{/if}
								{/section}
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
{/block}
{block name=scriptFooter}
{$smarty.block.parent} 
{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/button/ladda/spin.min.js",false)}
{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/button/ladda/ladda.min.js",false)}
{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/button/progressbutton.jquery.js",false)}
{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/iCheck/jquery.icheck.js",false)}
{Libs::js("{Config::get('app.base_url')}app/modules/page/Resources/public/js/jquery.nestable.js",false)}
{Libs::js("{Config::get('app.base_url')}app/modules/page/Resources/public/js/menu.js",false)}
{/block}