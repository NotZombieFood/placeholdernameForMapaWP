<section id="tuitea-archive-titulo">
	<h1>¡Tuiteale!</h1>
	<h2>Conoce las últimas peticiones que se han hecho mediante tuits</h2>
</section>
<section id="tuits-archive-posts">
	<div class="container">
		<div class="row text-center">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-6">
					<div class="archive-posts-singles">
					<h1><?php the_title(); ?></h1>
					<p>
						<?php the_content(); ?>
					</p>
					<a href="<?php echo get_permalink(); ?>">Participar</a>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</section>
<section id="tuitea-archive-titulo">
	<h2>¿Quieres crear una petición usando tuitea?</h2>
	<br><br>
	<a href="<?php echo get_site_url(); ?>/contacto">¡Cuéntanos más!</a>
</section>