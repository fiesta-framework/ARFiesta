<!-- main navigation trigger -->
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
      	<img data-no-retina alt="seven" title="seven" class="nav-logo img-responsive" src="{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/images/logo.png"/>
          <ul class="main-nav-menu main-nav-menu-effect font4">
			{foreach from=Menu::getMenuByGroup(["id"=> 1,"table"=> "menu"]) item=menu}
			{if count($menu.sublink)>0}
				<li class="trigger-sub-nav">
                  <a class="main-nav-link" href="{$menu.link}">{$menu.title}</a>
                  <div class="sub-nav">				  
					{foreach from=$menu.sublink item=submenu}
						<a href="{$submenu.link}">{$submenu.title}</a>
					{/foreach}
                  </div>
				</li>
			{else}
				<li class="trigger-sub-nav"><a class="main-nav-link" href="{$menu.link}">{$menu.title}</a></li>
			{/if}
			{/foreach}
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
		{foreach from=Menu::getMenuByGroup(["id"=> 1,"table"=> "menu"]) item=menu}
			{if count($menu.sublink)>0}
				<li class="trigger-sub-nav">
                  <a class="main-nav-link" href="{$menu.link}">{$menu.title}</a>
                  <div class="sub-nav">				  
					{foreach from=$menu.sublink item=submenu}
						<a href="{$submenu.link}">{$submenu.title}</a>
					{/foreach}
                  </div>
				</li>
			{else}
				<li class="trigger-sub-nav"><a class="main-nav-link" href="{$menu.title}">{$menu.link}</a></li>
			{/if}
		{/foreach}
    </ul>
</nav>
<!-- mobile only navigation : ends -->