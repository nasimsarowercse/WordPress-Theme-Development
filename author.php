<section class="author_area">
    <div class="container">
        <div class="author">
            <div class="row">
                <div class="col-md-4">
                    <div class="author_image">
                        <?php echo get_avatar(get_the_author_meta('id'));?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="author_details">
                        <h3><?php echo get_the_author_meta('display_name');?></h3>
                        <p><?php echo get_the_author_meta('description');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>