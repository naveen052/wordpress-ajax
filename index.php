<?php

  get_header();

  if (have_posts()): ?>

<div id="ajax-container">
  <div id="container" class="js-masonry" data-masonry-options='{ "columnWidth": 0, "itemSelector": ".item" }'>
    <ol class="row loop-posts clearfix"><?php while (have_posts()) : the_post(); ?>    
      <div class="col-md-3 loop-single item">
        <li id="post-<?php the_ID(); ?>">
           <article class="loop-articles">
              <div class="featured-image"><a href="<?php the_permalink() ?>"><?php
                if(has_post_thumbnail()) { ?>
                    
                        <?php the_post_thumbnail('medium');?>
                   
             <?php } ?> </a>
                <div class="article-text clearfix">
                  <h2><a class="js-ajax-link" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                  <small><?php the_date(); ?> by <?php the_author(); ?></small>

                  <?php the_excerpt(); ?>
                  <p>Posted In: <?php the_category(', '); ?></p>
                <a class="js-ajax-link" href="<?php the_permalink() ?>" rel="bookmark">Read More</a>
                </div>
          </article>      
        </li>
      </div>
      <?php endwhile; ?>
    </ol>
    <?php else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
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