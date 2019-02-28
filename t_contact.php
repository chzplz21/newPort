<?php
    /*
    Template Name: Contact
    */
    get_header();
    ?>

    <div id = "contactContainer">
        <div class = "contactInfo">
        <span class = "way">Phone:</span> <b>954-261-2916</b>
        </div>

        <div class = "contactInfo">
        <span class = "way">Email:</span> <b>davidrothkopf1@gmail.com</b>
        </div>
    </div>

    <?php

    	/* Start the Loop */
			while ( have_posts() ) :
				the_post();
                the_content();
				

			endwhile; // End of the loop.

    ?>



<?php

get_footer();

?>