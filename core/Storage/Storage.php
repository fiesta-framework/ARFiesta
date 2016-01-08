<?php 

namespace Fiesta\Core\Storage;

use Fiesta\Core\Config\Config;
use Fiesta\Core\Objects\Sys;
use Whoops\Exception\ErrorException;
/**
* Storage class
*/
class Storage
{
	public $disk;
	protected $storagePath;
	protected $basePath;

	function __construct($disk=null)
	{
		if(empty($disk)) 
		{
			if($this->checkDiskExiste(Config::get('storage.default'))) 
			{ 
				$this->disk=Config::get('storage.default'); 
				$this->basePath=Sys::$app."/storage/file";
				$this->storagePath=$this->basePath."/".Config::get('storage.default');
			}
			else throw new \invalidArgumentException("There is no disk call's ".Config::get('storage.default'));
		}
		else 
		{
			if($this->checkDiskExiste($disk)) 
			{ 
				$this->disk=$disk;
				$this->basePath=Sys::$app."/storage/file";
				$this->storagePath=$this->basePath."/".$disk;
			}
			else throw new \invalidArgumentException("There is no disk call's ".$disk);
		}
	}

	protected function checkDiskExiste($value)
	{
		return is_dir(Sys::$app."/storage/file/".$value);
	}

	protected function isDir($value)
	{
		return is_dir($this->storagePath."/".$value);
	}

	protected function path($value)
	{
		return Sys::$app."/storage/file/".$this->disk."/".$value;
	}

	public static function disk($name)
	{
		$self=new self($name);
		return $self;
	}

	public static function createDisk($name)
	{
		$self=new self();
		if(!$self->checkDiskExiste($name)) mkdir($self->basePath."/".$name, 0777, true);
		$self=new self($name);
		return $self;
	}

	protected function putNonStatic($name,$content)
	{
		$myfile = fopen($this->storagePath."/".$name, "w");
		fwrite($myfile, $content);
		fclose($myfile);
	}

	protected static function putStatic($name,$content)
	{
		$self=new self();
		$myfile = fopen($self->storagePath."/".$name, "w");
		fwrite($myfile, $content);
		fclose($myfile);
	}

	protected function existsNonStatic($name)
	{
		return file_exists($this->storagePath."/".$name);
	}

	protected static function existsStatic($name,$content)
	{
		$self=new self();
		return file_exists($self->storagePath."/".$name);
	}

	protected function getNonStatic($name)
	{
		return file_get_contents($this->storagePath."/".$name);
	}

	protected static function getStatic($name)
	{
		$self=new self();
		return file_get_contents($self->storagePath."/".$name);
	}

	protected function prependNonStatic($name,$content)
	{
		if($this->exists($name))		
		{
			$oldContent=$this->get($name);	
			$this->put($name,($content.$oldContent));	
		}
		else throw new \InvalidArgumentException("There is no file calls $name to prepend");
	}

