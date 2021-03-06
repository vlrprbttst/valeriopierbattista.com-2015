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

				
				<div class="personal-description-cont"> 
					<img src="images/dist/valeriopierbattista.png" class="profile-pic" data-src="images/dist/amazing.gif">
					<h2>My name is Valerio Pierbattista and I have a passion for building things on the web.</h2>
					<p>
						I am a <b>Front End Developer</b> and <b>Web Designer</b> living in  Rome, Italy. I love simple and functional
						interfaces optimized for anything that can access the web. You can read more about me on my <a href="/cv" target="_blank"><i class="fa fa-file-text"></i> online résumé</a>.
					</p>
					<p>
						I'm currently a Front-End Developer at <a href="http://doing.com" target="_blank">DOING</a>.
					</p>
				</div>
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
		<script src="js/build/index.min.js"></script>
		<?php
		include 'document_end.php';
		?>
