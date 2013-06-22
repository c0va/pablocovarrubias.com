<?php get_header(); ?>
			<?php $about = get_page_by_path('programador-docente-co-fundador-de-hc'); ?>
			<section id="about">
				<h1>Pablo<br />Covarrubias</h1>

				<!-- <h2>ESTA PÁGINA ESTÁ EN CONSTRUCCIÓN</h2> -->
				<h3><?php echo $about->post_title; ?></h3>
				<?php echo apply_filters('the_content', $about->post_content); ?>
			</section>
			<?php
					$args = array(
							'post_type' => 'post',
							'posts_per_page' => 1,
							'numberposts' => 1
						);
					$posts = get_posts($args);
					foreach ($posts as $post): setup_postdata($post);
				?>
			<section id="blog">
				<h2>Archivo<br />Personal</h2>

				<article>
					<h3><?php the_title(); ?></h3>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>;" data-text="<?php the_title(); ?>  <?php the_permalink(); ?>" data-via="cova_kid">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="true" data-width="450" data-show-faces="false"></div>
					<?php
						$id = get_post_thumbnail_id( $post->ID );
						$img = wp_get_attachment_image_src( $id, 'blog', false );

						?>
						<img src="<?php echo $img[0];?>">
					<?php the_content(); ?>

				</article>

				<div class="navigation">
					<?php next_post_link('%link', 'Siguiente') ?> | <?php previous_post_link('%link', 'Anterior') ?>
				</div>
			</section>

			<?php endforeach; ?>
<?php get_footer(); ?>