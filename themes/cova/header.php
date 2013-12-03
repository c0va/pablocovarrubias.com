<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="<?php bloginfo(template_url); ?>"/images/favicon.ico>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_url'); ?>">
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=172546929510591";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<header>
			<a href="<?php echo bloginfo('url'); ?>">
				<div id="logo">
					<img src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png">
				</div>
			</a>
		</header>
		<div id="main">