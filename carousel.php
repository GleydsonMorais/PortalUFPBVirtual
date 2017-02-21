				<div id="Conteudo-Carrossel-Noticias">

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

					<ul>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
						</li>									
					</ul>

					<?php } ?>
					
					<div class="clearfix"></div>
					<a id="prev" class="prev" href="#">&lt;</a>
					<a id="next" class="next" href="#">&gt;</a>
					<div id="pager" class="pager"></div>
				</div>