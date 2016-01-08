{extends file="../../maintenance.tpl"} 
{block name=title} {$smarty.block.parent}Under Construction{/block} 
{block name=body} 
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
                            <h3>{$mapText}</h3> 
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
							<a href="#"><img src="{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/img/logo.png"/></a>
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
{/block} 
{block name=scriptFooter}
	<script>
		var link1 = "{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/img/1.jpg";
		var link2 = "{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/img/2.jpg";
		var link3 = "{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/img/3.jpg";
		//Headline text
		var firstLine  = '{$firstLine}';
		var secondLine = '{$secondLine}';
		//Project start date in format: year/month/day
		var deadline = "{$date_fin}";
		//Slide show images
		{literal}
		var slideImages = [ 
			{image : link1},
			{image : link2},
			{image : link3}
		];
		{/literal}
		//Google map settings
		var mapCoord = '{$mapCoord}';
		var mapText  = '{$mapText}';
		//Flickr feed content settings
		var feed = 'off'; // on or off
		var flickrID = '42383292@N08'; //enter Flickr ID 
		//Your email address
		var myEmail = 'info@amineabri.com';
	</script>
    {Libs::js("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/maintenance/js/scripts.js",false)}
{/block}