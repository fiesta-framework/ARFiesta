{* View file  : index.tpl *} 
{extends file="../../base.tpl.php"} 
{block name=title} {$smarty.block.parent} {$post_title}{/block} 
{block name=titlePage}
<section id="about" class="about pad-bottom white-bg">	
	<div class="container">
		<div class="row">
				<article class="text-left col-md-12">
					{if $post_password}
						<h1 class="main-heading"><span class="black font4">Oupss! <em class="dark font3 weight-light">Le contenu de cette page est verrouiller vueillez saisir le mot de passe </em></span></h1>
					{else}
						<h1 class="main-heading"><span class="black font4">{$post_title}<em class="dark font3 weight-light"></em></span></h1>
					{/if}
				</article>
		</div>
	</div>
</section>
{/block} 
{block name=meta}
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
{/block}
{block name=body}
	{if $post_password}
		<section id="call-to-action" class="page page-section call-to-action color-bg">	
			<div class="container">
				<div class="row">
					<article class="col-md-12 text-center">
							<h1 class="sub-heading"><span class="dark font4">Mot de passe :</span></h1>
							<div class="btn-wrap  text-center">
								<input name="password" type="password" class="form-control" />
								<button class="btn btn-seven btn-seven-dark">Envoyer</button>
						  </div>
					</article>
				</div>
			</div>
		</section>
	{else}
		{$post_content}
	{/if}
{/block} 