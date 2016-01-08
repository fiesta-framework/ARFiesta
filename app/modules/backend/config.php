<?php 

return array(
	"name"			=> "backend",
	"displayName"	=> "Back End",
	"version"		=> "1.0",
	"discription"	=> "Panel d'administration",
	"menu"			=> array(
		"title"		=> "Réglages",
		"link"		=> "#",
		"icon"		=> "fontawesome-cogs",
		"sublink"	=> array(
			array(
				"title"		=> "Shemas & Migrations",
				"link"		=> Config::get('app.base_url').Config::get('panel.route'),
				"icon"		=> "entypo-switch",
				"sublink"	=> array()
			),
			array(
				"title"		=> "Liens",
				"link"		=> Config::get('app.base_url').Config::get('panel.route')."/links",
				"icon"		=> "entypo-link",
				"sublink"	=> array()
			),
			array(
				"title"		=> "Langues",
				"link"		=> Config::get('app.base_url').Config::get('panel.route')."/langues",
				"icon"		=> "fontawesome-globe",
				"sublink"	=> array()
			),
			array(
				"title"		=> "MVC",
				"link"		=> "#",
				"icon"		=> "entypo-flow-tree",
				"sublink"	=> array(
					array(
						"title"		=> "Model",
						"link"		=> Config::get('app.base_url').Config::get('panel.route')."/model",
						"icon"		=> "icon icon-media-shuffle",
					),
					array(
						"title"		=> "View",
						"link"		=> Config::get('app.base_url').Config::get('panel.route')."/view",
						"icon"		=> "icon-preview",
					),
					array(
						"title"		=> "Controller",
						"link"		=> Config::get('app.base_url').Config::get('panel.route')."/controller",
						"icon"		=> "fontawesome-cogs",
					)
				)
			),
			array(
				"title"		=> "Graines",
				"link"		=> Config::get('app.base_url').Config::get('panel.route')."/seeds",
				"icon"		=> "fontawesome-leaf",
				"sublink"	=> array()
			),
			array(
				"title"		=> "Réglage",
				"link"		=> "#",
				"icon"		=> "entypo-cog config-wrap",
				"sublink"	=> array()
			),
			array(
				"title"		=> "À propos",
				"link"		=> Config::get('app.base_url').Config::get('panel.route')."/info",
				"icon"		=> "icon icon-information",
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