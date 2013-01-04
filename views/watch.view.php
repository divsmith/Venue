<link rel="stylesheet" href="css/watch.css">

<div class="well well-large center">
	<?php if ( isset($movie) ) : ?>
		<h2><?= $movie->get_name(); ?></h2>
 	<?php endif; ?>
</div>

<div class="well">
	<div id="video">
		<?php if ( isset($movie) ) : ?>
			<video id="my_video_1" class="video-js vjs-default-skin" controls
		 			 preload="auto" width="640" height="300" data-setup="{}">
		  				<?php foreach ($movie->get_types() as $type) : ?>
						<source src="<?=$config['root_URL'] . $config['movie_dir'] . $movie->get_name() . '.' . $type; ?>" type="video/<?=$type; ?>">
					<?php endforeach; ?>
			</video>
		<?php endif; ?>
	</div>
</div>