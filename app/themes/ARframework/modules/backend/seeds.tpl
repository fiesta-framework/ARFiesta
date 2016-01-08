{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Graines{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="fontawesome-leaf"></span><span> Graines</span></h2>
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
	<li>Graines</li>
</ul>
{/block} 
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-3">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Nouveau graine (seed)</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="new_seed" method="post" name="new_seed" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
                                            <div class="control-group">
                                                <label class="control-label" for="name">Nom de seed</label>
                                                <div class="controls">
													<input type="text" class="form-control" id="" name="seedname_name" placeholder="Nom de seed">
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<input type="submit" value="Créé" class="btn btn-primary" />
												<input type="hidden" name="action" value="new_seed">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>	
                        </div>
        </div>
		<div class="col-sm-3">
                        <div id="siteClose" class="nest">
                            <div class="title-alt">
                                <h6><span class="fontawesome-resize-horizontal"></span>&nbsp;Lancer Seeders</h6>
                            </div>
                            <div class="body-nest" id="validation">
                                <div class="form_center">
									<form id="exec_seed" method="post" name="exec_seed" class="form-horizontal" novalidate="novalidate">
                                        <fieldset>
                                            <div class="control-group">
                                                <div class="controls">
													<p>Lancer tous les seeders dans la class SeedsCaller</p>
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 80%;">
												<button type="submit"  class="btn btn-primary"><span class="entypo-play"></span>&nbsp;Lancer</button>
												<input type="hidden" name="action" value="exec_seed">
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
                                <h6><span class="icon icon-gear"></span>&nbsp;Controllers</h6>
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
												{$r = explode('seeds/',$value)}
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
{Libs::js("{Config::get('app.base_url')}app/modules/backend/Resources/public/js/seeds.js",false)}
{/block}