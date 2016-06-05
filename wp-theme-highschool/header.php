<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>
		<?php wp_title( '|', true, 'right'); ?>
		<?php bloginfo('name') ?>
	</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&appId=145615788900917&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<div id="top_border">
		<div id="wrapper">
			<div id="header">
				<div class="top row">
					<div class="col-md-5">
						<div class="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-md-3 col-md-offset-3">
						<div class="search">
							<form action="<?php echo home_urL(); ?>/" method="GET" role="form">
							
								<div class="input-group">
									<input type="search" name="s" class="search-input form-control" placeholder="Cauta...">
									<div class="input-group-btn">
										<button type="submit" class="btn">
											<i class="glyphicon glyphicon-search"></i>
										</button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					<ul class="social-list">
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt=""></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt=""></li>
					</ul>
				</div>
				<!--end top -->
				<div class="padding-menu">
					<div class="navigation">

						<nav class="navbar navbar-bg">
							<?php    /**
                    * Displays a navigation menu
                    * @param array $args Arguments
                    */
                    $args = array(
                        'theme_location' => 'header-menu',
                        'menu' => '',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'nav navbar-nav',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => '',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                        'depth' => 0,
                        'walker' => ''
                    );

                    wp_nav_menu( $args ); ?>
						</nav>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			