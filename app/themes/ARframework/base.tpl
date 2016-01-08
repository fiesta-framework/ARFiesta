<!DOCTYPE html>
<html lang="en">
<head>
    {Html::charset()}
    <title>{Config::get('app.title')} | {block name=title}{/block}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
	{Html::favicon("{Config::get('app.base_url')}public/favicon.ico")}
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
		{block name=styles}
			{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/style",false)}
			{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/loader-style",false)}
			{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/bootstrap",false)}
			{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/button/ladda/ladda.min",false)}
			{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/flexgrid/css/flexigrid.pack",false)}
		{/block}
		{block name=scriptHeader}
		{/block}
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/ico/minus.png">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- TOP NAVBAR -->
    {include file='../../inc/topNav.tpl'}
    <!-- /END OF TOP NAVBAR -->
    <!-- SIDE MENU -->
    {include file='../../inc/sideMenu.tpl'}
    <!-- END OF SIDE MENU -->
    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <!-- CONTENT -->
            <!--TITLE -->
			{block name=FiligranTitle}{/block}
            <!--/ TITLE -->
            <!-- BREADCRUMB -->
			{block name=BREADCRUMB}{/block}
            <!-- END OF BREADCRUMB -->
            <!--  DEVICE MANAGER -->
			{block name=body}{/block}
            <!--  / DEVICE MANAGER -->
			<!-- FOOTER -->
			{include file='../../inc/Footer.tpl'}
                <!-- / END OF FOOTER -->
        </div>
    </div>
    <!--  END OF PAPER WRAP -->
    <!-- RIGHT SLIDER CONTENT -->
    {include file='../../inc/SlideBar.tpl'}
    <!-- END OF RIGHT SLIDER CONTENT-->
    <!-- MAIN EFFECT -->
	{block name=scriptFooter}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/preloader.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/bootstrap.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/flexgrid/js/flexigrid.pack.js",false)}	
	<script>
		var links = "{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/"; 
		var base = "{Config::get('app.base_url')}"; 
	</script>
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/app.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/load.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/main.js",false)}
	{/block}
</body>
</html>
