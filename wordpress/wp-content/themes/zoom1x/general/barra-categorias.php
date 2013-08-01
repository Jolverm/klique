<!-- inicia ImagenesCategorias -->
<aside class="imagenesCategorias">
<?php $contador = 0; ?>
<?php $categorias = array('alimentos', 'industria', 'producto', 'retrato', 'espectaculos-y-deportes'); ?>
<?php foreach ($categorias as $categoria) { ?>
    <div class="imgCategorias <?php echo ($contador == 0)? 'imgCategoriasUno' : ''; ?>">
        <a href="<?php bloginfo('wpurl'); ?>/category/<?php echo $categoria; ?>" rel="tag">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/categorias/<?php echo $categoria; ?>.jpg" alt="<?php echo ucfirst($categoria); ?>" title="<?php echo ucfirst($categoria); ?>" />
        </a>
    </div>
    <?php $contador++; ?>
<?php } ?>
</aside> <!-- termina ImagenesCategorias -->