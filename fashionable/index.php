<?php get_header() ?>

<body>
<header class="header">
	<h1><?php bloginfo( 'name' ); ?></h1>
	<h2><?php bloginfo( 'description' ); ?></h2>
</header>

<div class="middle">
	<?php
	if ( have_posts() ){
		while ( have_posts() ){
			the_post();

			echo '<h3><a href="'. get_permalink() .'">'. get_the_title() .'</a></h3>';

			echo get_the_excerpt();
		}
	}
	else{
		echo ' <p>No posts</p>';
	}
	?>
</div>

<?php get_footer() ?>