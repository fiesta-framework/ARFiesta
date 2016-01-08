{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Builder{/block} 
{block name=styles}
{$smarty.block.parent}
{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="entypo-resize-small"></span><span> Builder</span></h2>
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
{/block}
{block name=BREADCRUMB}
<ul id="breadcrumb">
	<li><span class="entypo-home"></span></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li><a href="{Config::get('app.base_url')}{Config::get('panel.route')}" title="Sample page 1">Backend</a></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li>Formbuilder</li>
</ul>
{/block}
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="nest" id="Drag">
						<div class="title-alt">
							<h6><span class="entypo-download"></span> Drag & Drop components</h6>
							<div class="titleToggle">
								<a class="nav-toggle-alt" href="#DragDrip">
									<span class="entypo-up-open"></span>
								</a>
							</div>
						</div>
						<div id="DragDrip">
					</div>
				</div> 			
			</div>
			<div class="col-sm-6">
                <div class="nest" id="Form">
                    <div class="title-alt">
                        <h6><span class="entypo-download"></span> Form</h6>
                        <div class="titleToggle">
                            <a class="nav-toggle-alt" href="#FormDrip">
                                <span class="entypo-up-open"></span>
                            </a>
                        </div>
                    </div>
                    <div id="FormDrip">
                        
                    </div>
                </div>
            </div> 
	</div>
</div>
{/block}
{block name=scriptFooter}
{$smarty.block.parent} 
{/block}