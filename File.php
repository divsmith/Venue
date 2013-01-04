<?php namespace File;

class File
{
	/**
	 * Returns whether or not a specified file exists.			  
	 * @param  string $file_name 
	 * @return boolean            TRUE if file exists,
	 *                            FALSE if it doesn't.
	 */
	public static function exists($file_name)
	{
		return file_exists($file_name);
	}


	/**
	 * Gets the size of a specified file in bytes.
	 * @param  string $file_name
	 * @return int            Size of file in bytes.
	 * @throws Exception If File does not exist.
	 */
	public static function size($file_name)
	{
		if ( self::exists($file_name) )
		{
			return filesize($file_name);
		}
		throw new \Exception('File specified does not exist.');
	}


	/**
	 * name() - Gets the name of a specified
	 * 			file without it's extension.
	 * 			
	 * @param  string $file_name
	 * @return string            Name of file without extension.
	 * @throws Exception If File does not exist.
	 */
	public static function name($file_name)
	{
		if ( self::exists($file_name) )
		{
			return pathinfo($file_name, PATHINFO_FILENAME);
		}
		throw new \Exception('File specified does not exist.');
	}


	/**
	 * Gets the extension of a file without it's name.		 
	 * @param  string $file_name
	 * @return string            File extension without name.
	 * @throws Exception If File does not exist.
	 */
	public static function extension($file_name)
	{
		if ( self::exists($file_name) )
		{
			return pathinfo($file_name, PATHINFO_EXTENSION);
		}
		throw new \Exception('File specified does not exist.');
	}


	/**
	 * Deletes the specified file.
	 * @param  string $file_name
	 * @return boolean            TRUE upon success,
	 *                            FALSE upon failure.
	 * @throws Exception If File does not exist.
	 */
	public static function delete($file_name)
	{
		if ( self::exists($file_name) )
		{
			return unlink($file_name);
		}
		throw new \Exception('File specified does not exist');
	}


	/**
	 * Gets the last time a file was changed.
	 * @param  string $file_name 
	 * @return Unix timestampe            last time file was changed.
	 * @throws Exception If File does not exist.
	 */
	public static function last_updated($file_name)
	{
		if ( self::exists($file_name) )
		{
			return filemtime($file_name);
		}
		throw new \Exception('File specified does not exist');
	}


	/**
	 * Gets the contents of a file.
	 * @param  string $file_name 
	 * @return boolean            TRUE upon success,
	 *                            FALSE upon failure.
	 * @throws Exception If File does not exist.
	 */
	public static function get($file_name)
	{
		if ( self::exists($file_name) )
		{
			return file_get_contents($file_name);
		}
		throw new \Exception('File specified does not exist');
	}


	/**
	 * put() - Writes or appends data to a file.
	 * @param  string  $file_name 
	 * @param  string OR array OR stream  $data      Data to write to file.
	 * @param  boolean $append    TRUE to append, FALSE to overwrite.
	 * @return int OR boolean             Bytes written to file upon success,
	 *                					  FALSE upon failure.
	 */
	public static function put($file_name, $data, $append = FALSE)
	{
		if ( $append )
		{
			return file_put_contents($file_name, $data, FILE_APPEND | LOCK_EX);
		}
		return file_put_contents($file_name, $data, LOCK_EX);
	}


	/**
	 * Appends data to a file.
	 * @param  string $file_name 
	 * @param  string OR array OR stream $data      Data to write to file.
	 * @return int OR boolean            Bytes written to file upon success,
	 *                				 	 FALSE upon failure.
	 */
	public static function append($file_name, $data)
	{
		return self::put($file_name, $data, TRUE);
	}


	/**
	 * Removes all data from a file.
	 * @param  string $file_name
	 * @return boolean            TRUE upon success.
	 * @throws Exception If File does not exist.
	 */
	public static function truncate($file_name)
	{
		if ( self::exists($file_name) )
		{
			$fp = fopen($file_name, 'w');
			return TRUE;
		}
		throw new \Exception('File specified does not exist.');
	}

	/**
	 * Copies file to another location / name.
	 * @param  string $file_name  
	 * @param  string $destination Path to copy of file
	 *                             (including name of file).
	 * @return boolean              TRUE upon success,
	 *                              FALSE upon failure.
	 * @throws Exception If File does not exist.
	 */
	public static function copy($file_name, $destination)
	{
		if ( self::exists($file_name) )
		{
			return copy($file_name, $destination);
		}
		throw new \Exception('File specified does not exist.');
	}

	/**
	 * Moves a file to another location / name.
	 * @param  string $file_name  
	 * @param  string $destination Path to new location
	 *                             (including name of file).
	 * @return boolean              TRUE upon success,
	 *                              FALSE upon failure.
	 * @throws Exception If File does not exist.
	 */
	public static function move($file_name, $destination)
	{
		if ( self::exists($file_name) )
		{
			return rename($file_name, $destination);
		}
		throw new \Exception('File specified does not exist.');
	}
}

?>