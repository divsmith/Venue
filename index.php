<!--
* Parker Smith
* 9/22/12
* Venue Controller
-->

<?php
	require_once 'functions.php';
	
	$movies = get_movies();

	// Setup the $data array to pass to the view.
	$data = array(
		'movies' => $movies,
		'top_bottom' => TRUE
	);

	// Specify the view and pass $data to it.
	view('index', $data);
?>