<div id="skin-select">
        <div id="logo">
            <h1><img src="{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/img/logo.png" style="width: 21%;">
                <span>{Config::get('app.version')}</span>
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
					{foreach from=Menu::MenuContainer() item=container}
                    <ul id="menu-showhide" class="topnav menu-left-nest" style="display:block">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" id="{$container.id}" class="title-menu-left">
                                <span class="">{$container.name}</span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                            </a>
                        </li>
						{foreach from=$container.menu item=front}
							{if count($front.sublink) > 0}
								<li>
									<a class="tooltip-tip ajax-load" href="{$front.link}" title="{$front.title}">
										<i class="{$front.icon}"></i>
										<span>{$front.title}</span>
									</a>
									<ul>
										{foreach from=$front.sublink item=sub}
											{if count($sub.sublink) > 0}
												<li id="{$sub.title}">
													<a class="tooltip-tip2 ajax-load" href="{$sub.link}" title="{$sub.title}">
														<i class="{$sub.icon}"></i>
														<span>{$sub.title}</span>
													</a>
													<ul>
														{foreach from=$sub.sublink item=sub2}
														<li id="cms2">
															<a class="tooltip-tip2 ajax-load" href="{$sub2.link}" title="{$sub2.title}">
																<i class="{$sub2.icon}"></i>
																<span>{$sub2.title}</span>
															</a>
														</li>
														{/foreach}
													</ul>
												</li>
											{else}
												<li>
													<a class="tooltip-tip2 ajax-load" id="{$sub.title}" href="{$sub.link}" title="{$sub.title}">
														<i class="{$sub.icon}"></i>
														<span>{$sub.title}</span>
													</a>
												</li>
											{/if}
										{/foreach}
									</ul>
								</li>
							{else}
								 <li>
									<a class="tooltip-tip ajax-load" href="{$front.link}" title="{$front.title}">
										<i class="{$front.icon}"></i>
										<span>{$front.title}</span>
									</a>
								</li>
							{/if}
						{/foreach}
                    </ul>
					{/foreach}
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
    </div>