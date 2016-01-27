<?php

namespace Hadamcik\SmartCache;

require_once __DIR__ . '/Exceptions/DirNotExistsException.php';
require_once __DIR__ . '/Exceptions/DirNotWritableException.php';
require_once __DIR__ . '/Exceptions/NotDirException.php';

/**
 * Class FileCache
 * @package Hadamcik\SmartCache
 * @author Jakub Hadamčík <jakub@hadamcik.cz>
 */
class FileCache
{
	/** @var string */
	private $dir;

	/**
	 * @param string $dir
	 * @throws DirNotExistsException
	 * @throws NotDirException
	 * @throws DirNotWritableException
	 */
	public function __construct($dir)
	{
		$this->setDir($dir);
	}

	/**
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 */
	public function save($key, $value)
	{

	}

	/**
	 * @param string $key
	 * @return mixed
	 */
	public function load($key)
	{

	}

	/**
	 * @param string $key
	 * @return bool
	 */
	public function hasKey($key)
	{

	}

	/**
	 * @return string
	 */
	public function getDir()
	{		
		return $this->dir;
	}

	/**
	 * @param string $dir
	 * @return FileCache
	 * @throws DirNotExistsException
	 * @throws NotDirException
	 * @throws DirNotWritableException
	 */
	private function setDir($dir) 
	{
		if(!file_exists($dir)) {
			throw new DirNotExistsException();
		}
		if(!is_dir($dir)) {
			throw new NotDirException();
		}
		if(!is_writable($dir)) {
			throw new DirNotWritableException();
		}
		$this->dir = $dir;
		return $this;
	}
}