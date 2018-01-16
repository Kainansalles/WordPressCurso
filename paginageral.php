<?php 
/*
Template Name: Paginas Gerais
*/
 ?>

 <?php get_header(); ?>
<div class="conteudo-wrapper">
	<main>
		<div class="conteudo container">
			<?php // se houver algum post
						if(have_posts()):
							// enquanto houver algum post, chamme o post de determinada maneira
							while(have_posts()):
								the_post(); 
						?>											
							<h1><?php the_title(); ?></h1>
							<p>Author: <?php the_author(); ?></p>
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
	</main>
</div>

<?php get_footer(); ?>
