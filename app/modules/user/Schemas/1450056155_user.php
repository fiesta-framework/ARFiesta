<?php

/* Schema info
* @date : 2015/12/14 02:22:35(1450056155)
* @name : users
* @object : table
*/


	/**
	 * Run the schemas.
	*/
	function up(){
		return Schema::create('users',function($tab){
			$tab->inc("ID");
			$tab->string("user_login", 60);
			$tab->string("user_pass", 60);
			$tab->string("user_nicename", 50);
			$tab->string("user_email", 100);
			$tab->string("user_url", 100);
			$tab->datetime("user_registered");			
			$tab->string("user_activation_key", 60);
			$tab->int("user_status", 11);
			$tab->string("display_name", 250);
		});
	}

	/**
	 * Reverse the schemas.
	*/
	function down(){
		return Schema::drop('users');
	}

?>
