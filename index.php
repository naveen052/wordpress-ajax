<?php

  get_header();

  if (have_posts()): ?>

<div id="ajax-container" class="clearfix">
  <ol class="loop-posts clearfix"><?php while (have_posts()) : the_post(); ?>    
    <div class="col-md-3 loop-single item">
      <li id="post-<?php the_ID(); ?>">
         <article class="loop-articles">
              <h2><a class="js-ajax-link" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
              <small><?php the_date(); ?> by <?php the_author(); ?></small>

              <?php the_excerpt(); ?>
              <p>Posted In: <?php the_category(', '); ?></p>
        </article>      
      </li>
    </div>

    <?php comments_template(); // Get wp-comments.php template ?>

    <?php endwhile; ?>

  </ol>

<?php else: ?>

  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

  <div class="row">
    <div class="col-md-12">
      <?php if (will_paginate()): ?>  
       <p>
           <?php posts_nav_link('','','&laquo; Previous Entries') ?>
           <?php posts_nav_link('','Next Entries &raquo;','') ?>
        </p>
        
      <?php endif; ?>
    </div>
  </div>
</div>
  <?php
  get_footer();
?>