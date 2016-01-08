<?php

/* Schema info
* @date : 2015/12/14 02:24:11(1450056251)
* @name : plugin
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
