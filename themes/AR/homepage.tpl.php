<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{Config::get('app.title')} - {block name=title}{/block}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	{Html::favicon("{Config::get('app.base_url')}public/favicon.ico")}
	{block name=styles}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/bootstrap/css/bootstrap",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/fonts/fonts",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/plugins-common",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/owl.carousel",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/owl.theme",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/intro07",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/main",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/less-compiled",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/main-bg",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/main-responsive",false)}
		{Libs::css("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/stylesheets/main-retina",false)}
	{/block}
	<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700%7CRaleway:400,300,700,900%7COpen+Sans:400,300,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		  <script src="bootstrap/js/html5shiv.js"></script>
		  <script src="bootstrap/js/respond.min.js"></script>
		<![endif]-->
</head>
<body class="intro-07-wrap">
<div class="sticky-border sticky-border-top"></div>
<div class="sticky-border sticky-border-right"></div>
<div class="sticky-border sticky-border-bottom"></div>
<div class="sticky-border sticky-border-left"></div>
{include file='../../inc/navigation.tpl.php'}
{include file='../../inc/header.tpl.php'}
<section id="mastwrap" class="mastwrap">
	<section id="intro" class="intro intro-07 pad-bottom intro-07-trans-bg fullheight">	
		{block name=body}{/block}
	</section>
</section>
<!-- Master Wrap : ends -->
{include file='../../inc/footer.tpl.php'}
{block name=scriptFooter}
	{Libs::js("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/javascripts/libs/plugins.js",false)}
	{Libs::js("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/javascripts/custom/navmenu-init.js",false)}
	{Libs::js("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/javascripts/custom/equalheights-init.js",false)} 
	{Libs::js("{Config::get('app.base_url')}themes/{Config::get('themes.nameFrontEnd')}/assets/javascripts/custom/main.js",false)} 
{/block}
</body>
</html>