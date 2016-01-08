<?php 

namespace Fiesta\Core\Database;

/**
* Seeder class
*/
class Seeder
{
	
	public static function call($name,$clear=true)
	{
		$tab=new $name();
		$tabl=$tab->table;
		//
		if($clear)
		{
			$tabs=new DBTable($tabl);
			$tabs->clear();
		}
		//
		$tab->run();
	}

	public static function ini()
	{
		\SeedsCaller::run();
	}

}