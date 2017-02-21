<?php get_header(); ?>

		<div id="Conteudo"><!--Inicio Conteudo-->

			<div id="Conteudo-Paginas"><!--Inicio Conteudo-Paginas-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->


				<?php while ( have_posts() ) : the_post(); ?>
									
					<!--<div class="entry-content">-->
										
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					<!--</div> .entry-content -->									
				<?php endwhile; ?>


				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
			</div><!--Fim Conteudo-Paginas-->

			<div id="Conteudo-BarraLateral-Paginas"><!--Inicio Conteudo-BarraLateral-Paginas-->
				
				<?php get_sidebar(); ?>
			</div><!--Fim Conteudo-BarraLateral-Paginas-->
		</div><!--Fim Conteudo-->

<?php get_footer(); ?>