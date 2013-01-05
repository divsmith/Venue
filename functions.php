<?php
	function view($path, $data = NULL)
	{
		if ( isset($data) )
		{
			extract($data);
		}

		$path = $path . '.view.php';

		require 'config.php';
		require_once 'File.php';
		require 'views/layout.view.php';
	}

	function get_movies()
	{
		require_once 'config.php';
		require_once 'File.php';
		require_once 'Movie.php';

		// Get files from $movie_path that have extensions in $file_extensions.
		$output = '';
		$file_type_string = "*.{";
		$file_type_string .= implode($config['file_types'], ',');
		$file_type_string .= "}";
		$movie_names = glob($config['movie_dir'] . $file_type_string, GLOB_BRACE);

		// Sort the files alphabetically.
		sort($movie_names, SORT_NATURAL | SORT_FLAG_CASE);

		// Create the array of Movie objects.
		$movies = array();
		foreach ($movie_names as $name)
		{
			$movie = new Movie\Movie($name);
			// Search through all movies already in the $movies[] array to see
			// if the current $name is already in there. If it is, simply add the
			// file type to the already existing entry. If not, add the new 
			// Movie object.
			$exists = FALSE;
			for ( $x = 0; $x < sizeof($movies); $x++ )
			{
				if ( $movies[$x]->get_name() == $movie->get_name() )
				{
					$movies[$x]->add_type(File\File::extension($name));
					$exists = TRUE;
					break;
				}
			}

			if ( !$exists )
			{
				$movies[] = $movie;
			}
		}

		return $movies;
	}
?>