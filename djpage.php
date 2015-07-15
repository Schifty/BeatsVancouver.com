<?php
/*
Template Name: DJ Page
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
		<div class="CustomPanel">
			<h2 class="ScheduleTitle">Now Playing</h2>
			<iframe src="https://mixlr.com/users/3605375/embed?color=000000&autoplay=true&artwork=false" width="100%" height="180px" scrolling="yes" frameborder="yes" marginheight="1" marginwidth="1"></iframe>
		<hr>
			<p>Stop the music above and search for  track!</p>
			<?php dynamic_sidebar( 'search-widget' );?>
		</div><!--ends panel-->	
	
		<?php dynamic_sidebar( 'countdown1-widget' );?>
	</div>	<!--ends 4columns-->
	
	<div class="small-12 large-8 columns">
		<div class="DJS">
				 <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                    <p><?php the_tags(); ?></p>
                </footer>
            </article>
        <?php endwhile;?>

        <?php do_action( 'foundationpress_after_content' ); ?>
		</div><!--ends djs-->
	</div><!--ends lrge8-->


	</div><!--ends row-->

<div class="row">
<div class="small-12 large-4 large-centered columns">
	
</div>	<!--ends larg3-->
</div><!--ends row-->

<?php get_footer(); ?>
