
<?php get_header(); ?>
<div class="content" >
<div class="row">
<div class="col-md-8 justify">

<h1 class="title"><?php the_category( ' '); ?></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			
				
				<div class="media">
						<?php if( has_post_thumbnail() ): ?>
							<a class="pull-left" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(array(290,175)); ?>
							</a>
						<?php else: ?>
							<a class="pull-left" href="<?php the_permalink(); ?>">
								<img class="media-object" style="width: 290px;height: 175px;" src="<?php echo get_template_directory_uri(); ?>/images/college.png">

							</a>

						<?php endif; ?>
							<div class="media-body">
								<h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h4>
								<p>
								<?php the_excerpt(); ?>
								</p>
								<a class="more" href="<?php the_permalink(); ?>">Read More +</a>
							</div>
				</div>
				<div class="clearfix"></div>

					
		<?php endwhile; ?>
		<!-- post navigation -->
		
		<div class="anterior"><?php previous_posts_link( '<< Pagina anterioara' ); ?></div>
		<div class="urmator"><?php next_posts_link( 'Pagina urmatoare >>' ); ?></div>
		<?php else: ?>
		<h2>Niciun rezultat gasit</h2>
                    <p><a style="color:black;" href="<?php echo home_url(); ?>">Mergi pe pagina principala</a></p>
		<?php endif; ?>
					</div>
					<div class="col-md-4 aside">
						<?php get_sidebar(); ?>
					</div>
	 			</div>
							<div class="separator"></div>
				
			</div>

		</div>

<?php get_footer(); ?>