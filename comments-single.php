<?php
/* Copy this file into your theme folder to customise! */
get_header();
?>

<h2>Comments for <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php
wp_list_comments('reverse_top_level=false', get_comments('post_id='.$post->ID));
comment_form();
get_footer();
?>