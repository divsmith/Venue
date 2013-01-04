<?php namespace Movie;

require_once 'File.php';

class Movie
{
	/**
	 * Name of the movie.
	 * @var string.
	 */
	private $name;

	/**
	 * Array of file types.
	 * @var array
	 */
	private $file_types = array();

	/**
	 * Creates a new movie object.
	 * @param string $name name of the movie.
	 * @return Movie $this.
	 */
	public function __construct($name)
	{
		$this->set_name($name);
		return $this;
	}

	/**
	 * Adds a file type to a movie object
	 * @param string $type file type.
	 * @return Movie $this.
	 */
	public function add_type($type)
	{
		$this->file_types[] = $type;
		return $this;
	}

	/**
	 * Gets the array of file types.
	 * @return array file types.
	 */
	public function get_types()
	{
		return $this->file_types;
	}

	/**
	 * Sets the name of the file for the 
	 * Movie object.
	 * @param string $name name of movie.
	 */
	public function set_name($name)
	{
		$this->name = ucwords(strtolower(\File\File::name($name)));
		$this->file_types[] = \File\File::extension($name);
		return $this;
	}

	/**
	 * Gets the name of the movie object.
	 * @return string name.
	 */
	public function get_name()
	{
		return $this->name;
	}
}