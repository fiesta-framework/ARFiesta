<html>
<head>
	<meta charset="utf-8"/>
	<title>{Config::get('app.title')} - {block name=title}{/block}</title>
	{block name=styles}
		{Libs::css("{Config::get('app.base_url')}public/assets/css/bootstrap-3.3.1.min",false)}
		{Libs::css("{Config::get('app.base_url')}public/assets/css/bootstrap-theme-3.3.1.min",false)}
		{Html::favicon("{Config::get('app.base_url')}public/favicon.ico")}
	{/block}
	{block name=scriptHeader}
	{Libs::js("{Config::get('app.base_url')}public/assets/js/jquery-1.11.3.min.js",false)}
	{/block}
</head>
<body style="">
	{imagedataurls IMG="{Config::get('app.base_url')}public/assets/images/ArFramework_logo.png" CLASS="img" ID="hello_logo" STYLE="display:none"}
	<div id="welcom" style="display:none">
		{block name=body}{/block}
	</div>
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