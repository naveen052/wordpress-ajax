<?php get_header(); if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="ajax-container">
  <div class="row">
    <div class="col-md-8" id="post-<?php the_ID(); ?>">
      <div class="single-post">
        <div class="meta-data">
          <p><?php echo get_avatar('naveensingh.org@gmail.com',64); ?>  by <?php the_author_posts_link(); ?> On : <?php the_date(); ?> in <?php the_category(', ') ; ?> </p>
          <p></p> 
        </div>
        <div class="inner-post">
          <h1><?php the_title(); ?></h1>        
          <p><?php the_content(__('(more...)')); ?></p>
          <hr class="noCss" />
          </div>
        </div>
      </div>
    <div class="col-md-4">
        <div class="sidebar">
          <?php get_sidebar(); ?>
        </div>
      </div>
      <?php endwhile; else: ?>
      <h2>Sorry, no posts matched your criteria.</h2>  
    
  </div>

    
<?php endif; ?>
</div>