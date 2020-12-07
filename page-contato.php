<?php

/* Template Name: Contato */

?>





<?php get_header('header'); ?>



<div class="contato">

    



    <div class="contatoEmail">



    <h3 class="branquear">Entre em contato: </h3>

    <h3><a class='' href="mailto:contato@gamelodge.com.br" data-rel="external">Clique aqui</a></h3>

    <div class="socialFooter">

      <a class='branquear ico' href='https://twitter.com/gamelodgebr' rel='nofollow' target='_blank'><i class='fa fa-twitter-square fa-3x'></i></a>

      <a class='branquearico' href='https://www.facebook.com/GameLodgeBR' rel='nofollow' target='_blank'><i class='fa fa-facebook fa-3x'></i></a> 

      <a class='branquear ico' href='https://www.twitch.tv/gamelodgebr' rel='nofollow' target='_blank'><i class="fa fa-twitch fa-3x"></i></a>

    </div>





    

    </div>







    <div class="autoresContato">

    <h2 class="branquear" style="text-align: center;">Conheça nossos colaboradores</h2>

        <div class="autoresLista">

            <?php

                $users = get_users(['role__in' => ['Contributor','Administrator','Editor','Author']]);

                foreach( $users as $user ){

                    $ids[] = $user->ID;

                }

                while($autores = wp_list_authors( array('order' => 'DESC','include' => $ids))){

                    print_r($autores['display_name']);

                }

                

                

            ?>

        </div>

    </div>



</div>





<?php get_footer('footer'); ?>