<?php 
/*
	Template Name: Services
*/
?>

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

<section class="images_size">
	<div class="container">
		<div class="images">
			<div class="row">
				<div class="col-md-12">
					<?php 
					the_post_thumbnail('bita_square');
					echo "<br />";
					the_post_thumbnail('bita_portait');
					echo "<br />";
					the_post_thumbnail('bita_landscape');
					?>
					
					
				</div>
			</div>
		</div>
	</div>
</section>


