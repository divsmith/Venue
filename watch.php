<?php
	require 'functions.php';

	// Check to make sure that a valid id was sent through the
	// query string. If so, include the appropriate Movie object
	// and pass it to the view.
	$movies = get_movies();
	if ( isset($_GET['id']) && $_GET['id'] <= sizeof($movies) )
	{
		$movie = $movies[$_GET['id']];
		$data = array(
			'movie' => $movie,
			'back' => TRUE
		);
		view('watch', $data);
	}
?>