<?php get_header(); if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="ajax-container">
  <div class="row">
    <div class="col-md-8" id="post-<?php the_ID(); ?>">
      <div class="single-post">
        <h1><?php the_title(); ?></h1>
        <p><?php echo get_avatar( '',16); ?>  Posted On : <?php the_date(); ?> by <?php the_author_posts_link(); ?></p>
        <?php the_category(' | ') . " ". edit_post_link(__('Edit'), ' '); ?>
        <p><?php the_content(__('(more...)')); ?></p>      
        <hr class="noCss" />
      </div>
    </div>
    <div class="col-md-4">
        <div class="sidebar">
          something
        </div>
      </div>
      <?php endwhile; else: ?>
      <h2>Sorry, no posts matched your criteria.</h2>  
    
  </div>

    
<?php endif; ?>
</div>