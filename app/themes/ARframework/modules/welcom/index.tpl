{* View file  : index.tpl *} 
{extends file="../../install.tpl"} 
{block name=title} {$smarty.block.parent} Installation{/block} 
{block name=body} 
	<div class="container">
        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo-login">
                        <h1><img src="{Config::get('app.base_url')}app/themes/{Config::get('themes.name')}/assets/medias/img/logo.png" style="">
                         Installation<span>{Config::get('app.version')}</span>
						</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4" id="etap_1">
                    <div class="account-box">
						<h2 class="conf_title">Général</h2>
						<form class="config_form" id="form_1" role="form">
                            <div class="form-group">
                                <label for="inputNomDeDeveloppeur">Nom de développeur</label>
								<input type="text" class="form-control" id="dev_name" name="dev_name" placeholder="Votre nom">
                            </div>
                            <div class="form-group">
                                <label for="inputLangue">Langue</label>
                                <select class="form-control" id="sel1" name="langue">
									<option value="fr_FR" selected>Français</option>
									<option value="en_EN">English</option>
								</select>
                            </div>
							<div class="row-block">
								<div class="row">
									<div class="col-md-12 row-block">
									   <button class="btn btn btn-primary pull-right" name="nxt" id="nxt"type="submit">
										Suivant
										</button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
				<div class="col-md-4 col-md-offset-4" id="etap_2" style="display:none">
                    <div class="account-box">
						<h2 class="conf_title">Base de données</h2>
						<form class="config_form" id="form_2" role="form">
                            <div class="form-group">
                                <label for="inputServer">Serveur Database</label>
								<input type="text" class="form-control" id="migname" name="db_host" placeholder="Server" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> localhost</p>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Nom de Database</label>
								<input type="text" class="form-control" id="migname" name="db_name" placeholder="Database" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> test</p>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Nom de Database User</label>
								<input type="text" class="form-control" id="migname" name="db_usr" placeholder="Database User" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> root</p>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Mot de passe</label>
								<input type="text" class="form-control" id="migname" name="db_pass" placeholder="Mot de passe" value="">
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Prefixe des Tables</label>
								<input type="text" class="form-control" id="migname" name="db_prefix" placeholder="Prefixe" value="{$str=str_shuffle('azertyuiopqsdfghjklmwxcvbn')}{substr($str, 0, 3)}">
								<p class="conf_input_note">Si vous gardez ce champ vide , le préfixage sera désactivé</p>
                            </div>
							<div class="row-block">
								<div class="row">
									<div class="col-md-12 row-block">
									   <button class="btn btn btn-primary pull-right" name="nxt" id="nxt" type="submit">
										Suivant
										</button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
				<div class="col-md-4 col-md-offset-4" id="etap_3" style="display:none">
                    <div class="account-box">
						<h2 class="conf_title">Sécurité</h2>
						<form class="config_form" id="form_3" role="form">
                            <div class="form-group">
                                <label for="inputKey1">clé de sécurité 1</label>
								<input type="text" class="form-control" id="migname" name="sec_1" placeholder="Server" value="{md5(uniqid(rand(), TRUE))}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputKey2">clé de sécurité 2</label>
                                <input type="text" class="form-control" id="migname" name="sec_2" placeholder="Database" value="{md5(uniqid(rand(), TRUE))}" readonly>
                            </div>
							<div class="row-block">
								<div class="row">
									<div class="col-md-12 row-block">
									   <button class="btn btn btn-primary pull-right" name="nxt" id="nxt"type="submit">
										Suivant
										</button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
			<div class="col-md-4 col-md-offset-4" id="etap_4" style="display:none">
                    <div class="account-box">
						<h2 class="conf_title">Panel</h2>
						<form class="config_form" id="form_4" role="form">
                            <div class="form-group">
                                <label for="inputServer">Etat</label>
								<select class="form-control" id="sel1" name="state">
									<option value="true" selected>Activé</option>
									<option value="false">Désactivé</option>
								</select>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Identifiant</label>
								<input type="text" class="form-control" id="migname" name="username" placeholder="Identifiant" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> admin</p>
                            </div>
							<div class="form-group">
                                <label for="inputNameDataBase">Mot de passe</label>
								<input type="text" class="form-control" id="migname" name="password" placeholder="Mot de passe" value="">
								<p class="conf_input_note"><strong>Par défaut :</strong> 123</p>
                            </div>
							<div class="row-block">
								<div class="row">
									<div class="col-md-12 row-block">
									   <button class="btn btn btn-primary pull-right" name="nxt" id="nxt" type="submit">
										Suivant
										</button>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">© 2015 <a href="#">{Config::get('app.project')}</a> All Rights Reserved</h6>
        </div>
    </div>
{/block}
