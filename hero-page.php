<?php 
	$bita_header_bg = get_the_post_thumbnail_url(null, "large");
?>
<div class="header page-header" style="background-image: url(<?php echo $bita_header_bg; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo('description');?></h3>
                <a href="<?php echo site_url();?>"><h1 class="align-self-center display-1 text-center heading"><?php bloginfo('title');?></h1></a>
            </div>
        </div>
    </div>
</div>