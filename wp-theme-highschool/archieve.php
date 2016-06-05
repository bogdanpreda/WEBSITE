
<?php get_header(); ?>
<div class="content" >
<div class="row">
<div class="col-md-8 justify">
						<br>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
						<div class="media">
							
							<div class="media-body">
								<div class="blog-header">
									<div class="blog-date">
										<span>
											<?php the_time('F'); ?> <br>
											<?php the_time('j'); ?>
										</span>
									</div>
									<div class="blog-title">
										<h4 class="media-heading"><?php the_title(); ?></h4>
										<ul class="list-inline">
											<li><i class="glyphicon glyphicon-user"></i> By: <?php the_author(); ?></li>
											<li><i class="glyphicon glyphicon-time"></i> <?php the_time('j F Y'); ?></li>
											<li><i class="glyphicon glyphicon-tag"></i> Category: <?php the_category( ', '); ?></li>
										</ul>
									</div>
								</div>
								<?php if( has_post_thumbnail() ): ?>
										<?php the_post_thumbnail(); ?>
								<?php endif; ?> 
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
			
		<?php endwhile; ?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Postari mai vechi' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Postari mai noi' ); ?></div>
		<?php else: ?>
		<h2>Niciun rezultat gasit</h2>
                    <p><a href="<?php echo home_url(); ?>">Mergi pe pagina principala</a></p>
		<?php endif; ?>
					
					<div class="col-md-4 aside">
						<?php get_sidebar(); ?>
					</div>
				</div>
							<div class="separator"></div>
				
			</div>

		</div>

<?php get_footer(); ?>
