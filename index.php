
<?php get_header(); ?>
<div class="container">
<!-- <h1>This is the index</h1> -->

<?php 
	

	 if( have_posts() ):
		
		while( have_posts() ): the_post(); 
	?>

		<?php 

		//get_template_part('content') 
		?>

		<?php 
	endwhile;
		
	endif;
			
	?>

<?php 
get_footer(); 
?>