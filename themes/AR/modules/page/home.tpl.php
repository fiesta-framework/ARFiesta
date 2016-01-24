{* View file  : index.tpl *} 
{extends file="../../homepage.tpl.php"} 
{block name=title} {$smarty.block.parent} {$post_title}{/block} 
{block name=body} 
{$post_content}
{/block} 