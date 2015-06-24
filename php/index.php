<!doctype html>
<!--[if IE 9]>
<html lang="en" class="ie ie9">
<![endif]-->
<!--[if lt IE 9]>
<html lang="en" class="ie ie-legacy">
<![endif]-->
<html lang="en">
	<head>
		<!-- critical above the fold css -->
		<style type="text/css">
<?php
include 'css/above-the-fold.css.php';
?>
		</style>
		<?php
		include 'head.php';
		?>
	

		<?php
		include 'navigation.php';
		?>

		<div class="page-container">
			<div class="sub-container about">
				<h1>Hello!</h1>

				<h2>My name is Valerio Pierbattista and I have a passion for building things on the web.</h2>

				<img src="images/dist/valeriopierbattista.png" class="profile-pic" data-src="images/dist/amazing.gif">
				<p>

					I am a <b>Front End Developer</b> and <b>Web Designer</b> living in  Rome, Italy. I love simple and functional
					interfaces optimized for anything that can access the web.
					I work with
					<code class="language-markup">
						html
					</code>,
					<code class="language-markup">
						css
					</code>,
					<code class="language-markup">
						jQuery
					</code>
					and Photoshop, boosting productivity
					with tools such as
					<code class="language-markup">
						sass
					</code>,
					<code class="language-markup">
						compass
					</code>, Emmet and
					<code class="language-markup">
						grunt
					</code>
					.
					You can read more about me on my <a href="/cv" target="_blank"><i class="fa fa-file-text"></i> online résumé</a>.
				</p>
				<p>
					I'm currently employed at <a href="http://hypertvx.com" target="_blank">HyperTV</a> where I develop second-screen apps for clients
					such as Mediaset, Aljazeera, AS Roma and Sky.
				</p>

				<br>
				<h2><i class="fa fa-spotify" style="color:#90B436"></i> Listening on Spotify</h2>
				<div class="now-playing"></div>
				<br>
				<h2><i class="fa fa-twitter" style="color:#8CD2FA"></i> Latest from Twitter</h2>
				<div id="twitter-feed">

				</div>
				<br>
				<h2><i class="fa fa-instagram" style="color:#296486"></i> Shots from Instagram</h2>
				<div id="instafeed">

				</div>

			</div>

		</div>
		<?php
		include 'footer.php';
		?>
		<?php
		include 'scripts.php';
		?>
		
		<script src="js/index-js/index.js"></script>
	</body>
</html>
