<!-- inicia ImagenesCategorias -->
<div class="imagenesCategorias"> 
    <?php $args = array(
        'type'                     => 'post',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'category',
        'pad_counts'               => false );
    ?>
    <?php $categories = get_categories( $args ); ?>
    <div class="imgCategorias imgCategoriasUno">
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/paisaje.jpg" alt="#" title="#" />
    </div>
    <div class="imgCategorias">
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/paisaje.jpg" alt="#" title="#" />
    </div>
    <div class="imgCategorias">
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/paisaje.jpg" alt="#" title="#" />
    </div>
    <div class="imgCategorias">
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/paisaje.jpg" alt="#" title="#" />
    </div>
    <div class="imgCategorias">
        <img src="<?php bloginfo( 'template_directory' ); ?>/img/paisaje.jpg" alt="#" title="#" />
    </div>
</div> <!-- termina ImagenesCategorias -->
