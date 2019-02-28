<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 */

//Get only the approved comments 




$postID = get_the_ID();


$args = array (
   'post_id' => $postID
);


// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

 
// Comment Loop
if ( $comments ) {
    ?><h2>Comments</h2> <?php
    foreach ( $comments as $comment ) {
      // var_dump($comment);
        echo '<p><strong>' . $comment->comment_author . '</strong></p>';
        echo '<p>' . $comment->comment_content . '</p>';
        echo '<hr class = "commentHR">';
        
    }
} else {
    echo 'No comments found.';
}
?>