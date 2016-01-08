<html>
<head>
	{Html::charset("utf-8")}
	<title>{Config::get('app.title')} | {block name=title}{/block}</title>
	{Html::favicon("{Config::get('app.base_url')}public/favicon.ico")}
	{Libs::css("public/assets/css/bootstrap-3.3.1.min.css",false)}
	{Libs::css("public/assets/css/bootstrap-theme-3.3.1.min.css",false)}
	{Libs::css("app/modules/welcom/Resources/public/css/hello.css",false)}
	{Libs::js("public/assets/js/jquery-1.11.3.min.js",false)}
	{Libs::js("app/modules/welcom/Resources/public/js/hello.js",false)}
</head>
<body>
{block name=body}{/block}
{block name=scriptFooter}
<script type="text/javascript">
		var Timer3 = setInterval(function(){ fade3() }, 400);
		var Timer1 = setInterval(function(){ fade1() }, 500);
		var Timer2 = setInterval(function(){ fade2() }, 1000);

		function fade1 () 
		{
			$( "#welcom" ).fadeTo( "slow", 1 );
			clearInterval(Timer1);
		}

		function fade2 () 
		{
			$( "#bottom_panel" ).fadeTo( "slow", 1 );
			clearInterval(Timer2);
		}

		function fade3 () 
		{
			$( "#hello_logo" ).fadeTo( "slow", 1 );
			clearInterval(Timer3);
		}
	</script>
{/block}
</body>
</html>