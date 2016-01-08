{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Views{/block} 
{block name=styles}
{$smarty.block.parent}
{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/tree/jquery.treeview",false)}
{/block} 
{block name=FiligranTitle}
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
	<li>Views</li>
</ul>
{/block} 
{block name=body}
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
														{foreach $modules as $value}
															{$r = explode('modules/',$value)}
															<option value="{$r[1]}">{$r[1]}</option>
														{/foreach}
													</select>
                                                </div>
                                            </div>
											<div class="control-group">
                                                <label class="control-label" for="name">Nom de la vue</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="new_view_file_name" name="new_view_file_name" placeholder="Nom de fichier">
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
								{$listeviewBackend}
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
								{$listeviewFrontend}
                            </div>
                            </div>	
                        </div>
        </div>
	</div>
</div>
{/block}
{block name=scriptFooter}
{$smarty.block.parent} 
{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/tree/lib/jquery.cookie.js",false)}
{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/tree/jquery.treeview.js",false)}
{Libs::js("{Config::get('app.base_url')}app/modules/backend/Resources/public/js/view.js",false)}
{/block}