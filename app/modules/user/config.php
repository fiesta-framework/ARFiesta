<?php 

return array(
	"name"			=> "utilisateur",
	"displayName"	=> "Users",
	"version"		=> "1.0",
	"discription"	=> "Gestion des utilisateurs",
	"menu"			=> array(
		"title"		=> "Users",
		"link"		=> "#",
		"icon"		=> "entypo-users",
		"sublink"	=> array(
			array(
				"title"		=> "Liste des utilisateurs",
				"link"		=> "#",
				"icon"		=> "icon icon-view-list-large",
				"sublink"	=> array()
			),
			array(
				"title"		=> "Ajouter",
				"link"		=> "#",
				"icon"		=> "entypo-user-add",
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