<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-31 17:25:18
         compiled from "C:\wamp\www\ARCMS\themes\AR\inc\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23090568556ee85b520-38368834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3905a9655301e2c0c17865621e26bf65ff8a12da' => 
    array (
      0 => 'C:\\wamp\\www\\ARCMS\\themes\\AR\\inc\\navigation.tpl',
      1 => 1450305729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23090568556ee85b520-38368834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'submenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_568556ee9becf5_08222820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568556ee9becf5_08222820')) {function content_568556ee9becf5_08222820($_smarty_tpl) {?><!-- main navigation trigger -->
<div class="main-nav visible-lg">
	<div class="mobile-toggle">
	    <span></span>
	    <span></span>
	    <span></span>
	</div>
</div>
<!-- main menu : starts -->
<section class="menu-panel menu-bg fullheight">
<div class="row">
  <article class="col-md-12 fullheight nav-list-holder">
    <div class="valign">
      <nav class="nav-item-wrap">
      	<img data-no-retina alt="seven" title="seven" class="nav-logo img-responsive" src="<?php echo Config::get('app.base_url');?>
themes/<?php echo Config::get('themes.nameFrontEnd');?>
/assets/images/logo.png"/>
          <ul class="main-nav-menu main-nav-menu-effect font4">
			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = Menu::getMenuByGroup(array("id"=>1,"table"=>"menu")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
			<?php if (count($_smarty_tpl->tpl_vars['menu']->value['sublink'])>0) {?>
				<li class="trigger-sub-nav">
                  <a class="main-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</a>
                  <div class="sub-nav">				  
					<?php  $_smarty_tpl->tpl_vars['submenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['sublink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->key => $_smarty_tpl->tpl_vars['submenu']->value) {
$_smarty_tpl->tpl_vars['submenu']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['submenu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['submenu']->value['title'];?>
</a>
					<?php } ?>
                  </div>
				</li>
			<?php } else { ?>
				<li class="trigger-sub-nav"><a class="main-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</a></li>
			<?php }?>
			<?php } ?>
            </ul>
        </nav>
    </div>
  </article>

</div>
</section>
<!-- main menu : ends -->

<!-- mobile only navigation : starts -->
<nav class="mobile-nav hidden-lg">
    <ul>
		<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = Menu::getMenuByGroup(array("id"=>1,"table"=>"menu")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
			<?php if (count($_smarty_tpl->tpl_vars['menu']->value['sublink'])>0) {?>
				<li class="trigger-sub-nav">
                  <a class="main-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</a>
                  <div class="sub-nav">				  
					<?php  $_smarty_tpl->tpl_vars['submenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['sublink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->key => $_smarty_tpl->tpl_vars['submenu']->value) {
$_smarty_tpl->tpl_vars['submenu']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['submenu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['submenu']->value['title'];?>
</a>
					<?php } ?>
                  </div>
				</li>
			<?php } else { ?>
				<li class="trigger-sub-nav"><a class="main-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
</a></li>
			<?php }?>
		<?php } ?>
    </ul>
</nav>
<!-- mobile only navigation : ends --><?php }} ?>
