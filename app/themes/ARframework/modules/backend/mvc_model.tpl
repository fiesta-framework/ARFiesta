{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Models{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="icon icon-media-shuffle"></span><span> Models</span></h2>
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
	<li>Models</li>
</ul>
{/block} 
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-4">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Nouveau modele</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="new_models" method="post" name="new_models" class="form-horizontal" novalidate="novalidate">
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
													<input type="text" class="form-control" id="new_models_file_name" name="new_models_file_name" placeholder="Nom de fichier">
                                                </div>
                                            </div>
											<div class="control-group">
                                                <label class="control-label" for="name">Nom de class</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="new_models_class_name" name="new_models_class_name" placeholder="Nom de class">
                                                </div>
                                            </div>
											<div class="control-group">
                                                <label class="control-label" for="name">Nom de table dans BD</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="new_models_table_name" name="new_models_table_name" placeholder="Nom de table dans BD">
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<input type="submit" value="Créé" class="btn btn-primary" />
												<input type="hidden" name="action" value="new_models">
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
                                <h6><span class="fontawesome-bolt"></span>&nbsp;Nouveau fichier de langue</h6>
                            </div>
                            <div id="RealTime" style="min-height:296px;" class="body-nest">
                            <div class="table-responsive">
								<table class="table">
                                        <thead>
                                            <tr>
												<th>Nom de fichiers</th>
												<th>Nom de class</th>
												<th>nom de table</th>
												<th>Date de creation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $glob as $value}
												{$r = explode('modules/',$value)}
												<tr>
													<td>{$r[1]}.php</td>
													<td>{ucfirst($r[1])}</td>
													<td>{Config::get('database.prefixe')}{$r[1]}s</td>
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
{Libs::js("{Config::get('app.base_url')}app/modules/backend/Resources/public/js/model.js",false)}
{/block}