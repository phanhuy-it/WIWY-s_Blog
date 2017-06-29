<?php get_header(); ?>

<?php /*?>	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>
			
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?><?php */?>



<div class="single">
	 <div class="container">
		  <div class="col-md-8 single-main">				 
			  <div class="single-grid">
					<?php while(have_posts()) : the_post() ?>
						<h1><?php the_title(); ?></h1>
						<div><?php the_content(); ?></div>
					<?php endwhile; ?>
			  </div>
			 <ul class="comment-list">
		  		   <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
		  		   <li><img src="<?php bloginfo('template_url'); ?>/images/avatar.png" class="img-responsive" alt="">
		  		   <div class="desc">
		  		   <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
		  		   </div>
		  		   <div class="clearfix"></div>
		  		   </li>
		  	  </ul>
			  <div class="content-form">
					 <h3>Leave a comment</h3>
					<form>
						<input type="text" placeholder="Name" required/>
						<input type="text" placeholder="Email" required/>
						<input type="text" placeholder="Phone" required/>
						<textarea placeholder="Message"></textarea>
						<input type="submit" value="SEND"/>
				   </form>
						 </div>
		  </div>

			  <div class="col-md-4 side-content">
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

<?php get_footer(); ?>
