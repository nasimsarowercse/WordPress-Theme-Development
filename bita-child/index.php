<?php get_header();?>
<?php get_template_part('/template-parts/common/hero');?>

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

<div <?php post_class();?>>
    <?php while(have_posts()) : the_post();?>
    <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php the_permalink();?>"><h2 class="post-title"><?php the_title();?></h2></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author();?></strong><br/>
                        <?php echo get_the_date( 'D M j' );?>
                    </p>
                    <?php echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');?>

                    <?php
                    $bitaformat = get_post_format();
                    if($bitaformat == 'audio'){
                        echo '<span class="dashicons dashicons-media-audio"></span>';
                    }else if($bitaformat == 'video'){
                        echo '<span class="dashicons dashicons-video-alt3"></span>';
                    }else if($bitaformat == 'image'){
                        echo '<span class="dashicons dashicons-format-image"></span>';
                    }else if($bitaformat == 'link'){
                        echo '<span class="dashicons dashicons-admin-links"></span>';
                    }
                    ?>

                </div>
                <div class="col-md-8">
                    <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('large', array('class' => 'img-fluid'));
                        }
                    ?>
                    <?php the_excerpt();?>
                </div>
            </div>

        </div>
    </div>
    <?php endwhile;?>
</div>

<section class="pagination_area">
    <div class="container">
        <div class="pagination">
            <div class="row">
                <div class="col-md-12 post_pagi">
                    <?php 
                        the_posts_pagination(array(
                            'prev_text' => __( 'Newer', 'bita' ),
                            'next_text' => __( 'Older', 'bita' ),
                            'screen_reader_text' => " ",
                        ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section> 
<?php get_footer();?>