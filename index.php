<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
                <?php wp_head(); ?>
                </head>
                <body <?php body_class(); ?>>
                    <h1><?php bloginfo( 'name' ); ?></h1>
                        <p><?php bloginfo( 'description' ); ?></p>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    <h2><?php the_title(); ?></h2>
                                            <div><?php the_content(); ?></div>
                                                <?php endwhile; endif; ?>
                                                    <?php wp_footer(); ?>
                                                    </body>
                                                    </html>

    
                                                    