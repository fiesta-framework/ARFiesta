<!DOCTYPE html>
<html lang="en">
<head>
    {Html::charset()}
    <title>{Config::get('app.title')} | {block name=title}{/block}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
	{Html::favicon("{Config::get('app.base_url')}public/favicon.ico")}
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
	{Libs::js("app/modules/welcom/Resources/public/js/hello.js",false)}
	{block name=styles}
		{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/loader-style",false)}
		{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/bootstrap",false)}
		{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/signin",false)}
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
	{block name=body}{/block}
    <!--  END OF PAPER WRAP -->
	{block name=scriptFooter}
		{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/preloader.js",false)}
		{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/js/bootstrap.js",false)}
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
