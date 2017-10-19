<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

			
<!-- parallax hero -->
<div class="parallax-container">
<div class="container center-align">
<div class="banner-text">
    <h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
</div>   
    </div>
      <div class="parallax"><?php echo get_the_post_thumbnail( $post_id, 'full' ); ?></div>
    </div>
      <!-- end parallax hero -->




	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article class="grey lighten-4" id="post-<?php the_ID(); ?>" > 

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

				
				</a>

			<?php endif; ?>

 <div class="container blog-wrap">
 <div class="row">
      <div class="col m8 s12">
<!-- contenido -->
<div class="white content">
<!-- post title -->
			
			<!-- /post title -->
       <p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php the_content(); // Dynamic Content ?>


</div>
<!--  inicia Sub-contenido -->

 
<div class="bg_noise1 comment-template subcontenido">
	<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- post details 
			
		
		


			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			

			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
-->

			<?php comments_template(); ?>

	<?php endwhile; ?>

	<?php else: ?>




		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>



     
			<!-- /post thumbnail -->


<!-- FIN Sub-contenido -->
</div>

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

<!-- end content -->




      




	</section>
	<!-- /section -->
	</main>


<script type="text/javascript">
   $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>

<?php get_footer(); ?>
