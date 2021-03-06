{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Langues{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="fontawesome-globe"></span><span> Langues</span></h2>
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
	<li>Langues</li>
</ul>
{/block} 
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-6">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Nouveau dossier de langue</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="new_lang_dir" method="post" name="new_lang_dir" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label" for="name">Nom de dossier</label>
                                                <div class="controls">
													<input type="text" class="form-control" name="lang_dir_name" placeholder="Nom de dossier lang">
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<input type="submit" value="Créé" class="btn btn-primary" />
												<input type="hidden" name="action" value="new_lang_dir">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>	
                        </div>
        </div>
		<div class="col-sm-6">
            <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-globe"></span>&nbsp;Nouveau fichier de langue</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="new_lang_file" method="post" name="new_lang_file" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label" for="name">Nom de dossier</label>
                                                <div class="controls">
													<select class="form-control" id="sel1" name="lang_dir_name_2">
													{foreach $glob as $value}
														{$r = explode('Local/',$value)}
															<option value="{$r[1]}">{$r[1]}</option>
													{/foreach}
													</select>
                                                </div>
                                            </div>
											<div class="control-group">
                                                <label class="control-label" for="name">Nom de fichier</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="lang_file_name" name="lang_file_name" placeholder="Nom de fichier">
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<input type="submit" value="Créé" class="btn btn-primary" />
												<input type="hidden" name="action" value="new_lang_file">
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
{Libs::js("{Config::get('app.base_url')}app/modules/backend/Resources/public/js/langues.js",false)}
{/block}