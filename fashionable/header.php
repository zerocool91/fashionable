<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <?php
            $header_logo = get_field( 'header_image', 'option' );
            $size = 'header-logo-image';
            ?>
        <?php if($header_logo) { ?><img src="<?php echo wp_get_attachment_image_url($header_logo, $size); ?>" alt="header-logo" class="header-image"><?php } ?>
        <?php if( have_rows('header_slider', 'option') ): ?>
            <div class="grid-container"><div class="slider-nav"></div></div>
            <div class="header-slider">
            <?php while( have_rows('header_slider', 'option') ) : the_row() ?>
            <?php
                $slide_image = get_sub_field('slide_image');
                $slide_text  = get_sub_field('slide_text');
                $size = 'header-slider-image';
            ?>
                <?php if($slide_image) : ?>
                <div class="slide_item" style="background-image: url('<?= wp_get_attachment_image_url($slide_image, $size) ?>'); ">
                    <?php if($slide_text) { ?><h1 class="header-title"><?= $slide_text ?></h1> <?php } ?>
                </div>
                <?php endif; ?>

        <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="header-nav">
            <div class="grid-container">
                <div class="grid-x align-justify align-middle">
                    <div class="cell shrink header-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <?php if(has_nav_menu( 'header_menu' )) : ?>
                    <div class="cell shrink header-nav-menu">
                        <?php
                            wp_nav_menu( array(
                                'container' => 'nav',
                                'menu_class' => 'header-menu',
                                'theme_location' => 'header_menu'
                            ) );
                        ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>