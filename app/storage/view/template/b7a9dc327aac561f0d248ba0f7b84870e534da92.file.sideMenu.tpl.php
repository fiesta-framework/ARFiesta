<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-31 16:46:09
         compiled from "C:\wamp\www\ARCMS\app\themes\ARframework\inc\sideMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1012956854dc13a0bb7-65865114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7a9dc327aac561f0d248ba0f7b84870e534da92' => 
    array (
      0 => 'C:\\wamp\\www\\ARCMS\\app\\themes\\ARframework\\inc\\sideMenu.tpl',
      1 => 1450187721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1012956854dc13a0bb7-65865114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'front' => 0,
    'sub' => 0,
    'sub2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56854dc15a4623_36443501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56854dc15a4623_36443501')) {function content_56854dc15a4623_36443501($_smarty_tpl) {?><div id="skin-select">
        <div id="logo">
            <h1><img src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/img/logo.png" style="width: 21%;">
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
					<?php  $_smarty_tpl->tpl_vars['container'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['container']->_loop = false;
 $_from = Menu::MenuContainer(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['container']->key => $_smarty_tpl->tpl_vars['container']->value) {
$_smarty_tpl->tpl_vars['container']->_loop = true;
?>
                    <ul id="menu-showhide" class="topnav menu-left-nest" style="display:block">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" id="<?php echo $_smarty_tpl->tpl_vars['container']->value['id'];?>
" class="title-menu-left">
                                <span class=""><?php echo $_smarty_tpl->tpl_vars['container']->value['name'];?>
</span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                            </a>
                        </li>
						<?php  $_smarty_tpl->tpl_vars['front'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['front']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['container']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['front']->key => $_smarty_tpl->tpl_vars['front']->value) {
$_smarty_tpl->tpl_vars['front']->_loop = true;
?>
							<?php if (count($_smarty_tpl->tpl_vars['front']->value['sublink'])>0) {?>
								<li>
									<a class="tooltip-tip ajax-load" href="<?php echo $_smarty_tpl->tpl_vars['front']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['front']->value['title'];?>
">
										<i class="<?php echo $_smarty_tpl->tpl_vars['front']->value['icon'];?>
"></i>
										<span><?php echo $_smarty_tpl->tpl_vars['front']->value['title'];?>
</span>
									</a>
									<ul>
										<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['front']->value['sublink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
											<?php if (count($_smarty_tpl->tpl_vars['sub']->value['sublink'])>0) {?>
												<li id="<?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
">
													<a class="tooltip-tip2 ajax-load" href="<?php echo $_smarty_tpl->tpl_vars['sub']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
">
														<i class="<?php echo $_smarty_tpl->tpl_vars['sub']->value['icon'];?>
"></i>
														<span><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</span>
													</a>
													<ul>
														<?php  $_smarty_tpl->tpl_vars['sub2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub']->value['sublink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub2']->key => $_smarty_tpl->tpl_vars['sub2']->value) {
$_smarty_tpl->tpl_vars['sub2']->_loop = true;
?>
														<li id="cms2">
															<a class="tooltip-tip2 ajax-load" href="<?php echo $_smarty_tpl->tpl_vars['sub2']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['sub2']->value['title'];?>
">
																<i class="<?php echo $_smarty_tpl->tpl_vars['sub2']->value['icon'];?>
"></i>
																<span><?php echo $_smarty_tpl->tpl_vars['sub2']->value['title'];?>
</span>
															</a>
														</li>
														<?php } ?>
													</ul>
												</li>
											<?php } else { ?>
												<li>
													<a class="tooltip-tip2 ajax-load" id="<?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['sub']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
">
														<i class="<?php echo $_smarty_tpl->tpl_vars['sub']->value['icon'];?>
"></i>
														<span><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</span>
													</a>
												</li>
											<?php }?>
										<?php } ?>
									</ul>
								</li>
							<?php } else { ?>
								 <li>
									<a class="tooltip-tip ajax-load" href="<?php echo $_smarty_tpl->tpl_vars['front']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['front']->value['title'];?>
">
										<i class="<?php echo $_smarty_tpl->tpl_vars['front']->value['icon'];?>
"></i>
										<span><?php echo $_smarty_tpl->tpl_vars['front']->value['title'];?>
</span>
									</a>
								</li>
							<?php }?>
						<?php } ?>
                    </ul>
					<?php } ?>
					<ul id="menu-showhide" class="topnav menu-left-nest" style="display:none">
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
