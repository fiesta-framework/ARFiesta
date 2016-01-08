<?php 
//
//
if(isset($ok) && $ok==true){
header('Content-Type: text/html'); 
//define('PHP_TAB',"\t");



?>

<head>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
	<title>
		Ohlala! Il y avait une erreur
	</title>
	<style type="text/css">
	body
	{
		text-align: inherit;
	}
	.main_cont
	{
		height: 100%;
		width: 100%;
		position: fixed;
		margin: 0;
		padding: 0;
		left: 0;
		top: 0;
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		font-size: 14px;
		line-height: 1.42857143;
		color: #333;
		background-color: #fff;
		padding:0px;
		margin:0px;
	}
	.left-part
	{
		width: 100%;
		overflow-x: hidden;
		height: 100%;
		overflow-y: scroll;
		vertical-align:top;
		display:inline-block;
	}
	.right-part
	{
		display: inline-block;
		width: 25%;
		vertical-align: top;
		overflow-x: hidden;
		height: 100%;
		overflow-y: scroll;
		background-color: #b1c2d5;
	}

	.right-part .title
	{
		width: 100%;
		/*padding: 20px;*/
		background: #0a98f8;
		color: white;
	}

	.right-part .title h1
	{
		font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		font-weight: lighter;
		width: 100%;
		margin: 0px;
		padding: 10px 0px;
		font-family: 'Ubuntu', sans-serif;
	}


	.mainmsg
	{
		word-break: break-word;
		color:white;
		padding:20px;
		border-left:4px solid #e9005a;
		font:19px helvetica, arial, sans-serif;
		font-family: 'Ubuntu', sans-serif;
		background: #272727; 
		background: -moz-linear-gradient(top,  #353535 0%, #272727 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#353535), color-stop(100%,#272727)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #353535 0%,#272727 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #353535 0%,#272727 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #353535 0%,#272727 100%); /* IE10+ */
		background: linear-gradient(to bottom,  #353535 0%,#272727 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#353535', endColorstr='#272727',GradientType=0 ); /* IE6-9 */

	}

	.type_fatal_err
	{
		background:#dc0038;
		color:white;
		padding:8px;
		font-family: 'Ubuntu', sans-serif;
		border-left:4px solid #ff879b
	}

	.type_warning
	{
		background:#ff6729;
		color:white;
		padding:8px;
		font-family: 'Ubuntu', sans-serif;
		border-left:4px solid #ffccb3
	}

	.type_parse
	{
		background:#8509ff;
		color:white;
		padding:8px;
		font-family: 'Ubuntu', sans-serif;
		border-left:4px solid #dba7ff
	}

	.type_notice
	{
		background:#1b8dff;
		color:white;
		padding:8px;
		font-family: 'Ubuntu', sans-serif;
		border-left:4px solid #8ecdff
	}

	.file
	{
		background:#bdbdbd;
		color:white;
		padding:8px;
		font-family: 'Ubuntu', sans-serif;
		border-left:4px solid #eb8937
	}

	.codeEditor
	{
		border: 1px solid black;
		border-radius:4px;
		margin:8px;
		font-size: 13px;
		
	}

	.codeEditor .title
	{
		padding:8px;
		color: #2d2d2d;
		background: #f2f6f8; /* Old browsers */
		background: -moz-linear-gradient(top,  #f2f6f8 0%, #d8e1e7 50%, #b5c6d0 51%, #e0eff9 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2f6f8), color-stop(50%,#d8e1e7), color-stop(51%,#b5c6d0), color-stop(100%,#e0eff9)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #f2f6f8 0%,#d8e1e7 50%,#b5c6d0 51%,#e0eff9 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #f2f6f8 0%,#d8e1e7 50%,#b5c6d0 51%,#e0eff9 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #f2f6f8 0%,#d8e1e7 50%,#b5c6d0 51%,#e0eff9 100%); /* IE10+ */
		background: linear-gradient(to bottom,  #f2f6f8 0%,#d8e1e7 50%,#b5c6d0 51%,#e0eff9 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f6f8', endColorstr='#e0eff9',GradientType=0 ); /* IE6-9 */
		border-radius:4px;


	}


	.codeEditor .code
	{
		padding:0px;
		background-color: #2d2d2d;
		color: white;
		font-family: consolas;
	}

	.line_number
	{
		padding:0px 12px;
		background-color: #464646;
		display: inline-block;
		margin-right:3px;
	}

	.key_word
	{
		color:deepskyblue;
	}

	.bool_word
	{
		color:#eb4e37;
	}

	.poo_word
	{
		color:#7010a6;
	}

	.error_line
	{
		background-color: #d0002e;
	}
	.error_line_arround
	{
		background-color: #840026;
	}

	.globals
	{
		background:#e0e0e0;
		/*color:white;*/
		padding:8px;
		border-left:4px solid #1587df
	}

	.globals h4
	{
		color:#1587df;
		border-bottom:1px dotted #c3c3c3;
		padding:10px;
		margin:2px;

	}

	.table_key
	{
		font-weight: bold;
		font-size: 13px;
		padding-right: 10px;
		width: 20%;
		display: table-cell;
	}

	.table_value
	{
		/*font-weight: bold;*/
		font-size: 13px;
		width: 80%;
		display: table-cell;
		word-wrap: break-word;
	}

	.table_row
	{
		/*font-weight: bold;*/
		line-height: 20px;
		display: table-row;
		
	}

	.table_data
	{
		margin-left: 15px;
	}

	.no_data_span
	{
		margin:3px 10px;
		font-size: 12px;
		color: gray;
	}

	.panel-group
	{
		background: white;
		border-radius: 5px;
		margin-bottom:15px;
	}

	.err_log_prt
	{
		
		display: block;
		margin: 4px;
		border-radius: 4px;
		border: 1px solid #b1c2d5;
		background-color: white;

	}

	.err_log_prt_frst
	{
		background-color: #d9d9d9;
	}

	.err_log_prt_scnd
	{
		background-color: #f2f2f2;
	}

	.err_log_time
	{
		
		padding: 6px;
		color: #2388ff;
		border-bottom: 1px dotted #919191;
	}

	.err_log_body
	{
		color:black;
		padding: 4px;
	
		display: block;
		word-wrap: break-word;
	}

	



</style>
</head>
<body>
	<div class="main_cont">
<div class="left-part">	
	<?php 
	$class="";
	$phpError="";
	$phperrorname="";
	//
	switch ($error['type']) {
		case '1':
			$class="type_fatal_err";
			$phpError="E_ERROR";
			$phperrorname="Fatal Error ($phpError)";
			break;

		case '2':
			$class="type_warning";
			$phpError="E_WARNING";
			$phperrorname="Warning ($phpError)";
			break;

		case '4':
			$class="type_parse";
			$phpError="E_PARSE";
			$phperrorname="Parse Error ($phpError)";
			break;

		case '8':
			$class="type_notice";
			$phpError="E_NOTICE";
			$phperrorname="Notice ($phpError)";
			break;

		case '16':
			$class="type_fatal_core";
			$phpError="E_CORE_ERROR";
			$phperrorname="PHP Core Fatal Error ($phpError)";
			break;

		case '32':
			$class="type_warning_core";
			$phpError="E_CORE_WARNING";
			$phperrorname="PHP Core Warning ($phpError)";
			break;

		case '64':
			$class="type_zend_error";
			$phpError="E_COMPILE_ERROR";
			$phperrorname="Zend Fatal Error ($phpError)";
			break;

		case '128':
			$class="type_zend_error";
			$phpError="E_COMPILE_WARNING";
			$phperrorname="Zend warning ($phpError)";
			break;

		case '256':
			$class="type_user_error";
			$phpError="E_USER_ERROR";
			$phperrorname="Zend warning ($phpError)";
			break;

		case '512':
			$class="type_user_error";
			$phpError="E_USER_WARNING";
			$phperrorname="Zend warning ($phpError)";
			break;

		case '1024':
			$class="type_user_error";
			$phpError="E_USER_NOTICE";
			$phperrorname="Zend warning ($phpError)";
			break;

		case '2048':
			$class="type_other_error";
			$phpError="E_STRICT";
			$phperrorname="PHP Error ($phpError)";
			break;

		case '4096':
			$class="type_other_error";
			$phpError="E_STRICT";
			$phperrorname="PHP Error ($phpError)";
			break;

		case '8192':
			$class="type_other_error";
			$phpError="E_STRICT";
			$phperrorname="PHP Error ($phpError)";
			break;

		case '16384':
			$class="type_other_error";
			$phpError="E_STRICT";
			$phperrorname="PHP Error ($phpError)";
			break;

		case '32767':
			$class="type_other_error";
			$phpError="E_STRICT";
			$phperrorname="PHP Error ($phpError)";
			break;

		

	}

	?>
	<div class="fixed">
	<div class='<?php echo $class ?>'>
		<span>
			<?php echo $phperrorname ?>
		</span>
	</div>
	<div class="mainmsg">
		<h1><?php echo $error['mesg'] ?></h1>
	</div>
	</div>

	<div class="file">
		<div class="codeEditor">
		<div class="title"><?php echo "Open :<b>".$error['file']."</b> (Ligne : ".$error['line'].")" ?></div>
		<div class="code">
		<?php 
			$lines = file($error['file'],FILE_IGNORE_NEW_LINES);
			if($error['line']>=10) $start=$error['line']-10;
			else $start=1;

			if(($error['line']+4)<=(count($lines)-1)) $end=$error['line']+4;
			else $end=count($lines)-1;
			//$end=$error['line']+4;
			
			//echo $lines[$error['line']];
			for ($i=$start; $i < $end; $i++) {
				$str= $lines[$i-1];
				//
				$str=str_replace("echo", "<span class='key_word'>echo</span>", $str);
				 $str=str_replace("try", "<span class='key_word'>try</span>", $str);
				 $str=str_replace("catch", "<span class='key_word'>catch</span>", $str);
				 $str=str_replace("if", "<span class='key_word'>if</span>", $str);
				 $str=str_replace("for", "<span class='key_word'>for</span>", $str);
				$str=str_replace("foreach", "<span class='key_word'>foreach</span>", $str);
				$str=str_replace("while", "<span class='key_word'>while</span>", $str);
				$str=str_replace("return", "<span class='key_word'>return</span>", $str);
				$str=str_replace("false", "<span class='bool_word'>false</span>", $str);
				$str=str_replace("true", "<span class='bool_word'>true</span>", $str);
				$str=str_replace("class ", "<span class='poo_word'>class</span>", $str);
				$str=str_replace("public", "<span class='poo_word'>public</span>", $str);
				$str=str_replace("static", "<span class='poo_word'>static</span>", $str);
				$str=str_replace("function", "<span class='poo_word'>function</span>", $str);

				//
				$t="<div class='line_number'>$i</div>".$str."<br>";
				$y=str_replace("\t", '<div style="width:30px;height:10px;display:inline-block"></div>', $t);
				
				if(($error['line'])==$i) echo "<div class='error_line'>$y</div>";
				else if(($error['line'])==($i+1)) echo "<div class='error_line_arround' style='box-shadow: 0px -4px 9px 0px rgba(0,0,0,0.3) inset;'>$y</div>";
				else if(($error['line'])==($i-1)) echo "<div class='error_line_arround' style='box-shadow: 0px 4px 9px 0px rgba(0,0,0,0.3) inset;'>$y</div>";
				else echo "<div >$y</div>";
			}
		?>
		</div>
		</div>
	</div>
	<div class="globals">


	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
				<h4>Post Data</h4>


			<div id="collapseOne" class="panel-collapse collapse in" style="padding-bottom: 8px;">
				<table class='table_data'>
					<?php 
					$i=0;
					foreach ($_POST as $key => $value) {
						$i=1;
						echo "<tr class='table_row'>";
						echo "<td class='table_key'>$key</td>";
						echo "<td class='table_value'>$value</td>";
						echo "</tr>";

					} 
					if($i==0) echo "<span class='no_data_span'>No Data</span>";?>
				</table>
			</div>
		</div>
	</div>


	 <div class="panel-group" id="accordion">
		<div class="panel panel-default">
				<h4>Get Data</h4>
		

			<div id="collapseOne" class="panel-collapse collapse in" style="padding-bottom: 8px;">
				<table class='table_data '>
					<?php 
					$i=0;
					foreach ($_GET as $key => $value) {
						if($key!="url")
						{
							$i=1;
							echo "<tr class='table_row'>";
							echo "<td class='table_key'>$key</td>";
							echo "<td class='table_value'>$value</td>";
							echo "</tr>";
						}

					}
					if($i==0) echo "<span class='no_data_span'>No Data</span>"; ?>
				</table>
			</div>
		</div>
	</div>




	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
				<h4>Server/Request Data</h4>
		

			<div id="collapseOne" class="panel-collapse collapse in" style="padding-bottom: 8px;">
				<table class='table_data'>
					<?php 
					$i=0;
					foreach ($_SERVER as $key => $value) {
						$i=1;
						echo "<tr class='table_row'>";
						echo "<td class='table_key'>$key</td>";
						echo "<td class='table_value'>$value</td>";
						echo "</tr>";

					} 
					if($i==0) echo "<span class='no_data_span'>No Data</span>";?>
				</table>
			</div>
		</div>
	</div>






	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
				<h4>Session Data</h4>
		

			<div id="collapseOne" class="panel-collapse collapse in" style="padding-bottom: 8px;">
				<table class='table_data'>
					<?php 
					$i=0;
					foreach ($_SESSION as $key => $value) {
						$i=1;
						echo "<tr class='table_row'>";
						echo "<td class='table_key'>$key</td>";
						echo "<td class='table_value'>$value</td>";
						echo "</tr>";

					} 
					if($i==0) echo "<span class='no_data_span'>No Data</span>";?>
				</table>
			</div>
		</div>
	</div>


	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
				<h4>Cookie Data</h4>
		

			<div id="collapseOne" class="panel-collapse collapse in" style="padding-bottom: 8px;">
				<table class='table_data'>
					<?php 
					$i=0;
					foreach ($_COOKIE as $key => $value) {
						$i=1;
						echo "<tr class='table_row'>";
						echo "<td class='table_key'>$key</td>";
						echo "<td class='table_value'>$value</td>";
						echo "</tr>";

					} 
					if($i==0) echo "<span class='no_data_span'>No Data</span>";?>
				</table>
			</div>
		</div>
	</div>

<?php if(isset($_FILE)){ ?>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
				<h4>File Data</h4>
		

			<div id="collapseOne" class="panel-collapse collapse in" style="padding-bottom: 8px;">
				<table class='table_data'>
					<?php 
					$i=0;
					foreach ($_FILE as $key => $value) {
						$i=1;
						echo "<tr class='table_row'>";
						echo "<td class='table_key'>$key</td>";
						echo "<td class='table_value'>$value</td>";
						echo "</tr>";

					} 
					if($i==0) echo "<span class='no_data_span'>No Data</span>";?>
				</table>
			</div>
		</div>
	</div>

<?php } ?>

	</div></div></div>

	<?php if(false): ?>
	<div class="right-part">
	<div class="title">
		<h1><center>Fiesta Errors Log</center></h1>
	</div>
	<div>

		<?php 

		function get_string_between($string, $start, $end){
		    $string = " ".$string;
		    $ini = strpos($string,$start);
		    if ($ini == 0) return "";
		    $ini += strlen($start);
		    $len = strpos($string,$end,$ini) - $ini;
		    return substr($string,$ini,$len);
		}
		$f=array_reverse(file($login,FILE_IGNORE_NEW_LINES));
		$u=false;
		foreach ($f as $key => $value) {
			$time=get_string_between($value,"[","]");
			$nrml=get_string_between($value,"]","#bld");
			$bld=get_string_between($value,"#bld","#/bld");//
			$blz="";
			// if($u) { $blz="<div class='err_log_prt_frst err_log_prt'>"; $u=false;}
			// else { $blz="<div class='err_log_prt_scnd err_log_prt'>";  $u=true;}

			$blz="<div class='err_log_prt_scnd err_log_prt'>";

			$blz.="<div class='err_log_time'>".$time."</div>";
			//
			$blz.="<div class='err_log_body'>".$nrml."<br><br><b>".$bld."</b>"."</div></div>";

			echo $blz;

			
		} ?>

	</div>
</div>
<?php endif; ?>
</div>
</body>
<?php } else if(isset($ok) && !$ok) { ?>
<head>
	<meta charset="utf-8"/>
	<title>Ohlala! Il y avait une erreur</title>
	<style type="text/css">
	body
	{
		background: #e9e9e9;
		margin: 0px;
		padding: 0px;
	}

	div	
	{
		border:1px solid gray;
		border-radius:5px;
		display: inline-block;
		padding:30px;
		font-size: 16px;
		font: 20px Georgia, "Times New Roman", Times, serif;
		width: 460px;
		margin: 60px auto;
		display: block;
		background: white;
	}
	</style>

</head>
<body>
	<div><?php echo $msg ?></div>
</body>
<?php } else echo "vide"; ?>