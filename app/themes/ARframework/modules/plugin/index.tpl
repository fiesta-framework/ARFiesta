{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Plugin{/block} 
{block name=styles}
{$smarty.block.parent} 
<style>
.flexigrid div.fbutton .add {
	background: url({Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/flexgrid/css/images/add.png) no-repeat center left;
}
.flexigrid div.fbutton .delete {
    background: url({Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/flexgrid/css/images/close.png) no-repeat center left;
}
.flexigrid div.fbutton .edit {
	background: url({Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/flexgrid/css/images/edit.png) no-repeat center left;
}
</style>
{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="entypo-resize-small"></span><span> Plugin</span></h2>
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
	<li>Plugin</li>
</ul>
{/block}
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-12">
                        <div class="nest" id="DripClose">
                            <div class="title-alt">
                                <h6><span class="entypo-download"></span> Extensions</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#DriptClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Drip">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>
                            </div>
                            <div id="Drip">
                                <table class="flexme3" style="display: none"></table>
								<p class="lead well">Vector line-icon font by <a href="#">Amit Jakhu</a>. Version 1.0</p>
                            </div>
                        </div>
            </div>         
		</div>
	</div>
</div>
{/block}
{block name=scriptFooter}
{$smarty.block.parent} 
<script>
$(document).ready(function (){
	$('#plugin').addClass('active');
	$(".flexme3").flexigrid({
                url : '{Config::get("app.base_url")}plugin/api',
                dataType : 'xml',
                colModel : [ {
                    display : 'ISO',
                    name : 'iso',
                    width : 40,
                    sortable : true,
                    align : 'center'
                    }, {
                        display : 'Name',
                        name : 'name',
                        width : 180,
                        sortable : true,
                        align : 'left'
                    }, {
                        display : 'Printable Name',
                        name : 'printable_name',
                        width : 120,
                        sortable : true,
                        align : 'left'
                    }, {
                        display : 'ISO3',
                        name : 'iso3',
                        width : 130,
                        sortable : true,
                        align : 'left',
                        hide : true
                    }, {
                        display : 'Number Code',
                        name : 'numcode',
                        width : 80,
                        sortable : true,
                        align : 'right'
                } ],
                buttons : [ {
                    name : 'Add',
                    bclass : 'add',
                    onpress : test
                    }, {
                        name : 'Delete',
                        bclass : 'delete',
                        onpress : test
                    }, {
                        separator : true
                } ],
                searchitems : [ {
                    display : 'ISO',
                    name : 'iso'
                    }, {
                        display : 'Name',
                        name : 'name',
                        isdefault : true
                } ],
                sortname : "iso",
                sortorder : "asc",
                usepager : true,
                //title : 'Countries',
                useRp : true,
                rp : 15,
                showTableToggleBtn : false,
                width : '100%',
                height : 200
    }); 
	function test(com, grid) {
        if (com == 'Delete') {
            confirm('Delete ' + $('.trSelected', grid).length + ' items?')
        } else if (com == 'Add') {
            alert('Add New Item');
        }
    }

});
</script>
{/block}