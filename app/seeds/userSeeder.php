<?php 

use Fiesta\Core\Database\Seeder;

/**
* DatabaseSeeder
*/
class UserSeeder extends Seeder
{
	/*
	* Name of DataTable
	*/
	public $table="tbl_user";

	/*
	* Run the Database Seeder
	*/
	public function run()
	{
		$data = array();
		//
		for ($i=0; $i < 50; $i++) 
			Table::push($data , array('nom' => Faker::firstName() , 'mail' => Faker::Email(),'password'=> Faker::hash() ,'token'=> Faker::hash(),'rememberToken' =>  Faker::hash() ));
		//
		Schema::table($this->table)->insert($data);
	}
}

