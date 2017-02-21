<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	
	<head>
		
		<meta charset="<?php bloginfo('charset'); ?>" >
		<title><?php wp_title('-',true,'right'); bloginfo(); ?></title>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />

		<!--Inicio Parametros Carousel-->
		<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/functioncarousel.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			$(function() {
				$('#Conteudo-Carrossel-Noticias').carouFredSel({
					width: 900,
					height: '100%',
					direction: 'up',
					items: 1,
					scroll: {
						duration: 1000,
						onBefore: function( data ) {
							data.items.visible.children().css( 'opacity', 0 ).delay( 200 ).fadeTo( 400, 1 );
							data.items.old.children().fadeTo( 800, 0 );
						}
					}
				});
			});
		</script>
		<!--Fim Parametros Carousel-->

		<!--Inicio Paramentros Carousel Barra Lateral-->
        <script src="<?php bloginfo('template_url'); ?>/js/functioncarouselbarralateral.js"></script>
		<!--Fim Paramentros Carousel Barra Lateral-->

		<?php wp_head(); ?>
	</head>

	<body>
		
		<div id="Topo"><!--Inicio Topo-->

			<div id="Topo-MEC"><!--Inicio Topo-MEC-->

				<a href="http://www.brasil.gov.br"><img class="govbra" src="<?php bloginfo('template_url'); ?>/images/logo-govbra.png" alt="" title="Brasil - Governo Federal"></a>
				<a href="http://www.acessoainformacao.gov.br/"><img class="miniedu" src="<?php bloginfo('template_url'); ?>/images/logo-miniedu.png" alt="" title="Acesso à Informação"></a>
			</div><!--Fim Topo-MEC-->
			
			<div id="Topo-Logo"><!--Inicio Topo-Logo-->

				<!--MUDAR LINK-->
				
				<a href="#" title=""><img src="<?php bloginfo('template_url'); ?>/images/topo-ufpbvirtual.png" rel="" title="UFPB - Virtual"></a>

				
			</div><!--Fim Topo-Logo-->

			<div id="Topo-Menu"><!--Inicio Topo-Menu-->

				<div id="Topo-Menu-Menu"><!--Inicio Topo-Menu-Menu-->

					<ul>
							
						<li><a href="<?php bloginfo('home'); ?>">Início</a></li>
						<?php // wp_list_pages('title_li=&depth=2&'.$page_sort.'&'.$pages_to_exclude); ?> <!--Lista dinamicamente todas as paginas criadas no Woordpress -->

						<?php 

							if(has_nav_menu('top-pages-menu')){

								wp_nav_menu(array('theme_location' => 'top-pages-menu'));
							} else {

								wp_list_pages();
							}
						?>
						
					</ul>
				</div><!--fim Topo-Menu-Menu-->
			</div><!--Fim Topo-Menu-->
		</div><!--Fim Topo-->