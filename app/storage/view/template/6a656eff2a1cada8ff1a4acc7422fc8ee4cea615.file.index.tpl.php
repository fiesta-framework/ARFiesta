<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-12 14:43:19
         compiled from "..\app\themes\ARframework\modules\maintenance\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14232566c24774cb121-87485957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a656eff2a1cada8ff1a4acc7422fc8ee4cea615' => 
    array (
      0 => '..\\app\\themes\\ARframework\\modules\\maintenance\\index.tpl',
      1 => 1449860310,
      2 => 'file',
    ),
    '03059b3015dd5a7d5003588f0512d31446f985b3' => 
    array (
      0 => 'C:\\wamp\\www\\Arframework\\app\\themes\\ARframework\\maintenance.tpl',
      1 => 1449768441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14232566c24774cb121-87485957',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566c2477a0ece0_25744724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c2477a0ece0_25744724')) {function content_566c2477a0ece0_25744724($_smarty_tpl) {?><!DOCTYPE html>
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
   <title><?php echo Config::get('app.title');?>
 |  Under Construction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Youssef Had">
	<?php ob_start();
echo Config::get('app.base_url');
$_tmp1=ob_get_clean();?><?php echo Html::favicon($_tmp1."public/favicon.ico");?>

	
    <?php ob_start();
echo Config::get('app.base_url');
$_tmp2=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp3=ob_get_clean();?><?php echo Libs::css($_tmp2."app/themes/".$_tmp3."/assets/maintenance/css/bootstrap.min",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp4=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp5=ob_get_clean();?><?php echo Libs::css($_tmp4."app/themes/".$_tmp5."/assets/maintenance/css/bootstrap-responsive.min",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp6=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp7=ob_get_clean();?><?php echo Libs::css($_tmp6."app/themes/".$_tmp7."/assets/maintenance/css/font-awesome.min",false);?>

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans|Lato:100,300'  type='text/css'>
    <?php ob_start();
echo Config::get('app.base_url');
$_tmp8=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp9=ob_get_clean();?><?php echo Libs::css($_tmp8."app/themes/".$_tmp9."/assets/maintenance/css/animation",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp10=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp11=ob_get_clean();?><?php echo Libs::css($_tmp10."app/themes/".$_tmp11."/assets/maintenance/css/supersized",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp12=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp13=ob_get_clean();?><?php echo Libs::css($_tmp12."app/themes/".$_tmp13."/assets/maintenance/css/prettyPhoto",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp14=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp15=ob_get_clean();?><?php echo Libs::css($_tmp14."app/themes/".$_tmp15."/assets/maintenance/css/styles",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp16=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp17=ob_get_clean();?><?php echo Libs::css($_tmp16."app/themes/".$_tmp17."/assets/maintenance/css/color",false);?>

	
    <!--[if lt IE 9]>
		<?php ob_start();
echo Config::get('app.base_url');
$_tmp18=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp19=ob_get_clean();?><?php echo Libs::js($_tmp18."app/themes/".$_tmp19."/assets/maintenance/js/html5shiv.js",false);?>

    <![endif]-->
</head>
<body>
     
<section id="section" class="container-fluid">
            <div class="row-fluid">
                <div class="span8">
                    <div class="headline"></div>
                    <!-- Contact form -->
                    <form id="contact" class="span6 offset2 pull-right">
                        <a href="#"><i class="icon-remove icon-2x pull-right"></i></a>
                        <h3>Demo </h3>
                        <label>Name</label>
                        <input type="text" id="client-name" class="input-block-level" name="clientname">
                        <label>E-mail</label>
                        <input type="email" id="email" class="input-block-level" name="email" required>
                        <label>Message</label>
                        <textarea id="text" class="input-block-level" name="text"></textarea>
                        <button type="submit" class="btn btn-block">send</button>
                        <!-- Form alerts -->
                        <p class="alert success" style="display:none">Your message has been sent successfully!</p><p class="alert alert-error error" style="display:none">E-mail must be valid and message must be longer than 10 characters</p>  
                    </form><!-- / Form - content -->
                    <!-- Google Map -->
                    <div class="gmap">
                        <div class="gmap-title">
                            <a href="#"><i class="icon-remove icon-2x pull-right"></i></a>
                            <h3><?php echo $_smarty_tpl->tpl_vars['mapText']->value;?>
</h3> 
                        </div>
                        <div id="map_canvas"></div>
                    </div>    
                    <div class="countdown">
                        <div class="time">
                            <div class="item-border"><div class="item first"><span class="days"></span><br>days</div></div>
                            <div class="item-border"><div class="item"><span class="hours"></span><br>hours</div></div>
                            <div class="item-border"><div class="item"><span class="minutes"></span><br>minutes</div></div>
                            <div class="item-border"><div class="item"><span class="seconds"></span><br>seconds</div></div>
                        </div>
                    </div>
                    <div id="progress-back" class="load-item span8">
                        <div id="progress-bar"></div>
                    </div>
                </div>
                <div class="span4 sidebar text-center pull-right">
                    <div class="row-fluid">
                        <div class="logo">
							<a href="#"><img src="<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/maintenance/img/logo.png"/></a>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="subscription span12">
                            <h2>subscribe to us</h2>
                            <form>
                                <input type="email" id="email2" name="email2" class="input-block-level" required placeholder="Enter your e-mail">
                                <button type="submit" class="btn btn-large btn-block">submit</button>
                                <div class="alert alert-success thanks">Thank you for your subscription!</div>
                                <div class="alert alert-error thanks-error">Please enter valid e-mail!</div>
                            </form>
                        </div>
                    </div>
                    <div class="row-fluid">
                       <div class="modal-buttons span12">
                            <a href="#"><i class="icon-envelope icon-3x"></i></a>
                            <a href="#"><i class="icon-map-marker icon-3x"></i></a>
                       </div>
                    </div>
                    <div class="row-fluid">
                        <div class="social">
                            <ul class="unstyled inline text-center">
                                <li><a href="https://www.facebook.com/BentonThemes"><i class="icon-facebook icon-2x" title="Facebook"></i></a></li>
                                <li><a href="https://twitter.com/bentonthemes"><i class="icon-twitter icon-2x" title="Twitter"></i></a></li>
                                <li><a href="#"><i class="icon-google-plus icon-2x" title="Google+"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble icon-2x" title="LinkedIn"></i></a></li>
                                <li><a href="#"><i class="icon-pinterest icon-2x" title="Pinterest"></i></a></li>
                                <li><a href="#"><i class="icon-flickr icon-2x" title="Flickr"></i></a></li>
                                <li><a href="#"><i class="icon-github icon-2x" title="GitHub"></i></a></li>
                                <li><a href="#"><i class="icon-tumblr icon-2x" title="Tumblr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    
    </section>

     <!-- SCRIPTS -->
    <?php ob_start();
echo Config::get('app.base_url');
$_tmp20=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp21=ob_get_clean();?><?php echo Libs::js($_tmp20."app/themes/".$_tmp21."/assets/maintenance/js/jquery.min.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp22=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp23=ob_get_clean();?><?php echo Libs::js($_tmp22."app/themes/".$_tmp23."/assets/maintenance/js/jquery.easing.min.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp24=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp25=ob_get_clean();?><?php echo Libs::js($_tmp24."app/themes/".$_tmp25."/assets/maintenance/js/bootstrap.min.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp26=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp27=ob_get_clean();?><?php echo Libs::js($_tmp26."app/themes/".$_tmp27."/assets/maintenance/js/jquery.fittext.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp28=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp29=ob_get_clean();?><?php echo Libs::js($_tmp28."app/themes/".$_tmp29."/assets/maintenance/js/jquery.supersized.min.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp30=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp31=ob_get_clean();?><?php echo Libs::js($_tmp30."app/themes/".$_tmp31."/assets/maintenance/js/jquery.countdown.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp32=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp33=ob_get_clean();?><?php echo Libs::js($_tmp32."app/themes/".$_tmp33."/assets/maintenance/js/supersized.shutter.min.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp34=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp35=ob_get_clean();?><?php echo Libs::js($_tmp34."app/themes/".$_tmp35."/assets/maintenance/js/jquery.prettyPhoto.js",false);?>

    <?php ob_start();
echo Config::get('app.base_url');
$_tmp36=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp37=ob_get_clean();?><?php echo Libs::js($_tmp36."app/themes/".$_tmp37."/assets/maintenance/js/jflickrfeed.min.js",false);?>

    <?php echo '<script'; ?>
 src="http://maps.google.com/maps/api/js?sensor=true"><?php echo '</script'; ?>
>
    <?php ob_start();
echo Config::get('app.base_url');
$_tmp38=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp39=ob_get_clean();?><?php echo Libs::js($_tmp38."app/themes/".$_tmp39."/assets/maintenance/js/jquery.ui.map.min.js",false);?>

	
	<?php echo '<script'; ?>
>
		var link1 = "<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/maintenance/img/1.jpg";
		var link2 = "<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/maintenance/img/2.jpg";
		var link3 = "<?php echo Config::get('app.base_url');?>
app/themes/<?php echo Config::get('themes.name');?>
/assets/maintenance/img/3.jpg";
		//Headline text
		var firstLine  = '<?php echo $_smarty_tpl->tpl_vars['firstLine']->value;?>
';
		var secondLine = '<?php echo $_smarty_tpl->tpl_vars['secondLine']->value;?>
';
		//Project start date in format: year/month/day
		var deadline = "<?php echo $_smarty_tpl->tpl_vars['date_fin']->value;?>
";
		//Slide show images
		
		var slideImages = [ 
			{image : link1},
			{image : link2},
			{image : link3}
		];
		
		//Google map settings
		var mapCoord = '<?php echo $_smarty_tpl->tpl_vars['mapCoord']->value;?>
';
		var mapText  = '<?php echo $_smarty_tpl->tpl_vars['mapText']->value;?>
';
		//Flickr feed content settings
		var feed = 'off'; // on or off
		var flickrID = '42383292@N08'; //enter Flickr ID 
		//Your email address
		var myEmail = 'info@amineabri.com';
	<?php echo '</script'; ?>
>
    <?php ob_start();
echo Config::get('app.base_url');
$_tmp40=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp41=ob_get_clean();?><?php echo Libs::js($_tmp40."app/themes/".$_tmp41."/assets/maintenance/js/scripts.js",false);?>


	<!--[if IE 7 | IE 8]>
    <?php ob_start();
echo Config::get('app.base_url');
$_tmp42=ob_get_clean();?><?php ob_start();
echo Config::get('themes.name');
$_tmp43=ob_get_clean();?><?php echo Libs::js($_tmp42."app/themes/".$_tmp43."/assets/maintenance/js/respond.min.js",false);?>

    <![endif]-->
</body>
</html><?php }} ?>
