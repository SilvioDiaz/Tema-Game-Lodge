<?php get_header('header'); 



if (isset($_GET['s'])){

    $chamada_de_pagina = "Resultado para Pesquisa: " . $_GET['s'];

}else{

    $chamada_de_pagina = get_the_category( $id )[0]->name;

}

?>





<h1 class="chamada branquear categoriaChamada" style="margin: 1rem;"><?=$chamada_de_pagina?></h1>



<div class="arquivo">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

    $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

?>





<div class="col-sm-12 col-md-6 col-lg-6">

    <div class="img_archive" id='img_archive' style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover;background-position:center'>

    <div class="descritionPosition">

        <div class="PostDescription">

            <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>

            <div class="nomeAutor">

            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h5 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h5></a>

            <h6 class="branquear">Data de publicação: <?php the_time('d M Y'); ?></h6>

            </div>

        </div>

</div>

                    

                    

    </div>

</div>













<?php endwhile; 

 

 

else: ?>

<p><?php echo('Nenhum post encontrado'); ?></p>

 

<?php endif; ?>



<div class="navPosts">

        <?php posts_nav_link(' ou ', __('Posts Recentes'), __('Posts Antigos')); ?>

        </div>



</div>





<?php get_footer('footer'); ?>