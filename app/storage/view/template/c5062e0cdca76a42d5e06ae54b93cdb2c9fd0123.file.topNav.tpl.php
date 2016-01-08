<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-08 22:18:11
         compiled from "C:\wamp\www\ARFIESTACMS\app\themes\ARframework\inc\topNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1461756902793443b81-90485825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5062e0cdca76a42d5e06ae54b93cdb2c9fd0123' => 
    array (
      0 => 'C:\\wamp\\www\\ARFIESTACMS\\app\\themes\\ARframework\\inc\\topNav.tpl',
      1 => 1450056007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1461756902793443b81-90485825',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_569027934a17a3_21708536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569027934a17a3_21708536')) {function content_569027934a17a3_21708536($_smarty_tpl) {?><nav role="navigation" class="navbar navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="entypo-menu"></span>
                </button>
                <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                    <span class="entypo-list-add"></span>
                </button>
                <div id="logo-mobile" class="visible-xs">
                    <h1><img src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/medias/img/logo.png" style="width:57%;">
                        <span><?php echo Config::get('app.version');?>
</span>
                    </h1>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" class="admin-pic img-circle" src="https://media.licdn.com/mpr/mpr/shrink_100_100/AAEAAQAAAAAAAANeAAAAJDE2MGQ0ODkyLTMxYWEtNDk0ZC05OTk0LTUwMWQ5NDkwOGQ4MA.jpg">Bonjour, <?php echo $_SESSION['ArFramework_pnl_fst_profil']['display_name'];?>
<b class="caret"></b>
                        </a>
                        <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                            <li>
                                <a href="#">
                                    <span class="entypo-user"></span>&#160;&#160;My Profile</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-lifebuoy"></span>&#160;&#160;Help</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo Config::get('app.base_url');?>
user/logout">
                                    <span class="entypo-logout"></span>&#160;&#160;Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="entypo-palette"></span>&#160;&#160;Themes</a>
                        <ul role="menu" class="dropdown-setting dropdown-menu">
                            <li class="theme-bg">
                                <div id="button-bg"></div>
                                <div id="button-bg2"></div>
                                <div id="button-bg3"></div>
                                <div id="button-bg5"></div>
                                <div id="button-bg6"></div>
                                <div id="button-bg7"></div>
                                <div id="button-bg8"></div>
                                <div id="button-bg9"></div>
                                <div id="button-bg10"></div>
                                <div id="button-bg11"></div>
                                <div id="button-bg12"></div>
                                <div id="button-bg13"></div>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="<?php echo Config::get('app.base_url');?>
" target="_blank">
                            <span style="font-size:20px;" class="icon-preview"></span>
                        </a>
                    </li>
					<li class="hidden-xs">
                        <a class="toggle-left">
                            <span style="font-size:20px;" class="entypo-list-add"></span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav><?php }} ?>
