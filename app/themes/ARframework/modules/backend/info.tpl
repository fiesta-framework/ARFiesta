{extends file="../../base.tpl"} 
{block name=title} {$smarty.block.parent} Info{/block} 
{block name=styles} {$smarty.block.parent} 
	{Libs::css("{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/css/profile",false)}
{/block} 
{block name=FiligranTitle}
<div class="row">
    <div id="paper-top">
            <div class="col-sm-3">
                <h2 class="tittle-content-header"><span class="icon icon-information"></span><span> Info</span></h2>
            </div>
        <div class="col-sm-9">
            <div class="devider-vertical visible-lg"></div>
                <div class="tittle-middle-header">
                    <div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <span id="messageIcon"></span>
                        <span id="message"></span>
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
	<li>Info</li>
</ul>
{/block}
{block name=body}
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-12">
                        <div class="well profile">
                            <div class="col-sm-12">
                                <div class="col-xs-12 col-sm-4 text-center">

                                    <ul class="list-group">
                                        <li class="list-group-item text-center">
                                            <img src="{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/img/big_logo.png" alt="" class="img-responsive img-profile">
                                        </li>
                                        <li class="list-group-item text-right">
                                            <span class="pull-left">
                                                <strong>Version</strong>
                                            </span>
											{Config::get('app.version')}
										</li>
      

                                    </ul>

                                </div>
                                <div class="col-xs-12 col-sm-8 profile-name">
                                    <h2>{Config::get('app.project')}
                                        <span class="pull-right social-profile">
                                            <i class="entypo-facebook-circled"></i>  <i class="entypo-twitter-circled"></i>  <i class="entypo-linkedin-circled"></i>  <i class="entypo-github-circled"></i>  <i class="entypo-gplus-circled"></i>
                                        </span>
                                    </h2>
                                    <hr>

                                    <dl class="dl-horizontal-profile">
                                        <dt>User Id</dt>
                                        <dd>eko.sulis</dd>

                                        <dt>Name</dt>
                                        <dd>Eko Sulistyo</dd>

                                        <dt>Email</dt>
                                        <dd>eko.sulistyo@yahoo.com</dd>

                                        <dt>Phone</dt>
                                        <dd>081 725 xxx</dd>

                                        <dt>Active Periode</dt>
                                        <dd>02 Dec 2014</dd>

                                        <dt>Last Update</dt>
                                        <dd>02 Apr 2014</dd>

                                        <dt>Hobbies</dt>
                                        <dd>Read, out with friends, listen to music, draw and learn new things</dd>
                                    </dl>
                                    <hr>
                                    <h5>
                                        <span class="entypo-arrows-ccw"></span>&nbsp;&nbsp;Recent Update</h5>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-condensed">

                                            <tbody>
                                                <tr>
                                                    <td><i class="pull-right fa fa-edit"></i> Today, 1:00 - Jeff Manzi liked your post.</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="pull-right fa fa-edit"></i> Today, 12:23 - Mark Friendo liked and shared your post.</td>
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xs-12 divider text-center">
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2>
                                        <strong>20,7K</strong>
                                    </h2>
                                    <p>
                                        <small>Followers</small>
                                    </p>
                                    <button class="btn btn-success btn-block">
                                        <span class="fa fa-plus-circle"></span>&nbsp;&nbsp;Follow</button>
                                </div>
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2>
                                        <strong>245</strong>
                                    </h2>
                                    <p>
                                        <small>Following</small>
                                    </p>
                                    <button class="btn btn-info btn-block">
                                        <span class="fa fa-user"></span>&nbsp;&nbsp;View Profile</button>
                                </div>
                                <div class="col-sm-4 emphasis">
                                    <h2>
                                        <strong>43</strong>
                                    </h2>
                                    <p>
                                        <small>Likes</small>
                                    </p>
                                    <button class="btn btn-default btn-block">
                                        <span class="fa fa-user"></span>&nbsp;&nbsp;Likes</button>
                                </div>
                            </div>
                        </div>
                    </div>
	</div>
</div>
{/block}
{block name=scriptFooter}
{$smarty.block.parent} 
{Libs::js("{Config::get('app.base_url')}app/modules/backend/Resources/public/js/info.js",false)}
{/block}