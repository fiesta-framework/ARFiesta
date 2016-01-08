<?php 

namespace Fiesta\Core\Caches;

/**
* Cache class
*/
class Cache
{
	public static function put($key, $value, $minutes)
	{
		return Caches::put($key, $value, $minutes);
	}

	public static function get($key)
	{
		return Caches::get($key);
	}

	public static function has($key)
	{
		return Caches::exists($key);
	}

	public static function forever($key, $value)
	{
		return Caches::forever($key, $value);
	}

	public static function clearOld()
	{
		return Caches::clearOld();
	}

	public static function prolongation($key,$minutes)
	{
		return Caches::prolongation($key,$minutes);
	}

	public static function pull($key)
	{
		return Caches::pull($key);
	}
}