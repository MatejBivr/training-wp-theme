<html>
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="utf-8">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<header>
			<nav class="menu-header">
				<?php
					$args = array(
						'theme_location' => 'primary',
						'container_class' => 'nav-links'
					);

					wp_nav_menu($args);
				?>
				<div class="search-form">
					<form action="/" method="get">
						<label for="search">search</label>
						<input type="text" name="s" id="search" />
						<button type="submit" value="submit">Search</button>
						<input type="hidden" name="post_type" id="post_type" value="post" />


					</form>
				</div>
			</nav>
		</header>
		
	