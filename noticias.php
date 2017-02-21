<?php
/*
Template Name: Noticias
*/
?>

<?php get_header(); ?>

		<div id="Conteudo"><!--Inicio Conteudo-->

			<div id="Conteudo-Pagina-Modelos"> <!--Inicio Conteudo-Pagina-Categoria-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->




				<?php 

				/*
				*
				*
				Mudar os ID's das categorias
				*
				*
				*/

				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				query_posts("cat=4&paged=$paged"); //Lista todos os posts da Categoria 4


				if (have_posts()) {
					

					while(have_posts()){ 

						the_post();
					?>

						<div id="Conteudo-Pagina-Modelos-Posts"><!--Inicio Conteudo-Pagina-Modelos-Posts-->

							<div id="Posts-Top">
								
								<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
							</div>

							<div id="Posts-Bottom">
								
								<p><?php the_time('j \d\e F \d\e Y') ?></p>
							</div>					
						</div><!--Fim Conteudo-Pagina-Modelos-Posts-->
					<?php } ?>
				<?php } ?>	




				<!--Conteudo PAGINA MODELO NOTICIAS-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->
				<!--Conteudo PAGINA MODELO NOTICIAS-->
			</div> <!--Fim Conteudo-Pagina-Categoria-->

			<div id="Conteudo-BarraLateral-Paginas"><!--Inicio Conteudo-BarraLateral-Paginas-->
				
				<?php get_sidebar(); ?>
			</div><!--Fim Conteudo-BarraLateral-Paginas-->

			<div id="Listagem-Posts-Paginas"><!--Inicio Listagem-Posts-Paginas-->
						
				<!--Listagem das paginas com as postagens-->
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?> 		
			</div><!--Fim Listagem-Posts-Paginas-->
		</div><!--Fim Conteudo-->

<?php get_footer(); ?>