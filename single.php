<?php get_header(); if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="ajax-container">
  <div class="row">
    <div class="col-md-8" id="post-<?php the_ID(); ?>">
      <div class="single-post">
        <div class="inner-post">
          <h1><?php the_title(); ?></h1>     
          <div class="meta-data">
            <small>On : <?php the_date(); ?> in <?php the_category(', ') ; ?></small>   
          </div>
          <p><?php the_content(__('(more...)')); ?></p>
          
          <div class="post-footer">
            <figure class="author-image">
              <?php echo get_avatar('naveensingh.org@gmail.com'); ?>
            </figure>
              <h5>About <?php the_author(); ?></h5>
              <section class="author-description">
                <p><?php the_author_description(); ?> </p> 
                <p>View All The Posts By <a href="<?php the_author_link(); ?> "><?php the_author(); ?></a></p>
              </section>
            </div>
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
 <?php get_footer(); ?>