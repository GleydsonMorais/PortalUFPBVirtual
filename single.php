<?php get_header(); ?>

		<div id="Conteudo"><!--Inicio Conteudo-->

			<div id="Conteudo-Paginas"><!--Inicio Conteudo-Paginas-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->
				<!--Conteudo PAGINA-->


				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			            
			            <h3><?php the_title(); ?></h3><br>  
		                <p><?php the_content(); ?></p>  
		        <?php endwhile; else: ?>
		                      
		        <?php endif; ?>	


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