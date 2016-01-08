{* View file  : index.tpl *} 
{extends file="../../defaultInstall.tpl"} 
{block name=title} {$smarty.block.parent} Welcom{/block} 
{block name=body} 
		<img src="{Config::get('app.base_url')}public/assets/images/ArFramework_logo.png" class="img" id="hello_logo" style="display:none">
		<div id="welcom" style="display:none">
			<div class="text">
				{Lang::__("WELCOM", {Config::get('app.owner')})}				
			</div>
				{*ShortCode::add_shortcode("[module id=13 name=welcom view=shortcode.listing backend=1]")*}
		</div>
		{if isset($smarty.session.ArFramework_pnl_fst_username) && $smarty.session.ArFramework_pnl_fst_username == Config::get('panel.username')}
			<div class="bottom_panel" id="bottom_panel" style="display:none">
				<a id="fst_panel" href="{Config::get('panel.route')}" target="_blank"><div class="btn hello_button" id="login">{Config::get('app.project')} Panel</div></a>
			</div>
		{/if}
{/block}
{block name=scriptFooter}
	{$smarty.block.parent} 
	<script>
		$(document).ready(function (){
			$("body").removeClass('installBody');
		});
	</script>
{/block}