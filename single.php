<?php get_header('header'); ?>

<?php while (have_posts()) : the_post(); ?>



    <?php

    $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');

    $category = get_the_category();

    $cat_id = $category[0]->term_id;

    $cat_name = $category[0]->name;

    $cat_link = get_category_link($cat_id);



    if (get_fields()) {
        $review = get_fields();
    } else {
    }

    ?>
    <div class='article-feed'>

        <div class="thumbPost" id='thumbPost' style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover'>

            <div class="tituloPost">

                <h1><?php the_title(); ?></h1>

                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">

                    <h6 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h6>

                </a>

                <a href="<?php echo $cat_link ?>">

                    <h6> <?= $cat_name ?> </h6>

                </a>



            </div>

        </div>

        <div class="post">
            <div class=" paginacritica row">
                <div class="col-sm-12 col-md-12 col-lg-5 areaPost">



                    <div id class="conteudo"> <?php $verificador = the_content(); ?></div>

                </div>
                <?php 

if(get_fields()){

?>
 <div class="col-sm-12 col-md-12 col-lg-3 areaCritica">
    <div class="critica">

        <h5>Nome do jogo:</h5> <p><?=$review['nome_do_jogo:']?></p>

        <h5>Publisher:</h5> <p><?=$review['publisher:']?></p>

        <h5>Desenvolvedora:</h5> <p><?=$review['desenvolvedora:_']?></p>

        <div>
        <h5>Plataformas Disponívies:
        <?php    

        echo "<p>";
        $numItems = count($review['plataforma']);
        $i = 0;
        $virgula = ",";
        foreach($review['plataforma'] as $plataformas){
     
            if(++$i === $numItems) {
                $virgula = "";
            }
            echo $plataformas. $virgula;
        }
        "</p>";
        ?>
        </div>
        </h5>
        <?php
            if ($review['key_recebida'] == 1){
                echo "<p>Está crítica foi escrita usando uma key enviada para o Game Lodge</p>";
            } 
        }else{


        }

        ?>

    </div>
</div>

</div>
              
        </div>

  
    </div>










    </div>




<?php endwhile;

?>


</div>


<?php get_footer('footer'); ?>