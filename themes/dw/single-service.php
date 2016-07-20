<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dynamic_Winners
 */
 
get_header();

$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
$thumbnail_small = wp_get_attachment_image_src($thumbnail_id, 'grid-small');
$thumbnail_medium = wp_get_attachment_image_src($thumbnail_id, 'grid-medium');
?>


<section class="featured-image">
	<div class="featured-image__overlay"></div>
</section>

	<!-- PRIMARY SECTION
	========================================================= -->
	<div class="band band--primary">
		<main id="content" class="section">

			<!-- POST
			========================================================= -->
			<article class="post">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img alt="" srcset="http://placehold.it/260x195?text=4:3 260w, http://placehold.it/240x180?text=4:3 240w, , http://placehold.it/1000x750?text=4:3 1000w" sizes="(min-width: 480px) 50vw, 100vw" class="post__main-photo img-fluid">
						</div><!-- col -->
						<div class="col-md-6">
							<header class="post__header">
								<p class="post__category">/ SERVIÇOS</p>
								<h3 class="post__title"><?php the_title(); ?></h3>
								<p class="post__date"><?php the_date('j F Y'); ?></p>
							</header><!-- post-header -->
							<div class="post__body"><?php the_content(); ?></div><!-- post-body -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->
			</article><!-- post -->

			<?php  $all_services = dynamic_get_all_services(array(get_the_ID())); 

			?>
			<!-- LATEST POSTS
			========================================================= -->
			<section id="latest-posts" class="band section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-9 col-md-offset-2 col-lg-6 col-lg-offset-6 box-right">
							<div class="slider">
								<?php while( $all_services->have_posts() ) : $all_services->the_post(); ?>
									
									<div class="slider__item">
										<article class="entry entry--latest">
											<p class="entry__date"><?php the_date('j F Y'); ?></p>
											<h2 class="entry__title"><?php the_title(); ?></h2>
											<a href="" class="entry__read-more">Ver mais</a>
										</article><!-- entry -->
									</div><!-- slider__item -->
								<?php
								endwhile;
								wp_reset_postdata();
								?>		
			
							</div><!-- slider -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->
			</section><!-- latest-posts -->
		</main><!-- content -->
	</div><!-- band--primary -->

<?php
get_template_part( 'template-parts/singles', 'footer' );
get_footer();