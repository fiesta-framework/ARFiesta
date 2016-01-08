{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Médias{/block} 
{block name=styles}
{$smarty.block.parent} 
{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/social",false)}
{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/media",false)}
<style>
#mceu_13{
	border-width: 0px !important;
}
#textarea{
	margin: 0px;
    padding: 1px;
}
.inputcls{
    height: 57px !important;
    font-size: 36px !important;
    font-weight: 300;
}
.slug{
    background: transparent;
    border: 0px;
    color: #9ea7b3!important;
}
.well-media {
    background: #293C53;
}
.triangle-white {
    border-color: #293C53 transparent transparent transparent;
}
</style>
{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="entypo-picture"></span><span> Médias</span></h2>
            </div>
        <div class="col-sm-9">
            <div class="devider-vertical visible-lg"></div>
                <div class="tittle-middle-header">
                    <div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <span class="tittle-alert entypo-info-circled"></span>
                            Welcome back,&nbsp;
                        <strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                    </div>
                </div>
        </div>
    </div>
</div>
{/block}
{block name=BREADCRUMB}
<ul id="breadcrumb">
	<li><span class="entypo-home"></span></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li><a href="{Config::get('app.base_url')}{Config::get('panel.route')}" title="Sample page 1">Backend</a></li>
	<li><i class="fa fa-lg fa-angle-right"></i></li>
	<li>Médias</li>
</ul>
{/block}
{block name=body}
<div class="social-wrap">
    <div class="row">
					<div class="col-md-4">
                        <div class="well-media">

                            <div class="vendor">

                                <a class="fancybox" rel="group" href="#">
                                    <img class="img-responsive-media" src="http://lorempixel.com/350/250/" alt="">
                                </a>
                            </div>
                            <div class="video-text">
                                <h2>Black Angel</h2>
                               
                            </div>
                            
                            <div class="photo-category-bg">
                                <h3>Photo</h3>
                                <a class="link-media pull-right" href="#">
                                    <span class="fontawesome-picture"></span>
                                </a>
                                <div class="triangle-white"></div>
                                <div class="triangle-photo-right"></div>
                            </div>

                        </div>
                    </div>
					<div class="col-md-4">
                        <div class="well-media">

                            <div class="vendor">
                                <div class="fluid-width-video-wrapper">
								<iframe height="200" src="https://www.youtube.com/embed/qn1NxT3Xl80" id="fitvid904953" frameborder="0" allowfullscreen></iframe>
								</div>
                            </div>
                            <div class="video-text">
                                <h2>Woohal</h2>
                                <p></p>
                            </div>
                            <div class="video-category-bg">
                                <h3>Video</h3>
                                <a class="link-media pull-right" href="#">
                                    <span class="fontawesome-film"></span>
                                </a>
                                <div class="triangle-white"></div>
                                <div class="triangle-video-right"></div>
                            </div>

                        </div>
                    </div>
					<div class="col-md-4">
                        <div class="well-media">
                            <div class="vendor">
                                <iframe width="100%" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/149950304&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
                            </div>
                            <div class="video-text">
                                <h2>Terlatih Patah Hati</h2>
                                <p></p>
                            </div>
                            <div class="audio-category-bg">
                                <h3>audio</h3>
                                <a class="link-media pull-right" href="#">
                                    <span class="entypo-note-beamed"></span>
                                </a>
                                <div class="triangle-white"></div>
                                <div class="triangle-audio-right"></div>
                            </div>

                        </div>
                    </div>
    </div>
</div>
{/block}
{block name=scriptFooter}
{$smarty.block.parent} 
<script>
$(document).ready(function (){
	$('#cms').addClass('active');
	$('#mmedias').css({
		"background-color":	 "rgba(0, 0, 0, 0.2)",
		"border-left":		 "2px solid #ffffff",
		"padding-left":		 "28px"
	});
});
</script>
{/block}