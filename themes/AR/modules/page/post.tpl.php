{* View file  : index.tpl *} 
{extends file="../../base.tpl.php"} 
{block name=title} {$smarty.block.parent} {$DATA['post_title']}{/block} 
{block name=titlePage}
<section id="news" class="news pad-bottom-half white-bg">	
	<div class="container">
		<div class="row">
				<article class="text-left col-md-12">
					<h4><span class="dark font2">By Admin / Category</span></h4>
					<h1 class="main-heading"><span class="black font4"><em class="dark font3 weight-light">{$DATA['post_title']}</em></span></h1>
		  			<div class="news-date text-left add-top-quarter">
		  					<h1 class="black font4">{$date = $DATA['post_date']}{$date|date_format:'%d'}</h1>
		  					<h3 class="black font3 weight-light">{$date|date_format:'%B'}</h3>
		  			</div>
				</article>
		</div>
	</div>
</section>
{/block} 
{block name=meta}
	<meta name="description" content="{$DATA['post_short_content']}">
	<meta name="keywords" content="{$TAG_DATA['tag_value']}">
	<meta name="author" content="{$DATA['post_author']}">
{/block}
{block name=body} 
{if is_array($MEDIA_DATA)}
<section class="news-image-wrap white-bg">
	<div class="container">
		<div class="row">
			<article class="text-center col-md-12">
				{if $MEDIA_DATA['media_type'] == "audio"}
					{if $MEDIA_DATA['media_name'] == "soundcloud"}
					<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{$MEDIA_DATA['media_value']}&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
					{/if}
				{elseif $MEDIA_DATA['media_type'] == "video"}
					{if $MEDIA_DATA['media_name'] == "youtube"}
					<iframe width="100%" height="450" src="https://www.youtube.com/embed/{$MEDIA_DATA['media_value']}" frameborder="0" allowfullscreen></iframe>
					{elseif $MEDIA_DATA['media_name'] == "vimeo"}
					<iframe src="https://player.vimeo.com/video/{$MEDIA_DATA['media_value']}"  width="100%" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					{/if}
				{elseif $MEDIA_DATA['media_type'] == "image"}
					<img data-no-retina alt="" title="" class="img-responsive" src="{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/images/bg/01.jpg"/>
				{/if}
				
			</article>
		</div>
	</div>
</section>
{/if}
<section class="about pad-top-half pad-bottom white-bg">
	<div class="container">{$DATA['post_content']}</div>
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
{block name=scriptFooter}
{$smarty.block.parent} 
<script>
$(document).ready(function (){
	$('#mastwrap').removeClass('slant-bottom-white');
	$('#footer').addClass('space-top');
	$('#mastwrap').addClass('slant-bottom-color');
});
</script>
{/block}