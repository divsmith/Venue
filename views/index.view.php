<link rel="stylesheet" href="css/index.css">
<?php $count = 0; ?>

<ul class="movie_list">
	<?php foreach ( $movies as $movie) : ?>
	<li>
		<a href="watch.php?id=<?=$count++; ?>" class="movie">
			<div class="row">
				<!-- <div class="span12"> -->
					<div class="well well-large">
						<h3 class="movie_name"> <?= $movie->get_name(); ?></h3>
					</div>
				<!-- </div> -->
			</div>
		</a>
	</li>
	<?php endforeach; ?>
</ul>