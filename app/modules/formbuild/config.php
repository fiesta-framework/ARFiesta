<?php 

return array(
	"name"			=> "formbuilder",
	"displayName"	=> "Form Builder",
	"version"		=> "1.0",
	"discription"	=> "Genérateur de formulaire",
	"menu"			=> array(
		"title"		=> "Form Builder",
		"icon"		=> "entypo-rocket",
		"link"		=> "#",
		"sublink"	=> array(
			array(
				"title"		=> "Liste des formulaire",
				"icon"		=> "icon icon-view-list-large",
				"link"		=> "#",
				"sublink"	=> array()
			),array(
				"title"		=> "Ajouter",
				"icon"		=> "entypo-list-add",
				"link"		=> "#",
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