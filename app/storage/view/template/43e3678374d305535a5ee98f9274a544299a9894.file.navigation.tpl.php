<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-10 18:15:16
         compiled from "C:\wamp\www\Arframework\app\themes\ARframework\Front-end\inc\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113945669b3242be943-80237678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43e3678374d305535a5ee98f9274a544299a9894' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\Front-end\\inc\\navigation.tpl',
      1 => 1449684220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113945669b3242be943-80237678',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5669b3242ddd41_85117200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5669b3242ddd41_85117200')) {function content_5669b3242ddd41_85117200($_smarty_tpl) {?><!-- main navigation trigger -->
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
app/themes/<?php echo Config::get('themes.name');?>
/Front-end/assets/images/logo.png"/>
          <ul class="main-nav-menu main-nav-menu-effect font4">
              <li class="trigger-sub-nav">
                  <a class="main-nav-link" href="#">home</a>
                  <div class="sub-nav">
                    <a href="index07.html">Showcase</a>
                    <a href="index01.html">Featured</a>
                    <a href="index08.html">Agency</a>
                    <a href="index04.html">Masonry</a>
                    <a href="index03.html">Personal</a>
                    <a href="index02.html">Fullscreen</a>
                    <a href="index05.html">Youtube BG</a>
                    <a href="index06.html">Vimeo BG</a>
                  </div>
              </li>

              <li class="trigger-sub-nav">
                  <a class="main-nav-link" href="#">agency</a>
                  <div class="sub-nav">
                    <a href="about.html">about</a>
                    <a href="services.html">services</a>
                    <a href="pricing.html">pricing</a>
                    <a href="contact.html">contact</a>
                  </div>
              </li>  

              <li class="trigger-sub-nav">
                  <a class="main-nav-link" href="#">works</a>
                  <div class="sub-nav">
                    <a href="works-masonry.html">masonry</a>
                    <a href="works-grid.html">grid view</a>
                    <a href="single-project.html">single project</a>
                  </div>
              </li>  


              <li class="trigger-sub-nav">
                  <a class="main-nav-link" href="#">news</a>
                  <div class="sub-nav">
                    <a href="news.html">news list</a>
                    <a href="news-post.html">news post</a>
                  </div>
              </li> 

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
      <li><a href="#">Intro</a>
        <ul>
          <li><a href="index07.html">Showcase</a></li>
          <li><a href="index01.html">Featured</a></li>
          <li><a href="index08.html">Agency</a></li>
          <li><a href="index04.html">Masonry</a></li>
          <li><a href="index03.html">Personal</a></li>
          <li><a href="index02.html">Fullscreen</a></li>
          <li><a href="index05.html">Youtube BG</a></li>
          <li><a href="index06.html">Vimeo BG</a></li>
        </ul>
      </li>
      <li><a href="#">Agency</a>
        <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </li>
      <li><a href="#">Works</a>
        <ul>
          <li><a href="works-masonry.html">Masonry</a></li>
          <li><a href="works-grid.html">Grid View</a></li>
        </ul>
      </li>
      <li><a href="#">News</a>
        <ul>
          <li><a href="news.html">News List</a></li>
          <li><a href="news-post.html">News Post</a></li>
        </ul>
      </li>
    </ul>
</nav>
<!-- mobile only navigation : ends --><?php }} ?>
