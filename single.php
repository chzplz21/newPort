
<?php
/*
 * Template Name: Single Post
 * Template Post Type: post, page, product
 */

 get_header();  

 ?>
 
 <div class = "container">
<?php

add_filter( 'comment_form_logged_in', '__return_empty_string' );


 while ( have_posts() ) {
    the_post();
    ?>
    <h2> <?php echo the_title(); ?> </h2>
    <h3> By David Rothkopf</h3>
    <?php
    the_content();
    comment_form();
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
 } 

 ?>
 </div>
 <?php

get_footer();


 ?>


 