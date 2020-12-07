<?php get_header('header'); ?>

<!-- Destaque -->
<div class="col-sm-12 col-md-12 col-lg-12 toCol">
    <?php
    $query = new WP_Query(array('posts_per_page' => 1, 'category__not_in' => array(2, 472)));

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();

            $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

    ?>

            <div class="postPrincipal" id='postPrincipal' style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover;background-position:center'>
                <div class="esquerdar">
                    <div class="descritionPosition">
                        <div class="PostDescription">
                            <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                            <div class="nomeAutor">
                               <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h6 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6></a>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endwhile;




    else :
        echo '<p>Não temos posts</p>';
    endif;
        ?>

            </div>
</div>
<!-- Críticas -->
<div class="row slideSpace">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <a href="http://gamelodge.com.br/category/critica/"><h1 class="branquear chamada">Críticas</h1></a>
        <div class="owl-carousel">

            <?php
            $query = new WP_Query(array('posts_per_page' => 6, 'category__in' => 4,));
        
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

            ?>

                    <div class="tableCaption">
                        <div class="slideIMG"><img src="<?= $imagemPrincipal ?>"></div>
                        <div class="tituloCartao">

                            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <div class="nomeAutor">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h6 class="chamada  chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6></a>
                            </div>

                        </div>
                    </div>

            <?php endwhile;




            else :
                echo '<p>Não temos posts</p>';
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Jogo da Semana -->
<div class="row espacoNoticia">
    <div class="col-sm-12 col-md-8 col-lg-8">
        <a href="#"><h1 class="branquear chamada">Notícias da Semana</h1></a>
        <?php
        $query = new WP_Query(array('posts_per_page' => 1, 'category__in' => 606));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();

                $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

        ?>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div id='imgJogo_Semana' class="imgJogo_Semana postPrincipal" style='background: url(" <?= $imagemPrincipal ?>");background-size: cover'>
                            <div class="esquerdar">
                                <div class="descritionPosition">
                                    <div class="PostDescription">
                                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endwhile;




        else :
            echo '<p>Não temos posts</p>';
        endif;
        ?>
    </div>
    <!-- Notícia -->
    <div class="col-sm-12 col-md-4 col-lg-4">
        <a href="#"><h1 class="branquear chamada">Stories</h1></a>
        <div class="areaNoticia">
            <?php
            $query = new WP_Query(array('posts_per_page' => 3, 'post_type' => 'web-story'));

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

            ?>

                    <div id='imgNoticia' class="imgNoticia" style='background: url(" <?= $imagemPrincipal ?>");background-size: cover'>
                        <div class="esquerdar">
                            <div class="descritionPosition">
                                <div class="PostDescription noticiaDescription">
                                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                                </div>
                            </div>
                        </div>
                    </div>


            <?php endwhile;




            else :
                echo '<p>Não temos posts</p>';
            endif;
            ?>
            
        </div>
    </div>
</div>
<!-- Reportagem -->

<div class="col-sm-12 col-md-12 col-lg-12 toCol reportagemEspacamento">
    <?php
    $query = new WP_Query(array('posts_per_page' => 1, 'category__in' => 5));

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();

            $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

    ?>

            <div class="postPrincipal" id='postReportagem' style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover;background-position:center'>
                <div class="esquerdar">
                    <div class="descritionPosition">
                        <div class="PostDescription">
                            <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                            <div class="nomeAutor">
                            <a class="chamada" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h6 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6></a>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endwhile;




    else :
        echo '<p>Não temos posts</p>';
    endif;
        ?>

            </div>
</div>


<!-- Colunas -->

<!-- Indicações -->

<div class="row slideSpace">

    <div class="col-sm-12 col-md-12 col-lg-12">
        <a href="http://gamelodge.com.br/category/indicacao/"><h1 class="branquear chamada">Indicações</h1></a>
        <div class="owl-carousel">

            <?php
            $query = new WP_Query(array('posts_per_page' => 6, 'category__in' => 165));

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

            ?>

                    <div class="tableCaption">
                        <div class="slideIMG"><img src="<?= $imagemPrincipal ?>"></div>
                        <div class="tituloCartao">

                            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <div class="nomeAutor">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h6 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6></a>
                            </div>

                        </div>
                    </div>

            <?php endwhile;




            else :
                echo '<p>Não temos posts</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<!-- Podcast -->
<div class="offlodgeEspaco">

<a href="#"><h1 class="chamada offlodgeChamada">Podcast</h1></a>
    <div class="row">
        <?php
        $query = new WP_Query(array('posts_per_page' => 3, 'category__in' => 472));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();



                $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

                if ($query->current_post == 0) {
                    $my_class = ' first'

        ?>

                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div id='imgJogo_Semana' class="imgJogo_Semana postPrincipal" style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover;background-position:center'></div>


                        <div class="PostDescription">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                            <div class="nomeAutor">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h6 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="areaOfflodge">
                        <?php
                    } else {

                        ?>

                                <div id='imgOfflodge_lateral' class="imgOfflodge_lateral" style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover;background-position:center'>
                                    <div class="esquerdar"></div>
                                    <div class="descritionPosition">
                                        <div class="PostDescription offDescription">
                                            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                            <div class="nomeAutor">
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h6 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>






<?php
                    }
                endwhile;




            else :
                echo '<p>Não temos posts</p>';
            endif;
?>
</div>
</div>
</div>
</div>

<!-- Opinião-->
<div class="col-sm-12 col-md-12 col-lg-12 postsFinais">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
        <a href="http://gamelodge.com.br/category/opiniao/"><h1 class="branquear chamada">Opinião</h1></a>
            <?php
            $query = new WP_Query(array('posts_per_page' => 1, 'category__in' => 6));

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

            ?>

                    <div id='imgOpiniao' class="postPrincipal imgPosts_finais" style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover'>

                        <div class="esquerdar">
                            <div class="descritionPosition">
                                <div class="PostDescription">
                                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                    <div class="nomeAutor">
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h6 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;




            else :
                echo '<p>Não temos posts</p>';
            endif;
            ?>
        </div>
        <!-- Guia -->
        <div class="col-sm-12 col-md-4 col-lg-4">
        <a href="http://gamelodge.com.br/category/guia/"><h1 class="branquear chamada">Guias</h1></a>
            <?php
            $query = new WP_Query(array('posts_per_page' => 1, 'category__in' => 100));

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

            ?>


                    <div id='imgGuia' class="postPrincipal imgPosts_finais" style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover'>


                        <div class="esquerdar">
                            <div class="descritionPosition">
                                <div class="PostDescription">
                                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                    <div class="nomeAutor">
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <h6 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            <?php endwhile;




            else :
                echo '<p>Não temos posts</p>';
            endif;
            ?>
        </div>
    </div>

</div>




</div>
</div>



<?php get_footer('footer'); ?>