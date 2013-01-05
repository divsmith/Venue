<!DOCTYPE html>
<html>
	<head>
		<title>Venue - Your Movies, Anywhere</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/layout.css">

		<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
		<script src="http://vjs.zencdn.net/c/video.js"></script>

		<link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="wrap">
			<section>
				<div class="navbar navbar-inverse navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container-fluid">
							<a class="brand" href=<?=$config['root_URL']; ?>>Venue</a>
								<div class="nav">
									<?php if ( isset($search) && $search == TRUE) : ?>
										<form class="navbar-search pull-left">
		  									<input type="text" class="search-query" id="search-visible" placeholder="Search">
										</form>
									<?php endif; ?>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>


			
			<section class="main_content">
				<div class="container-fluid">
					<?php 
						if ( isset($path) ) 
						{ 
							include $path;
						} 
					?>
				</div>
			</section>
			
			<div class="push"></div>
		</div>

		<footer>
			<div class="container-fluid">
						<ul class="inline">
							<li><p>Designed and built by <a href="http://parkersmith.us" class="footer_link">Parker Smith</a>, 2013</p></li>
						</ul>
			</div>
		</footer>

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/list.js"></script>
	</body>
</html>