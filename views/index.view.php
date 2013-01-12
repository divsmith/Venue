<link rel="stylesheet" href="css/index.css">

<div id="movie_list">
	<div>
		<form class="search">
			  	<input type="text" class="search-query input-large" id="search-visible" placeholder="Search">
		</form>
	</div>


	<ul class="list">
		<?php $count = 0; ?>
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
</div>