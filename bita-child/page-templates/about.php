<?php 
/*
    Template Name: About Page
*/
?>
<?php get_header();?>
<?php get_template_part('/template-parts/about/hero-page');?>

<section class="menu_area">
    <div class="container">
        <div class="menu">
            <div class="row">
                    <div class="nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'mainmenu' ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="posts" <?php post_class();?>>
    <?php while(have_posts()) : the_post();?>
    <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><?php the_title();?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author();?></strong><br/>
                        <?php echo get_the_date( 'D M j' );?>
                    </p>
                    <?php echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');?>
                </div>
                <div class="col-md-8">
                    <?php 
                        if ( has_post_thumbnail() ) {
                            $thumbnailurl = get_the_post_thumbnail_url(null,"large");
                            printf ('<a href="%s" data-featherlight="image">', $thumbnailurl);
                            the_post_thumbnail('large', array('class' => 'img-fluid'));
                            echo "</a>";
                        }
                    ?>
                    <?php the_content();?>

                    <div class="time">
                        <?php echo bita_time_today();?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php endwhile;?>
</div>

<section class="overfooter_area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget_one">
                    <?php
                        if(is_active_sidebar("sidebar1")){
                            dynamic_sidebar("sidebar1");
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget_two">
                   <?php
                        if(is_active_sidebar("sidebar2")){
                            dynamic_sidebar("sidebar2");
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<?php get_footer();?>