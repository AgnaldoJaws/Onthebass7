<?php get_header();?>


<div class="row">
	
	

	<div id ="sorte" class="col-md-8">
		
	 <?php 	if (have_posts ()) : while ( have_posts () ) : 	the_post ();?>	
	 			
				
				<div class="title">
						<h3> <?php the_title();?></h3>
				</div>
  				
  				<div class="img">
  					<?php the_post_thumbnail(array(750,750))?>	
  				</div>	
  				
  					
  					<div class="text">
  					<?php the_content();?>
  					</div>
  					
  				Publicado por <?php the_author()?>
						 em <?php the_date("d/m/Y")?>
				- <?php comments_number("Nenhum Comentário","1 Comentário","% comentários")?>
  				
				
					
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
				
	         
		</div>
	</div>
<?php get_sidebar();?>


