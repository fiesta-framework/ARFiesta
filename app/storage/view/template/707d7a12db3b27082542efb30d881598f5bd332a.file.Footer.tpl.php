<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-08 22:18:11
         compiled from "C:\wamp\www\ARFIESTACMS\app\themes\ARframework\inc\Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3007569027936e3a25-71549999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '707d7a12db3b27082542efb30d881598f5bd332a' => 
    array (
      0 => 'C:\\wamp\\www\\ARFIESTACMS\\app\\themes\\ARframework\\inc\\Footer.tpl',
      1 => 1449352220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3007569027936e3a25-71549999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_569027936f72a9_08069290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569027936f72a9_08069290')) {function content_569027936f72a9_08069290($_smarty_tpl) {?> <div class="footer-space"></div>
            <div id="footer">
                <div class="devider-footer-left"></div>
                    <div class="time">
                        <p id="spanDate"></p>
                        <p id="clock"></p>
                    </div>
                    <div class="copyright">Make with Love
                        <span class="entypo-heart"></span>2015 <a href="#"><?php echo Config::get('app.project');?>
</a> All Rights Reserved</div>
                    <div class="devider-footer"></div>
            </div>
			
<?php }} ?>
