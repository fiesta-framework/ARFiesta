<?php

/* Schema info
* @date : 2015/12/14 02:21:52(1450056112)
* @name : setting
* @object : table
*/


	/**
	 * Run the schemas.
	*/
	function up()
	{
		return true;

		/* Ex.	return Schema::create('tbl_test',function($tab)
			{
				$tab->string("column");
			});
			*/
	}

	/**
	 * Reverse the schemas.
	*/
	function down()
	{
		return true;

		// Ex.	 return Schema::drop('tbl_test');

	}

?>
