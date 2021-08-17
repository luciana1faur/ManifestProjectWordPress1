<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
	<div class="container">
		<nav class="header-navigation">
		  <div class="header-logo">
			<a style="float: left;" href="/" class="logo"><img src="<?= get_stylesheet_directory_uri() . "/images/logo.png" ?>" /></a>
		  </div>
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">WORKS</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="/"><img src="<?= get_stylesheet_directory_uri() . "/images/search-icon.png" ?>" /></a>
			</ul>
		</nav>
		<div class="container header-title">
			<h1>Manifest is a newborn theme.</h1>
			<h1>Clean simple and fast.</h1>
		</div>		
	</div>

	<script>
		(function($) {
		$('.js-menu-trigger').on('click', function() {
		$(this).toggleClass('is-active');
		$('.header ul').toggleClass('is-visible');
		})
		})(jQuery);
	</script>
</header>