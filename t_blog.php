<?php
    /*
    Template Name: Blog
    */

 get_header();

 
 $args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 10
);


 $the_query = new WP_Query( $args );

 // The Loop
 ?>
 <div class = "container">
    <h1 id = "blogH1"> Some web dev knowledge nuggets I find interesting... </h1>
<?php
    if ( $the_query->have_posts() ) {
      
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
           
            ?>
           
            <div class = "postHolder">
               
                <a class = "postTitle" href="<?php the_permalink(); ?>"> <?php echo get_the_title() ?> </a>
                <p><?php echo the_excerpt(); ?></p> 
                <hr class = "commentHR">
            
            </div>
         
            <?php
            
        }
       
    }
    ?>
 </div>
<?php
 
?>

