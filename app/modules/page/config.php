<?php 

return array(
	"name"			=> "cms",
	"displayName"	=> "CMS",
	"version"		=> "1.0",
	"discription"	=> "Gestionnaire du contenu",
	"menu"			=> array(
		"title"		=> "CMS",
		"link"		=> "#",
		"icon"		=> "entypo-flow-cascade",
		"sublink"	=> array(
			array(
				"title"		=> "Pages",
				"link"		=> "#",
				"icon"		=> "icon icon-document-new",
				"sublink"	=> array(
					array(
						"title"		=> "Toutes les pages",
						"link"		=> Config::get('app.base_url')."page",
						"icon"		=> "icon icon-document-new"
					),
					array(
						"title"		=> "Ajouter",
						"link"		=> Config::get('app.base_url')."page/post-new/page",
						"icon"		=> "entypo-list-add"
					)
				)
			),
			array(
				"title"		=> "Articles",
				"link"		=> "#",
				"icon"		=> "icon icon-view-list-large",
				"sublink"	=> array(
					array(
						"title"		=> "Tous les articles",
						"link"		=> Config::get('app.base_url')."page/articles",
						"icon"		=> "icon icon-document-new"
					),
					array(
						"title"		=> "Ajouter",
						"link"		=> Config::get('app.base_url')."page/post-new/post",
						"icon"		=> "entypo-list-add"
					),
					array(
						"title"		=> "Categories",
						"link"		=> "#",
						"icon"		=> "fontawesome-tags"
					)
				)
			),
			array(
				"title"		=> "Médias",
				"link"		=> Config::get('app.base_url')."page/medias",
				"icon"		=> "entypo-picture",
				"sublink"	=> array()
			),
			array(
				"title"		=> "Aparence",
				"link"		=> "#",
				"icon"		=> "entypo-feather",
				"sublink"	=> array(
					array(
						"title"		=> "Themes",
						"link"		=> "#",
						"icon"		=> "entypo-palette"
					),
					array(
						"title"		=> "Menus",
						"link"		=> Config::get('app.base_url')."page/menu",
						"icon"		=> "entypo-address"
					),
					array(
						"title"		=> "Widgets",
						"link"		=> "#",
						"icon"		=> "fontawesome-link"
					)
				)
			),
			array(
				"title"		=> "Outils",
				"link"		=> "#",
				"icon"		=> "entypo-tools",
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
	"container"		=> "FrontEnd",
	"etat"			=> "active",
	"modesys"		=> "false",
	"liaison"		=> array(),
	"logo"			=> ""
);