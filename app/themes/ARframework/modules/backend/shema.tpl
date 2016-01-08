{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Shema{/block} 
{block name=styles}
{$smarty.block.parent}
{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/tree/jquery.treeview",false)}
{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="entypo-switch"></span><span> Shema</span></h2>
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
	<li>Shema</li>
</ul>
{/block} 
{block name=body}
<div class="content-wrap">
    <div class="row">
                    <div class="col-sm-5">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Nouvelle schema</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="new_migrate" method="post" name="new_migrate" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label" for="name">Nom de schema</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="migname" name="migname" placeholder="Nom de schema">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="email">Type de schema</label>
                                                <div class="controls">
                                                    <select class="form-control" id="sel1" name="object">
														<option value="table" selected>Table</option>
														<option value="vue">Vue</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="Module">Module</label>
                                                <div class="controls">
                                                    <select class="form-control" id="module" name="module">
														{foreach $modules as $value}
															{$r = explode('modules/',$value)}
															<option value="{$r[1]}">{$r[1]}</option>
														{/foreach}
													</select>
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<input type="submit" value="Créé" class="btn btn-primary" />
												<input type="hidden" name="action" value="new_migration">
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>	
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div id="RealTimeClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="entypo-database"></span>&nbsp;Schemas</h6>
                            </div>
                            <div id="RealTime" style="min-height:296px;" class="body-nest">
                            <div class="table-responsive">
								{$listeview}
                            </div>
                            </div>
                        </div>
                    </div>
    </div>
	<div class="row">
		<div class="col-sm-12">
							<div id="validationClose" class="nest">
								<div class="title-alt">
									<h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Exécuter les derniers schemas</h6>
								</div>
								<div class="body-nest" id="validation">
                                <div class="form_center">
                                    <form id="exec_last_migrate" method="post" name="exec_last_migrate" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
											<div class="control-group">
                                                <label class="control-label" for="Module">Module</label>
                                                <div class="controls">
                                                    <select class="form-control" id="module" name="module">
														{foreach $modules as $value}
															{$r = explode('modules/',$value)}
															<option value="{$r[1]}">{$r[1]}</option>
														{/foreach}
													</select>
                                                </div>
												 <label class="control-label" for="Module"></label>
                                                <div class="controls">
                                                    <label><input type="checkbox" name="dropshema" id="dropshema" value="0"> <strong>Annuler le schéma</strong></label>
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 83%;">
												<input type="submit" value="Exécuter schéma" class="btn btn-primary">
												<input type="hidden" name="action" value="exec_migration">
                                            </div>
                                        </fieldset>
                                    </form>

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
{Libs::js("{Config::get('app.base_url')}app/modules/backend/Resources/public/js/shema.js",false)}
{/block}