
<?php get_header(); ?>

<!DOCTYPE html>
<html>


<head>
	<title>klique</title>
	<meta charset="utf-8" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" img="all" href="<?php bloginfo( 'template_directory' ); ?>/css/klique.css" />
	<link rel="stylesheet" img="all" href="<?php bloginfo( 'template_directory' ); ?>/css/nivo.css" />
	<link rel="stylesheet" img="all" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css" />

</head>

<body>

  <!-- inicia todo -->
 <div class="todo">
            
 		<?php get_template_part('logo'); ?>

 			   <!-- inicia cajaTodasImagenes -->
           <div class="cajaTodasImagenes">

           		<div>
           		
           		<?php if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?>

           		</div>
                
                
               
                <?php get_template_part('categorias'); ?>
                