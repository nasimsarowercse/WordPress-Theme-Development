<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo('description');?></h3>
                <h1 class="align-self-center display-1 text-center heading"><?php bloginfo('title');?></h1>
            </div>
        </div>
    </div>
</div>

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
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'footermenu' ) ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer();?>
</body>
</html>