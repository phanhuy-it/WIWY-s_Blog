<?php get_header(); ?>

	<div class="content">
		 <div class="container">
			 <div class="content-grids">
				 <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 content-main">
					 <div class="content-grid">
					 	 <?php
					 	 global $paged;
					 	  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						  global $post;
						  global $wp_query; 
						 $args = array(
							'order' => desc,
							'field' => 'slug',
							'posts_per_page' => 2,
							'paged' => $paged
						  );
					 	 $query1 = new WP_Query( $args );

						if ( $query1->have_posts() ) {
							// The Loop
							while ( $query1->have_posts() ) {
								$query1->the_post();
								echo '<p>' . get_the_title() . '</p>';
							}
							
							wp_pagenavi( array( 'query' => $query1 ) );
							wp_reset_postdata();
						}
					    ?>
						 

						




					 </div>
				  </div>
				  <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 content-right">
					 <div class="recent">
						 <h3>RECENT POSTS</h3>
						 <ul>
						 <li><a href="#">Aliquam tincidunt mauris</a></li>
						 <li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
						 <li><a href="#">Nunc dignissim risus consecu</a></li>
						 <li><a href="#">Cras ornare tristiqu</a></li>
						 </ul>
					 </div>
					 <div class="comments">
						 <h3>RECENT COMMENTS</h3>
						 <ul>
						 <li><a href="#">Amada Doe </a> on <a href="#">Hello World!</a></li>
						 <li><a href="#">Peter Doe </a> on <a href="#"> Photography</a></li>
						 <li><a href="#">Steve Roberts  </a> on <a href="#">HTML5/CSS3</a></li>
						 </ul>
					 </div>
					 <div class="clearfix"></div>
					 <div class="archives">
						 <h3>ARCHIVES</h3>
						 <ul>
						 <li><a href="#">October 2013</a></li>
						 <li><a href="#">September 2013</a></li>
						 <li><a href="#">August 2013</a></li>
						 <li><a href="#">July 2013</a></li>
						 </ul>
					 </div>
					 <div class="categories">
						 <h3>CATEGORIES</h3>
						 <ul>
						 <li><a href="#">Vivamus vestibulum nulla</a></li>
						 <li><a href="#">Integer vitae libero ac risus e</a></li>
						 <li><a href="#">Vestibulum commo</a></li>
						 <li><a href="#">Cras iaculis ultricies</a></li>
						 </ul>
					 </div>
					 <div class="clearfix"></div>
				  </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
