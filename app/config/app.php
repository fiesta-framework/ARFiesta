<?php
					return array( 
					/*
					|----------------------------------------------
					| Project version
					|----------------------------------------------
					*/
					'version'=>'V1.0', 
					/*
					|----------------------------------------------
					| Project name
					|----------------------------------------------
					*/
					'project'=>'Fiesta', 
					/*
					|----------------------------------------------
					| Project Posts Page
					|----------------------------------------------
					*/
					'page_on_front'=> array(
						"id"		=> 4,
						"title"		=> 'home'
					), 
					/*
					|----------------------------------------------
					| Project Posts Blog
					|----------------------------------------------
					*/
					'page_for_posts'=>array(
						"id"		=> 2,
						"title"		=> 'blog'
					),
					/*				
					|---------------------------------------------- 
					| Owner name 
					|---------------------------------------------- 
					*/ 
					'owner'=>'Youssef Had', 
					/* 
					|---------------------------------------------- 
					| Project parent folder 
					|---------------------------------------------- 
					| ila kenti khedm b local serveur ola kenti 7at 
					| l framework wset chi dossier khask tkteb smyt 
					| hadak dossier hana 
					*/ 
					'projectFolder'=>'Fiesta', 
					/* 
					|---------------------------------------------- 
					| Project url 
					|---------------------------------------------- 
					| hena kteb lien dial site dilak ila kenti 
					| khedam f localhost kteb lien dial local host 
					| o men b3d smyt dossier li khedam fih 
					*/ 
					'url'=>App::root(), 
					/* 
					|---------------------------------------------- 
					| Project url 
					|---------------------------------------------- 
					| le lien vers la racine du dossier projet 
					*/ 
					'base_url'=> str_replace('public/index.php', '', App::root()),
					/* 
					|---------------------------------------------- 
					| HTML Default title 
					|---------------------------------------------- 
					| hena blast titlre par default dial site 
					*/ 
					'title'=> 'Fiesta PHP Framework', 
					/* 
					|---------------------------------------------- 
					| Routing inexists event 
					|---------------------------------------------- 
					| hena ila kan route makynch ,true bach 
					| yafficher exception ,sinon false bach 
					| ymchi l 404 
					*/ 
					'unrouted'=> true, 
					/* 
					|---------------------------------------------- 
					| Default Character Set 
					|---------------------------------------------- 
					| hena encode dial l'application meni 
					| tkhdem l methode HTML::charset() 
					| 
					*/ 
					'charset'=> 'utf-8', 
				);