{extends file="../../base_login.tpl"} 
{block name=title} {$smarty.block.parent} Authentification{/block} 
{block name=body}
<div class="container">
        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo-login">
                        <h1><img src="{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/img/logo.png" style="">
                         Connexion<span>{Config::get('app.version')}</span>
						</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="account-box">
						<form accept-charset="UTF-8"  role="form" class="form-signin" method="post" action="{Config::get('app.base_url')}backend/auth">
                            <div class="form-group">
                                <a href="#" class="pull-right label-forgot" style="display:none">Forgot email?</a>
                                <label for="inputPass1">Username</label>
								<input class="form-control lg_input" placeholder="Username" name="username" id="username" type="text">
                            </div>
                            <div class="form-group">
                                <a href="#" class="pull-right label-forgot" style="display:none">Forgot password?</a>
                                <label for="inputPassword">Mot de passe </label>
                                <input class="form-control lg_input" placeholder="Mot de passe " name="password" id="password" type="password">
                            </div>
                            <button class="btn btn btn-primary pull-right" id="login" type="submit">
                                Connexion
                            </button>
                        </form>
                        <a class="forgotLnk" href="index.html"></a>
                        <div class="or-box" style="display:none">
                            <center><span class="text-center login-with">Login or <b>Sign Up</b></span></center>
                            <div class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-facebook btn-block">
                                        <span class="entypo-facebook space-icon"></span>Facebook</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-twitter btn-block">
                                        <span class="entypo-twitter space-icon"></span>Twitter</a>
                                </div>
                            </div>
                            <div style="margin-top:25px" class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-google btn-block"><span class="entypo-gplus space-icon"></span>Google +</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-instagram btn-block"><span class="entypo-instagrem space-icon"></span>Instagram</a>
                                </div>
                            </div>
                        </div>
                        <hr style="display:none">
                        <div class="row-block">
                            <div class="row">
                                <div class="col-md-12 row-block" style="display:none">
                                    <a href="index.html" class="btn btn-primary btn-block">Create New Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">© {Config::get('app.title')} 2015</h6>
        </div>
    </div>
{/block}