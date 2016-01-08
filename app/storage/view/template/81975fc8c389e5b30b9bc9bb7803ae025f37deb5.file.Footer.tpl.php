<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-31 16:46:09
         compiled from "C:\wamp\www\ARCMS\app\themes\ARframework\inc\Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1407056854dc15eab38-12438331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81975fc8c389e5b30b9bc9bb7803ae025f37deb5' => 
    array (
      0 => 'C:\\wamp\\www\\ARCMS\\app\\themes\\ARframework\\inc\\Footer.tpl',
      1 => 1449352220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1407056854dc15eab38-12438331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56854dc15fe3c8_03348171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56854dc15fe3c8_03348171')) {function content_56854dc15fe3c8_03348171($_smarty_tpl) {?> <div class="footer-space"></div>
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
