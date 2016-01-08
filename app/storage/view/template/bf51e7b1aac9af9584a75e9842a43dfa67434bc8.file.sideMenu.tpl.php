<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-10 18:22:16
         compiled from "C:\wamp\www\Arframework\app\themes\ARframework\Back-end\inc\sideMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273725669b4c8d07a16-82393530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf51e7b1aac9af9584a75e9842a43dfa67434bc8' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\Back-end\\inc\\sideMenu.tpl',
      1 => 1449698042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273725669b4c8d07a16-82393530',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5669b4c8e152d2_82791387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669b4c8e152d2_82791387')) {function content_5669b4c8e152d2_82791387($_smarty_tpl) {?><div id="skin-select">
        <div id="logo">
            <h1><img src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/Back-end/assets/medias/img/logo.png" style="width: 21%;">
                <span><?php echo Config::get('app.version');?>
</span>
            </h1>
        </div>

        <a id="toggle">
            <span class="entypo-menu"></span>
        </a>
        <div class="dark">
            <form action="#">
                <span>
                    <input type="text" name="search" value="" class="search rounded id_search" placeholder="Recherche Menu..." autofocus />
                </span>
            </form>
        </div>

        <div class="search-hover">
            <form id="demo-2">
                <input type="search" placeholder="Recherche Menu..." class="id_search">
            </form>
        </div>
        <div class="skin-part">
            <div id="tree-wrap">
                <div class="side-bar">
                    <ul id="menu-showhide" class="topnav menu-left-nest" style="display:block">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" id="font-end" class="title-menu-left">
                                <span class="component"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                            </a>
                        </li>
						<li>
                            <a class="tooltip-tip ajax-load" href="#" title="CMS">
                                <i class="entypo-flow-cascade"></i>
                                <span>CMS</span>
                            </a>
                            <ul>
                                <li id="cms">
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo Config::get('app.base_url');?>
page" title="Pages">
									<i class="icon icon-document-new"></i>
									<span>Pages</span>
									</a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="#" title="Articles">
									<i class="icon icon-view-list-large"></i>
									<span>Articles</span>
									</a>
                                </li>
								<li>
                                    <a class="tooltip-tip2 ajax-load" href="#" title="Médias">
									<i class="entypo-picture"></i>
									<span>Médias</span>
									</a>
                                </li>
                            </ul>
                        </li>
						 <li>
                            <a class="tooltip-tip ajax-load" href="#" title="Themes">
                                <i class="entypo-palette"></i>
                                <span>Themes</span>
                            </a>
                        </li>
						<li>
                            <a class="tooltip-tip ajax-load" href="#" title="Outils">
                                <i class="entypo-tools"></i>
                                <span>Outils</span>
                            </a>
                        </li>
                    </ul>
				    <ul class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" id="framework" class="title-menu-left">

                                <span class="widget-menu"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>
						<li>
                            <a class="tooltip-tip ajax-load" id="mshema" href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
" title="Shemas & Migrations">
                                <i class="entypo-switch"></i>
                                <span>Shemas & Migrations</span>
                            </a>
                        </li>
						<li>
                            <a class="tooltip-tip ajax-load" id="mlink" href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
/links" title="Liens">
                                <i class="entypo-link"></i>
                                <span>Liens</span>
                            </a>
                        </li>
						<li>
                            <a class="tooltip-tip ajax-load" id="mlang" href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
/langues" title="Langues">
                                <i class="fontawesome-globe"></i>
                                <span>Langues</span>
                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="#" title="MVC">
                                <i class="entypo-flow-tree"></i>
                                <span>MVC</span>

                            </a>
                            <ul>
                                <li id="mvc">
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
/model" title="Model"><i class="icon icon-media-shuffle"></i><span>Model</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
/view" title="View"><i class="icon-preview"></i><span>View</span></a>
                                </li>
								<li>
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
/controller" title="Controller"><i class="fontawesome-cogs"></i><span>Controller</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" id="mseeds" href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
/seeds" title="Graines">
                                <i class="fontawesome-leaf"></i>
                                <span>Graines</span>

                            </a>
                        </li>
						<li>
                            <a class="tooltip-tip ajax-load" id="musers" href="#" title="Utilisateurs">
                                <i class="entypo-users"></i>
                                <span>Utilisateurs</span>

                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" id="minfo" href="<?php echo Config::get('app.base_url');
echo Config::get('panel.route');?>
/info" title="A propos">
                                <i class="icon icon-information"></i>
                                <span>A propos</span>
                            </a>
                        </li>
                    </ul>
					<ul id="menu-showhide" class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" id="module" class="title-menu-left">
                                <span class="design-kit"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                            </a>
                        </li>
						<li>
                            <a class="tooltip-tip ajax-load" href="#" title="Modules">
                                <i class="entypo-resize-small"></i>
                                <span>Modules</span>
                            </a>
                            <ul>
                                <li id="plugin">
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo Config::get('app.base_url');?>
plugin" title="Modules installés"><i class="entypo-download"></i><span>Modules installés</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="#" title="Ajouter"><i class="entypo-upload"></i><span>Importer</span></a>
                                </li>
								 <li>
                                    <a class="tooltip-tip2 ajax-load" href="#" title="Ajouter"><i class="icon-document-new"></i><span>Créer</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
					<ul id="menu-showhide" class="topnav menu-left-nest">
							<li>
								<a href="#" style="border-left:0px solid!important;" id="settings" class="title-menu-left">
									<span class="settings"></span>
									<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
								</a>
							</li>
							<li>
								<a class="tooltip-tip ajax-load" href="#" title="APP">
									<i class="icon icon-monitor"></i>
									<span>APP</span>
								</a>
							</li>
							 <li>
								<a class="tooltip-tip ajax-load" href="#" title="Mail">
									<i class="icon-mail"></i>
									<span>Mail</span>
								</a>
								<ul>
									<li>
										<a class="tooltip-tip2 ajax-load" href="#" title="Paramètre"><i class="fontawesome-cogs"></i><span>Paramètre</span></a>
									</li>
									<li>
										<a class="tooltip-tip2 ajax-load" href="#" title="Template"><i class="entypo-palette"></i><span>Template</span></a>
									</li>
								</ul>
							</li>
					</ul>
                </div>
            </div>
        </div>
    </div><?php }} ?>
