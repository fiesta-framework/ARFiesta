{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Liens{/block}
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="entypo-link"></span><span> Liens</span></h2>
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
	<li>Liens</li>
</ul>
{/block} 
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-5">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Nouveau Fichier link</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="new_link" method="post" name="new_link" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label" for="name">Nom de fichier liens</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="" name="link_name" placeholder="Nom de fichier liens">
                                                </div>
                                            </div>
											<div class="control-group">
												<small>* Si vous laissez ce champ vide le nom de nouveau ficher sera le timestamp</small>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<input type="submit" value="Créé" class="btn btn-primary" />
												<input type="hidden" name="action" value="new_link">
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
                                <h6><span class="entypo-link"></span>&nbsp;Links</h6>
                            </div>
                            <div id="RealTime" style="min-height:296px;" class="body-nest">
                            <div class="table-responsive">
								<table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nom de fichiers</th>
												<th>Date de creation</th>	
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $glob as $value}
												{$r = explode('links/',$value)}
												<tr>
													<td>{$r[1]}</td>
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
{Libs::js("{Config::get('app.base_url')}app/modules/backend/Resources/public/js/liens.js",false)}
{/block}