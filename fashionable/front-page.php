<?php
	get_header();
?>

<main>
    <?php if( have_rows('front_page') ) : ?>
        <?php while( have_rows( 'front_page' ) ) : the_row() ; ?>

            <?php if( get_row_layout() == 'post' ) :
                $post_title = get_sub_field('post_title');
                $post_subtitle = get_sub_field('post_subtitle');
                $post_content = get_sub_field('post_content');
                $post_image = get_sub_field('post_image');
                $sign_image = get_sub_field('signature_image');
                $bg_img = get_sub_field('background_image');
            ?>
                <section class="post" <?php if($bg_img) { ?>style="background-image: url('<?= $bg_img['url']; ?>'); background-size: cover" <?php } ?>id="post">
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell large-8">
                                <?php if($post_title) { ?><h3 class="post-title section-title"><?= $post_title ?></h3><?php } ?>
                                <?php if($post_subtitle) { ?><p class="post-subtitle"><?= $post_subtitle ?></p><?php } ?>
                                <div class="post-content">
                                    <?php if($post_image) { ?><img class="post-image" src="<?= wp_get_attachment_image_url($post_image, 'medium') ?>" alt="post-image"><?php } ?>
								    <?php if($post_content) { echo $post_content; } ?>
                                    <?php if($sign_image) { ?><img class="post-sign" src="<?= wp_get_attachment_image_url($sign_image, 'small') ?>" alt="sign-image"><?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            <?php endif; ?>

            <?php if( get_row_layout() == 'cta') :
                $bg_img = get_sub_field('image');
                $btn_text = get_sub_field('button_text');
                $title = get_sub_field('section_title');
            ?>
                <section class="cta" <?php if($bg_img) { ?> style="background-image: url('<?= $bg_img['url'] ?>'); background-size: cover; background-position: center;" <?php } ?>>
                    <?php if($title) { ?><h2 class="cta-title"><?= $title ?></h2><?php } ?>
                    <?php if($btn_text) { ?><a href='#contact' class="cta-btn"><?= $btn_text ?></a><?php } ?>
                </section>

            <?php endif; ?>
            <?php if( get_row_layout() == 'gallery' ) :
                $title = get_sub_field('section_title');
                $images = get_sub_field('gallery');
                $size_thumb = 'thumbnail';
                $size_full = 'large'
            ?>
                <section class="gallery" id="fotos">
                    <?php if($title) { ?><h2 class="gallery-title section-title"><?= $title ?></h2><?php } ?>
                    <?php if($images) : ?>
                    <div class="photos">
                        <?php foreach($images as $image) : ?>
                            <a class="gallery_item" rel="gallery" data-fancybox="gallery" href="<?= wp_get_attachment_image_url($image, $size_full) ?>"><?= wp_get_attachment_image($image, $size_thumb) ?></a>
                        <?php endforeach; ?>
                    </div>
			        <?php endif; ?>
                </section>
            <?php endif; ?>
            <?php if( get_row_layout() == 'price_list' ) :
                $bg_img = get_sub_field('bg_img');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $description = get_sub_field('description');
                $table_title = get_sub_field('table_title');
                $price_list = get_sub_field('price_list_table');
                $content = get_sub_field('content');
            ?>
                <section class="price-list" <?php if($bg_img) { ?>style="background-image: url('<?= $bg_img['url'] ?>'); background-size: cover;" <?php } ?> id="pricelist">
                    <?php if($title) { ?><h2 class="price-list__title section-title"><?= $title ?></h2><?php } ?>
                    <?php if($subtitle) { ?><p class="price-list__subtitle"><?= $subtitle ?></p><?php } ?>
                    <?php if($description) { ?><div class="price-list__description"><?= $description ?></div><?php } ?>
                    <?php if($table_title) { ?><h3 class="price-list__table-title"><?= $table_title ?></h3><?php } ?>
                    <?php if( $price_list ) : ?>
                    <div class="table-container">
                        <table class="price-list__table">
                            <tr>
                                <th></th>
                                <th class="th">75 stuks</th>
                                <th class="th">100 stuks</th>
                                <th class="th">125 stuks</th>
                                <th class="th">150 stuks</th>
                                <th class="th">175 stuks</th>
                            </tr>
                        <?php
                            foreach( $price_list as $price ) :
                                $title = get_the_title( $price -> ID );
                                $price75 = get_field('price_75_stuk', $price -> ID );
                                $price100 = get_field('price_100_stuk', $price -> ID );
                                $price125 = get_field('price_125_stuk', $price -> ID );
                                $price150 = get_field('price_150_stuk', $price -> ID );
                                $price175 = get_field('price_175_stuk', $price -> ID );
                        ?>
                            <tr>
                                <td class="row-title"><?= $title ?></td>
                                <td class="row-value"><?php if($price75) { echo($price75 . ' &#8364;'); } else echo('-'); ?></td>
                                <td class="row-value"><?php if($price100) { echo($price100 . ' &#8364;'); } else echo('-'); ?></td>
                                <td class="row-value"><?php if($price125) { echo($price125 . ' &#8364;'); } else echo('-'); ?></td>
                                <td class="row-value"><?php if($price150) { echo($price150 . ' &#8364;'); } else echo('-'); ?></td>
                                <td class="row-value"><?php if($price175) { echo($price175 . ' &#8364;'); } else echo('-'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                    <?php endif; ?>
                    <?php if($content) { ?><div class="price-list__content"><?= $content ?></div><?php } ?>
                </section>
            <?php endif; ?>
            <?php if( get_row_layout() == 'contact_form') :
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $phone = get_sub_field('phone_number');
                $email = get_sub_field('email');
                $address = get_sub_field('address');
                $bg_img = get_sub_field('bgImg');
                ?>
                <section class="contact-form" <?php if($bg_img) { ?>style="background-image: url('<?= $bg_img['url'] ?>'); background-size: cover;" <?php } ?> id="contact">
                    <div class="grid-container">
                        <?php if($title) { ?><h2 class="contact-form__title section-title"><?= $title ?></h2><?php } ?>
                        <?php if($subtitle) { ?><p class="contact-form__subtitle section-subtitle"><?= $subtitle ?></p><?php } ?>
                        <div class="grid-x grid-margin-y grid-margin-x align-center">
                            <div class="cell large-6">
	                            <?= do_shortcode('[contact-form-7 id="73" title="Contact form 1"]'); ?>
                            </div>
                            <div class="cell large-6"> <?= do_shortcode('[wpgmza id="1"]'); ?></div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php
	get_footer();
	?>