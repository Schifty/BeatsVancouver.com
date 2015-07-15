<?php
/*
Template Name: MP3 Page
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<div class="slider">
			<?php echo do_shortcode( '[metaslider id=102]' )	 ?>
		<div><!--ends slider-->
	</div>
</div>

<div class="row">

	<div class="small-12 large-4 columns">
		<div class="panel left">
			<h2 class="ScheduleTitle">Now Playing</h2>
			<iframe src="https://mixlr.com/users/3605375/embed?color=000000&autoplay=true&artwork=false" width="100%" height="180px" scrolling="yes" frameborder="yes" marginheight="1" marginwidth="1"></iframe>
		<hr>
		<p>Stop the music above and search for  track!</p>
		<?php dynamic_sidebar( 'search-widget' );?>
		<hr>
		
		
		<img style="border: 3px solid grey; border-radius: 25px; z-index: -1;"src="http://www.beatsvancouver.com/wp-content/uploads/2015/05/electricloveflyer.jpg">	
		<div style="margin-top:-30px;">
		<?php dynamic_sidebar( 'countdown1-widget' );?>
		</div><!--ends event-->
		
			
		
		
		</div><!--ends panel-->	
	</div>	<!--ends 4columns-->
	
	<div class="small-12 large-7 columns">
		<div class="panel">
		<div class="MP3S">
		<?php /* Start loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<header>
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
					
							
						</article>
					<?php endwhile; // End the loop ?>
		</div><!--ends djs-->
		</div><!--ends panel-->
	</div><!--ends lrge8-->


	</div><!--ends row-->

<div class="row">
<div class="small-12 large-4 large-centered columns">
	
</div>	<!--ends larg3-->
</div><!--ends row-->

<?php get_footer(); ?>
