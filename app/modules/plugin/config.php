<?php 

return array(
	"name"			=> "plugins",
	"displayName"	=> "Plugins",
	"version"		=> "1.0",
	"discription"	=> "Gestionnaire des plugins",
	"menu"			=> array(
		"title"		=> "Plugins",
		"link"		=> "#",
		"icon"		=> "entypo-resize-small",
		"sublink"	=> array(
			array(
				"title"		=> "Modules installés",
				"link"		=> Config::get('app.base_url')."plugin",
				"icon"		=> "entypo-download",
				"sublink"	=> array()
			),
			array(
				"title"		=> "Importer",
				"link"		=> "#",
				"icon"		=> "entypo-upload",
				"sublink"	=> array()
			),
			array(
				"title"		=> "Créer",
				"link"		=> "#",
				"icon"		=> "icon-document-new",
				"sublink"	=> array()
			),
			array(
				"title"		=> "Réglage",
				"link"		=> "#",
				"icon"		=> "entypo-cog config-wrap",
				"sublink"	=> array()
			)
		)
	),
	"locales"		=> array(array(
		"id"		=> "fr_FR",
		"title"		=> "Français"
	),array(
		"id"		=> "en_EN",
		"title"		=> "Anglais"
	)),
	"container"		=> "Framework",
	"etat"			=> "active",
	"modesys"		=> "true",
	"liaison"		=> array(),
	"logo"			=> ""
);