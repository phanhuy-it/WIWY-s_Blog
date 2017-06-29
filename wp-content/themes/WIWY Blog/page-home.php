<?php get_header(); ?>

	<?php /*?><main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main><?php */?>
	
	<div class="content">
		 <div class="container">
			 <div class="content-grids">
				 <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 content-main">
					 <div class="content-grid">
					 	 <?php if(have_posts()): 
				   		       while(have_posts()): the_post(); ?>	
						  	
						  	<div class="content-grid-info">
								 <img src="<?php bloginfo('template_url'); ?>/images/post1.jpg" alt=""/>
								 <div class="post-info">
									 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  July 30, 2014 / 27 Comments</h4>
									 <p><?php the_content(); ?></p>
									 <a href="<?php the_permalink(); ?>"><span></span>READ MORE</a>
								 </div>
						 	</div>
					     

					     <?php endwhile; ?>
              			 <?php endif; ?>	 
						 
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

<?php /*?><?php get_sidebar(); ?><?php */?>

<?php get_footer(); ?>