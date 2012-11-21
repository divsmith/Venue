/***
* Parker Smith
* 9/25/12
* Venue Javascript
***/

var lastActive = null; // Keeps track of the last movie ID that was active.

/*****************
	reloadPage		// Reloads the page via the window.location object
*****************/
function reloadPage()
{
	location = location;
}
/*****************
	loadMovie()		// Loads the correct src attribute for the video tag and reloads the player.
******************/
function loadMovie(movieId)
{
	// Unload the previous movie.
	unloadActiveMovie();

	// Update CSS classes
	frontDiv = document.getElementById(movieId + '_front');
	backDiv = document.getElementById(movieId + '_back');

	frontDiv.className = "frontClick";
	backDiv.className = "backClick";

	// Get the player object
	var movie = getPlayer(movieId);

	// Update the source to the correct one and reload the video
	var source = getSource(movie);
	if (source != null)
	{
		source = source.substr(2, source.length);
		updateSource(movie, source);
	}
	movie.load();

	// Set lastPlayed to the current video
	lastActive = movieId;

	if (source == null)
	{
		alert('No valid video file for this browser. Please try using Google Chrome for best results.');
		unloadActiveMovie();
	}
}



/*************************
	unloadActiveMovie()		// Loads an incorrect src attribute for the video tag to avoid having multiple
								players instantiated on the same page.
*************************/
function unloadActiveMovie()
{
	if (lastActive != null)
	{
		// Unload the previous movie.
		movie = getPlayer(lastActive);
		source = getSource(movie);

		if (source != null)
		{
			source = '//' + source;
			updateSource(movie, source);
		}
		movie.load();

		// Update CSS classes
		frontDiv = document.getElementById(lastActive + '_front');
		backDiv = document.getElementById(lastActive + '_back');

		frontDiv.className = "front";
		backDiv.className = "back";


		lastActive = null;
	}
}

/****************
	getPlayer()		Returns the player object from the DOM.
					(it's been modified by Video.js so it takes some special searching)
*****************/
function getPlayer(movieId)
{
	movieId += '_video_html5_api';
	return document.getElementById(movieId);
}


/******************
	getSource()		Returns a string of the current src attribute for the video tag whose
					id it is passed.
*******************/
function getSource(movie)
{	
	return movie.getAttribute('src');
}

/******************
	updateSource()		Updates current src attribute for the video tag whose
						id it is passed.
*******************/
function updateSource(movie, source)
{
	movie.setAttribute('src', source);
}