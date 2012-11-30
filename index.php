<!--
* Parker Smith
* 9/22/12
* Venue Controller
-->

<?php
	// Get files from $movie_path that have extensions in $file_extensions.
	require('config.php');
	$output = '';
	$file_type_string = "*.{";
	$file_type_string .= implode($file_types, ',');
	$file_type_string .= "}";
	$video_files = glob($movie_path . $file_type_string, GLOB_BRACE);

	// Sort the files alphabetically.
	sort($video_files, SORT_NATURAL | SORT_FLAG_CASE);

	// Loop through every file.
	$size = sizeof($video_files);
	for($y = 0; $y < $size; $y++)
	{
		if (isset($video_files[$y]))
		{
			extract(pathinfo($video_files[$y]));
			$name = $filename; // This is so we can reference $name once $filename has been overriden in the for loop below.
			$path = $dirname;

			$source = strtoupper($video_files[$y]);

			$extension_array = array();

			// Find any additional files with the same name but different extension.
			for($x = 0; $x < $size; $x++)
			{
				if (isset($video_files[$x]))
				{
					extract(pathinfo($video_files[$x]));
					if (strtolower($filename) == strtolower($name) && in_array($extension, $file_types))
					{
						$extension_array[filesize($video_files[$x])] = $extension;
						unset($video_files[$x]); // Delete the element so that duplicates aren't output.
					}
				}
			}

			/* Sort the extension array by file length descending. This will put the largest files first,
				ensuring the browser uses the highest quality file available to it. */
			krsort($extension_array);

			// Format the name so that every word is capitalized. Create a source tag for each filetype.
			$name = ucwords(strtolower($name));
			$sources = '';
			foreach($extension_array as $extension)
			{
				$file_source = $path . '/' . $name . '.' . $extension;
				$sources .= <<< EOT
					<source src="//{$file_source}" type='video/{$extension}' />
EOT;
			}

			// Add our fully formatted video tag with sources to be output to the browser.
			$video_id = preg_replace('/[^a-z0-9]+/i', '_', $name);
			$front_id = $video_id . '_front';
			$back_id = $video_id . '_back';
			$video_video = $video_id . '_video';
			/*$output .= <<< EOT
						<li>
								<p class="name" onclick="loadMovie('{$video_id}')">{$name}</p>
								<video id="{$video_id}" class="video-js vjs-default-skin"  
								      			controls preload="auto" width="640" height="300"   
								      data-setup='{"example_option":true}'>   
								     {$sources}
								     Your browser does not support the video tag.  
								 </video>
						</li>
EOT;*/

			$output .= <<< EOT
						<li>
								<div id="{$video_id}">

									<div id="{$front_id}" class="front" onclick="loadMovie('{$video_id}')">
											<p class="name">{$name}</p>
									</div>

									<div id="{$back_id}" class="back">
										<video id="{$video_video}" class="video-js vjs-default-skin"  
									      			controls preload="auto" width="640" height="300"
									      			data-setup='{"example_option":true}' >   
									     	{$sources}
									     	Your browser does not support the video tag.  
									 	</video>
									 </div>
								</div>
						</li>
EOT;
															
		}
	}

	// Main view.
	require('index.tmpl.php');
?>