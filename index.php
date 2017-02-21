<?php get_header(); ?>

		<div id="Conteudo"><!--Inicio Conteudo-->

			<div id="Conteudo-Carrossel"><!--Inicio Conteudo-Carrossel-->
				
				<div id="Conteudo-Carrossel-Noticias"><!--Inicio Conteudo-Carrossel-Noticias-->

					<?php 

					/*
					*
					*
					Mudar os ID's das categorias quando colocar o site no ar
					EM TODAS AS NOTICIAS
					*
					*
					*/
					query_posts('showposts=4&offset=0&cat=4,5,6'); //Exibe as ultimas 4 postagens, de todas as categorias.

					while(have_posts()){ 

						the_post();

					?>

						<div id="Noticia"><!--Noticia1 Carousel-->
							<div>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<div class="text">
									<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
								</div>
							</div>
						</div>

					<?php } ?>

				</div><!--Fim Conteudo-Carrossel-Noticias-->
			</div><!--Fim Conteudo-Carrossel-->
			
			<div id="Conteudo-Noticias"><!--Inicio Conteudo-Noticias-->

				<div id="Conteudo-Noticias-Noticia" class="Noticia-Cima"><!--Inicio Conteudo-Noticias-Noticia1-->

					<?php 

						query_posts('showposts=1&offset=4&cat=4,5,6');

						while(have_posts()){

							the_post();

							$categoria = get_the_category(); //Pega todas as informações da categoria do post
							$nomeCategoria = $categoria[0]->cat_name; //Pega apenas o nome da categoria do post
					?>

							<div id="Conteudo-Noticias-Noticia-Topo"><!--Inicio Conteudo-Noticias-Noticia-Topo-->

								<div id="Conteudo-Noticias-Noticia-Topo-Imagem">
									
									<img src="<?php bloginfo('template_url'); ?>/images/seta-noticias.png" rel="" title="">
								</div>

								<p><?php echo $nomeCategoria; ?></p> <!--Imprime o nome da categoria do post-->
							</div><!--Fim Conteudo-Noticias-Noticia-Topo-->
							<div id="Conteudo-Noticias-Noticia-Conteudo"><!--Inicio Conteudo-Noticias-Noticia-Conteudo-->

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
							</div><!--Fim Conteudo-Noticias-Noticia-Conteudo-->
					<?php } ?>
				</div><!--Fim Conteudo-Noticias-Noticia1-->

				<div id="Conteudo-Noticias-Noticia" class="Noticia-Meio" class="Noticia-Cima"><!--Inicio Conteudo-Noticias-Noticia2-->

					<?php 

						query_posts('showposts=1&offset=5&cat=4,5,6');

						while(have_posts()){

							the_post();

							$categoria = get_the_category(); //Pega todas as informações da categoria do post
							$nomeCategoria = $categoria[0]->cat_name; //Pega apenas o nome da categoria do post
					?>

							<div id="Conteudo-Noticias-Noticia-Topo"><!--Inicio Conteudo-Noticias-Noticia-Topo-->

								<div id="Conteudo-Noticias-Noticia-Topo-Imagem">
									
									<img src="<?php bloginfo('template_url'); ?>/images/seta-noticias.png" rel="" title="">
								</div>

								<p><?php echo $nomeCategoria; ?></p> <!--Imprime o nome da categoria do post-->
							</div><!--Fim Conteudo-Noticias-Noticia-Topo-->
							<div id="Conteudo-Noticias-Noticia-Conteudo"><!--Inicio Conteudo-Noticias-Noticia-Conteudo-->

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
							</div><!--Fim Conteudo-Noticias-Noticia-Conteudo-->
					<?php } ?>
				</div><!--Fim Conteudo-Noticias-Noticia2-->

				<div id="Conteudo-Noticias-Noticia" class="Noticia-Cima"><!--Inicio Conteudo-Noticias-Noticia3-->

					<?php 

						query_posts('showposts=1&offset=6&cat=4,5,6');

						while(have_posts()){

							the_post();

							$categoria = get_the_category(); //Pega todas as informações da categoria do post
							$nomeCategoria = $categoria[0]->cat_name; //Pega apenas o nome da categoria do post
					?>

							<div id="Conteudo-Noticias-Noticia-Topo"><!--Inicio Conteudo-Noticias-Noticia-Topo-->

								<div id="Conteudo-Noticias-Noticia-Topo-Imagem">
									
									<img src="<?php bloginfo('template_url'); ?>/images/seta-noticias.png" rel="" title="">
								</div>

								<p><?php echo $nomeCategoria; ?></p> <!--Imprime o nome da categoria do post-->
							</div><!--Fim Conteudo-Noticias-Noticia-Topo-->
							<div id="Conteudo-Noticias-Noticia-Conteudo"><!--Inicio Conteudo-Noticias-Noticia-Conteudo-->

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
							</div><!--Fim Conteudo-Noticias-Noticia-Conteudo-->
					<?php } ?>
				</div><!--Fim Conteudo-Noticias-Noticia3-->

				<div id="Conteudo-Noticias-Noticia"><!--Inicio Conteudo-Noticias-Noticia4-->

					<?php 

						query_posts('showposts=1&offset=7&cat=4,5,6');

						while(have_posts()){

							the_post();

							$categoria = get_the_category(); //Pega todas as informações da categoria do post
							$nomeCategoria = $categoria[0]->cat_name; //Pega apenas o nome da categoria do post
					?>

							<div id="Conteudo-Noticias-Noticia-Topo"><!--Inicio Conteudo-Noticias-Noticia-Topo-->

								<div id="Conteudo-Noticias-Noticia-Topo-Imagem">
									
									<img src="<?php bloginfo('template_url'); ?>/images/seta-noticias.png" rel="" title="">
								</div>

								<p><?php echo $nomeCategoria; ?></p> <!--Imprime o nome da categoria do post-->
							</div><!--Fim Conteudo-Noticias-Noticia-Topo-->
							<div id="Conteudo-Noticias-Noticia-Conteudo"><!--Inicio Conteudo-Noticias-Noticia-Conteudo-->

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
							</div><!--Fim Conteudo-Noticias-Noticia-Conteudo-->
					<?php } ?>
				</div><!--Fim Conteudo-Noticias-Noticia4-->

				<div id="Conteudo-Noticias-Noticia" class="Noticia-Meio"><!--Inicio Conteudo-Noticias-Noticia5-->

					<?php 

						query_posts('showposts=1&offset=8&cat=4,5,6');

						while(have_posts()){

							the_post();

							$categoria = get_the_category(); //Pega todas as informações da categoria do post
							$nomeCategoria = $categoria[0]->cat_name; //Pega apenas o nome da categoria do post
					?>

							<div id="Conteudo-Noticias-Noticia-Topo"><!--Inicio Conteudo-Noticias-Noticia-Topo-->

								<div id="Conteudo-Noticias-Noticia-Topo-Imagem">
									
									<img src="<?php bloginfo('template_url'); ?>/images/seta-noticias.png" rel="" title="">
								</div>

								<p><?php echo $nomeCategoria; ?></p> <!--Imprime o nome da categoria do post-->
							</div><!--Fim Conteudo-Noticias-Noticia-Topo-->
							<div id="Conteudo-Noticias-Noticia-Conteudo"><!--Inicio Conteudo-Noticias-Noticia-Conteudo-->

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
							</div><!--Fim Conteudo-Noticias-Noticia-Conteudo-->
					<?php } ?>
				</div><!--Fim Conteudo-Noticias-Noticia5-->

				<div id="Conteudo-Noticias-Noticia"><!--Inicio Conteudo-Noticias-Noticia6-->

					<?php 

						query_posts('showposts=1&offset=9&cat=4,5,6');

						while(have_posts()){

							the_post();

							$categoria = get_the_category(); //Pega todas as informações da categoria do post
							$nomeCategoria = $categoria[0]->cat_name; //Pega apenas o nome da categoria do post
					?>

							<div id="Conteudo-Noticias-Noticia-Topo"><!--Inicio Conteudo-Noticias-Noticia-Topo-->

								<div id="Conteudo-Noticias-Noticia-Topo-Imagem">
									
									<img src="<?php bloginfo('template_url'); ?>/images/seta-noticias.png" rel="" title="">
								</div>

								<p><?php echo $nomeCategoria; ?></p> <!--Imprime o nome da categoria do post-->
							</div><!--Fim Conteudo-Noticias-Noticia-Topo-->
							<div id="Conteudo-Noticias-Noticia-Conteudo"><!--Inicio Conteudo-Noticias-Noticia-Conteudo-->

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
							</div><!--Fim Conteudo-Noticias-Noticia-Conteudo-->
					<?php } ?>
				</div><!--Fim Conteudo-Noticias-Noticia6-->
			</div><!--Fim Conteudo-Noticias-->

			<div id="Conteudo-BarraLateral"><!--Inicio Conteudo-BarraLateral-->

				<?php get_sidebar(); ?>				
			</div><!--Fim Conteudo-BarraLateral-->
		</div><!--Fim Conteudo-->

<?php get_footer(); ?>