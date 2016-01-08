{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Controllers{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="fontawesome-cogs"></span><span> Controllers</span></h2>
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
	<li>Controllers</li>
</ul>
{/block} 
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-4">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Nouveau controller</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="new_controller" method="post" name="new_controller" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
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
                                                <label class="control-label" for="name">Nom de fichier</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="new_controller_file_name" name="new_controller_file_name" placeholder="Nom de fichier">
                                                </div>
                                            </div>
											<div class="control-group">
                                                <label class="control-label" for="name">Nom de la class</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="new_controller_class_name" name="new_controller_class_name" placeholder="Nom de class">
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<input type="submit" value="Créé" class="btn btn-primary" />
												<input type="hidden" name="action" value="new_controller">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>	
                        </div>
        </div>
		<div class="col-sm-8">
						<div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="icon icon-gear"></span>&nbsp;Controllers</h6>
                            </div>
                            <div id="RealTime" style="min-height:296px;" class="body-nest">
                            <div class="table-responsive">
								<table class="table">
                                        <thead>
                                            <tr>
												<th>Nom de fichiers</th>
												<th>Nom de class</th>
												<th>Date de creation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $glob as $value}
												{$r = explode('modules/',$value)}
												<tr>
													<td>{$r[1]}s</td>
													<td>{ucfirst($r[1])}s</td>
													<td>{date("Y/m/d H:i:s",filemtime($value))}</td>
												</tr>
											{/foreach}
                                        </tbody>
                                 </table>
                            </div>
                            </div>	
                        </div>
        </div>
	</div>
</div>
{/block}
{block name=scriptFooter}
{$smarty.block.parent} 
{Libs::js("{Config::get('app.base_url')}app/modules/backend/Resources/public/js/controller.js",false)}
{/block}