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
		<a name="top"></a>
		<div class="wrap">
			<header>
				<div class="navbar navbar-inverse navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container-fluid">
							<nav>
								<a class="brand" href=<?=$config['root_URL']; ?>>Venue</a>
								<ul class="nav pull-right">
									<?php if ( isset($back) && $back == TRUE ) : ?>
										<li><a href="<?=$config['root_URL']; ?>"><i class="icon-chevron-left icon-white"></i> Back</a></li>
									<?php endif; ?>
									<?php if ( isset($top_bottom) && $top_bottom ==  TRUE ) : ?>
										<li><a href="#top">Top <i class="icon-chevron-up icon-white"></i></a></li>
										<li><a href="#bottom">Bottom <i class="icon-chevron-down icon-white"></i></a></li>
									<?php endif; ?>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>

			<div class="main">
				<div class="container-fluid">
					<?php 
						if ( isset($path) ) 
						{ 
							include $path;
						} 
					?>
				</div>
			</div>

			<div class="push"></div>
		</div>

		<footer>
			<div class="container-fluid">
						<ul class="inline">
							<li><p class="muted">Designed and built by <a href="http://parkersmith.us">Parker Smith</a>, 2012</p></li>
						</ul>
			</div>
		</footer>
		<a name="bottom"></a>

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/list.js"></script>
	</body>
</html>