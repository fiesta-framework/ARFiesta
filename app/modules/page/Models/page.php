<?php

use Fiesta\Core\MVC\Model\Model;

class Page extends Model{
	//Name of the table in database
	protected static $table		  = 'posts';
	protected static $foreignKeys = array();
	
	public static function getMenu($table,$id){
		self::$table = $table;
		$data = get_object_vars(parent::find($id));
		unset($data['DBtable']);
		unset($data['columns']);
		unset($data['key']);
		return $data;
	}
	
	public static function getAllPage($table, $type){
		self::$table = $table;
		$data		 = array();
		$array = is_array(get_object_vars(parent::where($type))['data']) ? get_object_vars(parent::where($type))['data'] : null;
		if(!is_null($array)){
			foreach(get_object_vars(parent::where($type))['data'] as $key => $value){
				$T			= get_object_vars($value);
				unset($T['DBtable']);
				unset($T['columns']);
				unset($T['key']);
				
				$data[$key]	= $T;
			}
			return $data;
		}else{
			return false;
		}	
	}
	
	public static function getListeMenu($table){
		self::$table = $table;
		return parent::all();
	}
	
	public static function editMenu($table, $data){
		self::$table = $table;
		$menu = parent::edit();
		$menu->title   	= $data['title'];
		$menu->content  = $data['content'];
		$menu->edit();
		return true;
	}
}