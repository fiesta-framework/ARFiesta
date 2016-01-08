{* View file  : index.tpl *} 
{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Articles {/block} 
{block name=titlePage}
<section id="news" class="news pad-bottom white-bg">	
	<div class="container">
		<div class="row">
				<article class="text-left col-md-12">
					<h1 class="main-heading"><span class="black font4">Nouvelles Postes. <em class="dark font3 weight-light">Les dernières mises à jour de notre blog</em></span></h1>
				</article>
		</div>
	</div>
</section>
{/block} 
{block name=body} 
<section class="news-list-wrap">
	{foreach $posts as $post}
	<section class="news-list news-list-01 page-section {if $post@key%2}white-bg {else}offwhite-bg{/if}">	
		<a href="{Config::get('app.base_url')}page/t/{$post->post_name}">
			<div class="container">
				<div class="row">
							<div class="col-md-9 text-left">
									<h3 class="font2 black">{$post->post_title}</h3>
									<div class="news-border color-bg"></div>
									<p>{$post->post_short_content|truncate:260:"...":true}</p>
							</div>
							<div class="col-md-3 news-date text-left">
									<h1 class="black font4">{$post->post_date|date_format:'%d'}</h1>
									<h3 class="black font3 weight-light">{$post->post_date|date_format:'%B'}</h3>
							</div>
				</div>
			</div>
		</a>
	</section>
	{/foreach}
</section>
<section id="call-to-action" class="page page-section call-to-action color-bg">	
	<div class="container">
		<div class="row">
			<article class="col-md-12 text-center">
					<h1 class="sub-heading"><span class="dark font4">Looking for More?</span></h1>
	  				<div class="btn-wrap  text-center">
                    	<a class="btn btn-seven btn-seven-dark" href="#">Click to Action</a>
                  </div>
			</article>
		</div>
	</div>
</section>
{/block} 