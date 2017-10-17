<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article class="grey lighten-4" id="post-<?php the_ID(); ?>" > 

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<div class="parallax-container" style="z-index: 1; height: 200px;">
      <div class="parallax"><?php the_post_thumbnail(); // Fullsize image for the single post ?></div>
    </div>
				
				</a>
			<?php endif; ?>



          
			<!-- /post thumbnail -->

			



  <div class="container">
 <div class="row">
      <div class="white col m8 s12">
<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->
       
			<?php the_content(); // Dynamic Content ?>
      </div>
      <div   class="col m4 s12">  
<div style="padding: 1em;"  class="cv-post center-align blue">
         <img style="height: 120px; widht: 120px;" src="http://patlab.cl/wp-content/uploads/2017/09/plabarca.jpg" alt="" class="circle">
         <h5 class="white-text">Patricio Labarca</h5>
         <span>Psicólogo en Santiago</span>
         <p class="white-text">Me especializo en psicología clínica para adultos y adolescentes. Como también en tratamiento adicciones y peritajes. </p>
</div>
<?php get_sidebar() ?>
</div>

</div>
   

  </div>
 




<div class="container">






			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->


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

</div>
<script type="text/javascript">

 $(document).ready(function(){
      $('.parallax').parallax();
    });
        </script>


<?php get_footer(); ?>
