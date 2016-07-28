<?php

	$sponsors = dw_get_all_sponsors();

?>
<section id="partners" class="band section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-10 col-lg-offset-1">
				<div class="section__header">
					<h2 class="heading"><?php esc_html_e( 'Partners', 'dw' ); ?></h2>
				</div><!-- section__header -->
				<div class="slider">
					<div class="slider__item">
						<?php while( $sponsors->have_posts() ) : $sponsors->the_post(); ?>
							<?php $logo_src = wp_get_attachment_image_url( get_post_thumbnail_id( get_the_ID(), 'full' ) ); 
								//error_log( print_r( $logo_src))
							?>
							<a href="<?php echo get_field('sponsor_link', get_the_ID()); ?>"><img src="<?php echo $logo_src ?>" alt="" /><?php the_title(); ?></a>
						<?php 
						endwhile;
						wp_reset_postdata();
						?>
					</div><!-- slider__item -->
				</div><!-- slider -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- partners -->