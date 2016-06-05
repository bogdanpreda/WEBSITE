
<?php get_header(); ?>
<div class="content" >
<div class="row">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-8 justify">
				<h3><?php the_title(); ?></h3>
						
						<?php 
							if ( has_post_thumbnail() ) {
    							$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );
    					    	echo '<img width="100%" src="' . $image_src[0] . '">';
							}
						 ?>
						<p class="justify"><?php the_content(); ?></p>
					</div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<h3>Postarea nu a fost gasita</h3>
		<?php endif; ?>
					
					<div class="col-md-4 aside">
						<?php get_sidebar(); ?>
					</div>
				</div>
							<div class="separator"></div>
				
			</div>

		</div>

<?php get_footer(); ?>