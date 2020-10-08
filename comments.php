<?php 
//Get only the approved comments
$args = array(
    'status' 	=> 'approve'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
// Comment Loop
if ( $comments ) {
 foreach ( $comments as $comment ) {
 	?>
 		<div class="media">
		  <?php echo get_avatar($comment, 64, null, null, array('class' => 'mr-3'));?>
		  <div class="media-body">
		    <h5 class="mt-0"><?php comment_author($comment);?></h5>
		    <?php comment_text($comment);?>
		  </div>
		</div>
 	<?php
 }
} else {
 echo 'No comments found.';
}
?>

<div class="comment_box">
	<?php comment_form();?>
</div>