<!--
* Parker Smith
* 9/22/12
* Venue View
-->

<!doctype html>
<html>
	<head>
		<title>Venue</title>

		<link rel="stylesheet" href="css/style.css">
		<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    	
    	<script src="http://vjs.zencdn.net/c/video.js"></script>
    	<script src="js/loadMovie.js"></script>
	</head>

	<body>
		<div class="wrapper">
			<header>
				<h1 onclick="reloadPage()">Venue</h1>
			</header>

			<div id="videos">
				<div class="search">
					<label for="search">Search </label>
					<input onclick="unloadActiveMovie()"name="search" id="search" class="search">
				</div>

				<ul class="list">
					<?php echo $output;?>
				</ul>
			</div>
		</div>

			<footer>
				<p>Designed by Parker Smith, 2012</p>
			</footer>
		<script src="js/list.js"></script>
    </script>
      
	</body>
</html>