<link rel="stylesheet" href="css/push_down.css">

<div class="row">
	<div class="span12">
		<div class="hero-unit">
			<h1>Documentation</h1>
			<p class="lead">Help is on the way.</p>
		</div>

		<section>
			<h2>Installation</h2>
			<p>1. If you haven't done so already, download the zip file and unpack it.</p>
			<p>2. Place the unpacked folder in the document root of your web server.</p>
			<p>3. That was easy, wasn't it?</p>
			<hr>
		</section>
		
		<section>
			<h2>Configuration</h2>
			<p class="lead">Adding Movies</p>
			<p>
				1. Movies must be converted from DVD (or whatever other media they are on) to one of the supported
				file formats.
			</p>
			<p>
				2. Copy the converted files to the 'movies' directory within Venue.
			</p>
			
			<p class="lead">Accessing Movies</p>
			<p>
				By default Venue will be available at 'http://{internal-server-ip}/Venue'. If the files
				were unpacked in a subfolder in the document root, Venue will be at 'http://{internal-server-ip}/subfolder-path/Venue';
			</p>
			<hr>
		</section>

		<section>
			<h2>Advanced Configuration</h2>
			<p class="lead">WAN Access</p>
			<p>
				To access your movies from outside of your LAN all you need to do is forward a port from your
				router to your web server. It is recommended that you have a static internal IP for your server,
				as well as a static WAN IP or a domain name pointing to it with DDNS. Venue can then be accessed
				at 'http://{external-IP}/Venue' or 'http://{external-IP}/subfolder-path/Venue'.
			</p>

			<p class="lead">Movie Directory Protection</p>
			<p>
				By default if you forward a port to your web server so that Venue is accessible from outside your LAN the 'movies' directory
				within Venue is unprotected, meaning anyone can browse to 'http://{external-IP}/Venue/movies' and watch or steal your movie
				collection. To prevent this, Venue integrates with directory access control provided by Apache web server via a .htaccess file.
			</p>
			<p>
				1. Protect the 'movies' directory within Venue via a .htaccess file. If you are not familiar with the process,
				<a href="http://www.cyberciti.biz/faq/howto-setup-apache-password-protect-directory-with-htaccess-file/">this</a>
				is a good starting point.
			</p>
			<p>
				2. Venue configuration here.
			</p>
		</section>

	</div>
</div>