	protected static function prependStatic($name,$content)
	{
		$self=new self();
		if($self->exists($name))
		{
			$oldContent=$self->get($name);
			$self->put($name,($content.$oldContent));	
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected function appendNonStatic($name,$content)
	{
		if($this->exists($name))		
		{
			$oldContent=$this->get($name);	
			$this->put($name,($oldContent.$content));	
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected static function appendStatic($name,$content)
	{
		$self=new self();
		if($self->exists($name))
		{
			$oldContent=$self->get($name);
			$self->put($name,($oldContent.$content));	
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected function sizeNonStatic($name)
	{
		if($this->exists($name))		
		{
			return filesize($this->path($name));
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected static function sizeStatic($name)
	{
		$self=new self();
		if($self->exists($name))
		{
			return filesize($self->path($name));	
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected function deleteNonStatic($name)
	{
		if($this->exists($name))		
		{
			return unlink($this->path($name));
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected static function deleteStatic($name)
	{
		$self=new self();
		//
		if($self->exists($name))
		{
			return unlink ($self->path($name));	
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected function copyNonStatic($name1,$name2)
	{
		if($this->exists($name))		
		{
			$content=$this->get($name1);
			return $this->put($name2,$content);
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected static function copyStatic($name1,$name2)
	{
		$self=new self();
		if($self->exists($name))
		{
			$content=$self->get($name1);
			return $self->put($name2,$content);
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected function moveNonStatic($name1,$name2)
	{
		if($this->exists($name1))		
		{
			$content=$this->get($name1);
			$this->put($name2,$content);
			$this->delete($name1);
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected static function moveStatic($name1,$name2)
	{
		$self=new self();
		if($self->exists($name))
		{
			$content=$self->get($name1);
			$self->put($name2,$content);
			$self->delete($name1);
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected function lasteditNonStatic($name)
	{
		if($this->exists($name))		
		{
			return filemtime($this->path($name));
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected static function lasteditStatic($name)
	{
		$self=new self();
		if($self->exists($name))
		{
			return filemtime($self->path($name));
		}
		else throw new \InvalidArgumentException("There is no file calls $name");
	}

	protected function filesNonStatic($name="")
	{
		if($this->isDir($name))		
		{
			$files=array();
			$r=scandir($this->path($name));
			foreach ($r as $key => $value) {
				if(is_file($this->storagePath."/".$value)) $files[]=$value;
			}
			return $files;
		}
		else throw new \InvalidArgumentException("There is no directory calls $name");
	}

	protected static function filesStatic($name="")
	{
		$self=new self();
		if($self->isDir($name))
		{
			$files=array();
			$r=scandir($self->path($name));
			foreach ($r as $key => $value) {
				if(is_file($self->storagePath."/".$value)) $files[]=$value;
			}
			return $files;
		}
		else throw new \InvalidArgumentException("There is no directory calls $name");
	}

	protected function directorysNonStatic($name="")
	{
		if($this->isDir($name))		
		{
			$files=array();
			$r=scandir($this->path($name));
			foreach ($r as $key => $value) {
				if(is_dir($this->storagePath."/".$value)) $files[]=$value;
			}
			return $files;
		}
		else throw new \InvalidArgumentException("There is no directory calls $name");
	}

	protected static function directorysStatic($name="")
	{
		$self=new self();
		if($self->isDir($name))
		{
			$files=array();
			$r=scandir($self->path($name));
			foreach ($r as $key => $value) {
				if(is_dir($self->storagePath."/".$value)) $files[]=$value;
			}
			return $files;
		}
		else throw new \InvalidArgumentException("There is no directory calls $name");
	}

	protected function makeDirNonStatic($name)
	{
		if($this->isDir($name))		
		return mkdir($this->storagePath."/".$name);
	}

	protected static function makeDirStatic($name="")
	{
		$self=new self();
		return mkdir($self->storagePath."/".$name);
	}

	protected function deleteDirNonStatic($name="")
	{
		if($this->isDir($name))		
		{
			return rmdir($self->storagePath."/".$name);
		}
		else throw new \InvalidArgumentException("There is no directory calls $name");
	}

	protected static function deleteDirStatic($name="")
	{
		$self=new self();
		if($self->isDir($name))
		{
			return rmdir($self->storagePath."/".$name);
		}
		else throw new \InvalidArgumentException("There is no directory calls $name");
	}






	public function __call($name, $args) {
	    switch ($name) {
	    	case 'put': return call_user_func_array(array($this, "putNonStatic"), $args); break;
	    	case 'exists': return call_user_func_array(array($this, "existsNonStatic"), $args); break;
	    	case 'get': return call_user_func_array(array($this, "getNonStatic"), $args); break;
	    	case 'prepend': return call_user_func_array(array($this, "prependNonStatic"), $args); break;
	    	case 'append': return call_user_func_array(array($this, "appendNonStatic"), $args); break;
	    	case 'size': return call_user_func_array(array($this, "sizeNonStatic"), $args); break;
	    	case 'delete': return call_user_func_array(array($this, "deleteNonStatic"), $args); break;
	    	case 'copy': return call_user_func_array(array($this, "copyNonStatic"), $args); break;
	    	case 'move': return call_user_func_array(array($this, "moveNonStatic"), $args); break;
	    	case 'lastModified': return call_user_func_array(array($this, "lasteditNonStatic"), $args); break;
	    	case 'files': return call_user_func_array(array($this, "filesNonStatic"), $args); break;
	    	case 'directories': return call_user_func_array(array($this, "directorysNonStatic"), $args); break;
	    	case 'makeDirectory': return call_user_func_array(array($this, "makeDirNonStatic"), $args); break;
	    	case 'deleteDirectory': return call_user_func_array(array($this, "deleteDirNonStatic"), $args); break;
	    	default : throw new Whoops\Exception\ErrorException("Call to undefined method Storage::$name()");
	    	
	    }
	}

	public static function __callStatic($name, $args) {

	    switch ($name) {
	    	case 'put': return call_user_func_array(array("Storage", "putStatic"), $args); break;
	    	case 'exists': return call_user_func_array(array("Storage", "existsStatic"), $args); break;
	    	case 'get': return call_user_func_array(array("Storage", "getStatic"), $args); break;
	    	case 'prepend': return call_user_func_array(array("Storage", "prependStatic"), $args); break;
	    	case 'append': return call_user_func_array(array("Storage", "appendStatic"), $args); break;
	    	case 'size': return call_user_func_array(array("Storage", "sizeStatic"), $args); break;
	    	case 'delete': return call_user_func_array(array("Storage", "deleteStatic"), $args); break;
	    	case 'copy': return call_user_func_array(array("Storage", "copyStatic"), $args); break;
	    	case 'move': return call_user_func_array(array("Storage", "moveStatic"), $args); break;
	    	case 'lastModified': return call_user_func_array(array("Storage", "lasteditStatic"), $args); break;
	    	case 'files': return call_user_func_array(array("Storage", "filesStatic"), $args); break;
	    	case 'directories': return call_user_func_array(array("Storage", "directorysStatic"), $args); break;
	    	case 'makeDirectory': return call_user_func_array(array("Storage", "makeDirStatic"), $args); break;
	    	case 'deleteDirectory': return call_user_func_array(array("Storage", "deleteDirStatic"), $args); break;
	    	default : throw new ErrorException("Call to undefined method Storage::$name()");
	    	
	    }
	}
}