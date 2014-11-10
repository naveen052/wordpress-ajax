  </div> </div>
      <footer>
        <div class="row">
        	 <div class="col-md-4">
			      <h3 class="widget-title">
			     	<?php _e('Search This Site'); ?></h3>
			      <form class="search-form" method="get" action="<?php bloginfo('home'); ?>">
				   <input placeholder="Type and hit enter" type="text" class="search-field" name="s" id="s" size="15" /><br />
				  </form>
			  </ul>   

			      </div>

  			<div class="col-md-4">
				 <h3 class="widget-title">Recent Posts</h3> 
				<?php
					$args = array( 'numberposts' => '5', 'tax_query' => array(
							array(
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => 'post-format-aside',
								'operator' => 'NOT IN'
							), 
							array(
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => 'post-format-image',
				 				'operator' => 'NOT IN'
							)
					) );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
					}
				?>
			</div>

		  		<div class="col-md-4">
					<h3 class="widget-title">Popular Categories</h3> 
					<?php
					$args = array(
					  'orderby' => 'name',
					  'parent' => 0
					  );
					$categories = get_categories( $args );
					foreach ( $categories as $category ) {
						echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br/>';
					}
					?>
			</div>
			<div class="col-md-12 centered" style="margin-top:30px;">
				<p>
        			All rights reserved © <a href="http://uiuxblog.com">UI/UX Blog</a> Powered By <a href="http://wordpress.org">Wordpress</a>
        		</p>
			</div>
		</div>
      </footer>

	
  
  </body>
</html>
 