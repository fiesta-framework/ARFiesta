<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8">
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) | !(IE 9) ]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
   <title>{Config::get('app.title')} | {block name=title}{/block}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Amine Abri">
	{Html::favicon("{Config::get('app.base_url')}public/favicon.ico")}
	{block name=styles}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/css/bootstrap.min",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/css/bootstrap-responsive.min",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/css/font-awesome.min",false)}
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans|Lato:100,300'  type='text/css'>
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/css/animation",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/css/supersized",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/css/prettyPhoto",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/css/styles",false)}
    {Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/css/color",false)}
	{/block}
    <!--[if lt IE 9]>
		{Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/html5shiv.js",false)}
    <![endif]-->
</head>
<body>
    {block name=body}{/block}
     <!-- SCRIPTS -->
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/jquery.min.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/jquery.easing.min.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/bootstrap.min.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/jquery.fittext.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/jquery.supersized.min.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/jquery.countdown.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/supersized.shutter.min.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/jquery.prettyPhoto.js",false)}
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/jflickrfeed.min.js",false)}
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/jquery.ui.map.min.js",false)}
	{block name=scriptFooter}{/block}
	<!--[if IE 7 | IE 8]>
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/respond.min.js",false)}
    <![endif]-->
</body>
</html>