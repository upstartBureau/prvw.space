<?php get_header(); ?>



  <!-- <?php the_content(); ?> -->

  <?php
			while ( have_posts() ) : the_post();
        the_content();
			endwhile;
			?>



  </main>
