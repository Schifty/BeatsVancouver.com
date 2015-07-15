<?php
/*
Template Name: Custom Home
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<div class="slider">
			<?php echo do_shortcode( '[metaslider id=102]' )	 ?>
		</div><!--ends slider-->
	</div>
</div>

<div class="row">

	<div class="small-12 large-4 columns">
		<div class="CustomPanel centered">
			<h3>Live Radio</h3><hr>
			<p>STOP the music by pushing the dancing EQ below on the right</p>
			<iframe src="https://mixlr.com/users/3605375/embed?color=000000&autoplay=true&artwork=false" width="100%" height="180px" scrolling="yes" frameborder="yes" marginheight="1" marginwidth="1"></iframe>
		
			<?php dynamic_sidebar( 'search-widget' );?>
		</div><!--ends panel-->	
	</div>	<!--ends 4columns-->
	
	<div class="small-12 large-8 columns">

		<h4 class="CustomPanel">New Mixes</h4>
						
						<div class="small-6 medium-4 columns hover"> 
						<a href="http://www.beatsvancouver.com/dj/housewreckerz/"><div class="mix-info"><h5>The HouseWreckerz</h5><h6>Live@The Mill</h6></div></a>
						<a href="http://www.beatsvancouver.com/dj/housewreckerz/">
						<img src="http://www.beatsvancouver.com/wp-content/uploads/2015/05/redbutton.png">
						</div><!--ends day-->
						
						<div class="small-6 medium-4 columns hover"> 
						<a href="http://www.beatsvancouver.com/dj/ollie-ple/"><div class="mix-info"><h3>Ollie Plé</h3><h6>Future vs Ghetto</h6></div></a>
						<a href="http://www.beatsvancouver.com/dj/ollie-ple/">
						<img src="http://www.beatsvancouver.com/wp-content/uploads/2015/05/greenbutton.png"></a>
						</div><!--ends large-4-->
						
						<div class="small-6 medium-4 columns hover"> 
						<a href="http://www.beatsvancouver.com/dj/digital-twitch/"><div class="mix-info"><h4>Digital Twitch</h4><h6>Live@Harrison</h6></div></a>
						<a href="http://www.beatsvancouver.com/dj/digital-twitch/">
						<img src="http://www.beatsvancouver.com/wp-content/uploads/2015/05/bluebutton.png"></a>
						</div><!--ends panel-->
					
			
						<div class="small-6 medium-4 columns hover"> 
						<a href="http://www.beatsvancouver.com/dj/decibal-empire/"><div class="mix-info"><br><h5>Decibal Empire</h5></div></a>
						<a href="http://www.beatsvancouver.com/dj/decibal-empire/">
						<img src="http://www.beatsvancouver.com/wp-content/uploads/2015/05/yellowbutton.png">
						</div><!--ends day-->
						
						<div class="small-6 medium-4 columns hover"> 
						<a href="http://www.beatsvancouver.com/dj/average-gypsy/"><div class="mix-info"><h5>Average Gypsy</h5><h6>Live@Where Its At Boat Party</h6></div></a>
						<a href="http://www.beatsvancouver.com/dj/average-gypsy/">
						<img  src="http://www.beatsvancouver.com/wp-content/uploads/2015/05/whitebutton.png">
					    </div><!--ends panel-->
					
						<div class="small-6 medium-4 columns hover"> 
						<a href="http://www.beatsvancouver.com/dj/zac-moore-the-armory/"><div class="mix-info"><h5>Zac Moore</h5><h6>The Armory with Guests</h6></div></a>
						<a href="http://www.beatsvancouver.com/dj/zac-moore-the-armory/">
						<img src="http://www.beatsvancouver.com/wp-content/uploads/2015/05/pinkbutton.png">
						</div><!--ends day-->
			
		</div>				
		</div><!--ends row-->

<div class="row">
	<div class="small-12 large-12 columns">

			<div class="CustomPanel left">
				<h4>Just To Let You Know!!</h4>
				<p>Welcome to Beats Vancouver! We currently under construction but want to provide you with the best local and international
				DJ talent in the Vancouver area. Our live radio broadcast 24 hours a day 7 days a week featuring A wide assortment of  
				podcasts and events downtown. The perfect way for the non-clubber  to enjoy great tunes from awesome DJ's Live. #soundcloudalternative</p>
				</div><!--ends pane-->
			
	</div><!--ends larg8-->
 <div class="row">
 
	<div class="small-12 medium-4 columns hover">	
			<a href="http://www.beatsvancouver.com/event/electric-love-music-festival/"><?php dynamic_sidebar( 'countdown1-widget' );?></a>	
	</div><!--ends larg-12-->
	
	<div class="small-12 medium-4 columns hover">	
			<a href="http://www.beatsvancouver.com/event/shambhala-music-festival-2015/"><?php dynamic_sidebar( 'countdown3-widget' );?></a>
	</div><!--ends larg-12-->
	
	<div class="small-12 medium-4 columns hover">	
			<a href="http://www.beatsvancouver.com/event/bass-fest/"><?php dynamic_sidebar( 'countdown2-widget' );?>	
	</div><!--ends larg-12-->
	
</div>	<!--ends row-->
	
</div><!--ends row-->
</div>
<?php get_footer(); ?>
