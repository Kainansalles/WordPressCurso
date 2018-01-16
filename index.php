<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide container">Slide</section>
		<section class="servicos container">Serviços</section>
		<section class="meio container">
			<aside class="barra-lateral col-md-3">Barra Lateral</aside>
			<div class="noticias col-md-9">
				<?php // se houver algum post
					if(have_posts()):
						// enquanto houver algum post, chamme o post de determinada maneira
						while(have_posts()):
							the_post(); 
					?>											
						<h1><?php the_title(); ?></h1>
						<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
						<p>Categorias: <?php the_category(' '); ?></p>
						<p>Tags: <?php the_tags('Tags: ', ', '); ?></p>
						<p><?php the_content(); ?></p>
				<?php 
				endwhile;
				else:					
				?>
					<p>Não tem nada pra mostrar</p>
				<?php 
				endif;
				?>
			</div>
		</section>
		<section class="mapa container">Mapa</section>
	</main>
</div>

<?php get_footer(); ?>
