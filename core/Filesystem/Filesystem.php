<?php 

namespace Fiesta\Core\Filesystem;

use Fiesta\Core\Filesystem\Exception\DirectoryNotFoundException;
use Fiesta\Core\Filesystem\Exception\FileNotFoundException;


/**
* File system
*/
class Filesystem
{
	
	public function exists($path)
	{
		return file_exists($path);
	}

	public function get($path)
	{
		if($this->exists($path)) return file_get_contents($path);
		else throw new FileNotFoundException($path);
	}

	public function getRequire($path)
	{
		if($this->exists($path)) return require $path;
		else throw new FileNotFoundException($path);
	}

	public function getRequireOnce($path)
	{
		if($this->exists($path)) return require_once $path;
		else throw new FileNotFoundException($path);
	}

	public function put($path,$content,$lock=false)
	{
		// $myfile = fopen($path, "w");
		// fwrite($myfile, $content);
		// fclose($myfile);
		//
		return file_put_contents($path, $content, $lock ? LOCK_EX : 0);
	}

	public function prepend($path,$content)
	{
		if($this->exists($path))		
		{
			$oldContent=$this->get($path);	
			$this->put($name,($content.$oldContent));	
		}
		else throw new FileNotFoundException($path);
	}

	public function append($path,$content)
	{
		if($this->exists($path))		
		{
			$oldContent=$this->get($path);	
			$this->put($name,($oldContent.$content));	
		}
		else throw new FileNotFoundException($path);
	}

	public function delete($path)
	{
		$paths=is_array($path) ? $path : func_get_args() ;
		//
		$ok=true;

		foreach ($paths as $value) if( !unlink($path)) $ok=false;

		return $ok;
	}

	public function copy($from,$to)
	{
		if($this->exists($from))		
		{
			$content=$this->get($from);
			return $this->put($to,$content);
		}
		else throw new FileNotFoundException($path);
	}

	public function move($from,$to)
	{
		if($this->exists($from))		
		{
			$content=$this->get($from);
			$this->put($to,$content);
			$this->delete($from);
		}
		else throw new FileNotFoundException($path);
	}

	public function name($path)
	{
		return pathinfo($path, PATHINFO_FILENAME);
	}

	public function type($path)
	{
		return filetype($path);
	}

	public function baseName($path)
	{
		return basename($path);
	}

	public function extension($path)
	{
		return pathinfo($path, PATHINFO_EXTENSION);
	}

	public function size($path)
	{
		return filesize($path);
	}

	public function lastEdit($path)
	{
		return filemtime($path);
	}

	public function isDirectory($directory)
	{
		return is_dir($directory);
	}

	// public function isWritable($path)
	// {
	// 	return is_writable($path);
	// }

	public function isFile($file)
	{
		return is_file($file);
	}

	public function glob($pattern, $flags=0)
	{
		return glob($pattern, $flags);
	}

	public function all($directory)
	{
		$glob = glob($directory.'/*');

		if ($glob === false) return array();
		 
		return $glob;
	}

	public function files($directory)
	{
		$glob = glob($directory.'/*');

		if ($glob === false) return array();
		 
		return array_filter($glob, function($file)
		{
			//return filetype($file) == 'file';
			return $this->isFile($file);
		});
	}

	public function directories($directory)
	{
		$glob = glob($directory.'/*');

		if ($glob === false) return array();
		 
		return array_filter($glob, function($file)
		{
			//return filetype($file) != 'file';
			return $this->isDirectory($file);
		});
	}

	public function makeDirectory($path,$mode=0755,$recursive = false)
	{
		return mkdir ( $path, $mode, $recursive);
	}

	public function copyDirectory($from, $to, $options=null)
	{
		if(! $this->isDirectory($from)) { throw new DirectoryNotFoundException($from); return false; }
		//
		if(! $this->isDirectory($to)) $this->makeDirectory($to,0777,true);
		//
		$options = $options ?: \FilesystemIterator::SKIP_DOTS;
		$items = new \FilesystemIterator($from, $options);
		//
		//$items=$this->all($from);
		//
		foreach ($items as $item) {
			$target=$to."/".$item->getBasename();
			if($this->isDirectory($item))
			{
				$path=$item->getPathname();
				if ( ! $this->copyDirectory($path, $target, $options)) break; // return false; 
			}
			else
			{
				if ( ! $this->copy($item->getPathname(), $target)) break; //return false;
			}
		}

		return true;
	}

	public function deleteDirectory($directory, $preserve = false)
	{
		if ( ! $this->isDirectory($directory)) { throw new DirectoryNotFoundException($directory); return false; }

		$items = new \FilesystemIterator($directory);

		foreach ($items as $item)
		{
			if ($item->isDir())
			{
				$this->deleteDirectory($item->getPathname());
			}
			else
			{
				$this->delete($item->getPathname());
			}
		}

		if ( ! $preserve) @rmdir($directory);

		return true;
	}

	public function clearDirectory($path)
	{
		return $this->deleteDirectory($path, true);
	}


}