<?php get_header('header'); ?>
<?php
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$twitter = get_the_author_meta('twitter', $post->post_author);
$facebook = get_the_author_meta('facebook', $post->post_author);
?>


<div class="autor">
<div class="cardAutor">
    <div class="author-photo">
        <?php echo get_avatar($curauth->user_email, '200'); ?>
    </div>
    <div class="detalhesAutor">
        <h2 class="">Conheça <?php echo $curauth->display_name; ?></h2>

        <div class="socialAutor">
            <?php
                if($twitter != null ){
                    echo "<a class='blackear ico' href='https://twitter.com/$twitter' rel='nofollow' target='_blank'><i class='fa fa-twitter-square fa-3x'></i></a>";
                }
                if($facebook != null ){
                    echo "<a class='blackear ico' href='$facebook' rel='nofollow' target='_blank'><i class='fa fa-facebook fa-3x'></i></a>";
                }
            ?>
        </div>
    </div>
</div>
</div>


<h1 class="chamada branquear" style="margin: 1rem;">Posts de <?php echo $curauth->display_name; ?></h1>
<div class="arquivo">


    <?php if (have_posts()) : while (have_posts()) : the_post();
            $imagemPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>


            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="img_archive" id='img_archive' style='background: url(" <?= $imagemPrincipal ?> ");background-size: cover;background-position:center'>
                    <div class="descritionPosition">
                        <div class="PostDescription">
                            <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>

                            <div class="nomeAutor">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <h5 class="chamada chamadaAutor branquear">Escrito por <?= get_the_author_meta('display_name') ?></h5>
                                </a>
                                <h6 class="branquear">Data de publicação: <?php the_time('d M Y'); ?></h6>
                            </div>
                        </div>
                    </div>


                </div>
            </div>






        <?php 
        
        endwhile;


    else : ?>
        <p><?php echo '<p>Nenhum post encontrado</p>'; ?></p>

    <?php endif;
    ?>
        <div class="navPosts">
        <?php posts_nav_link(' ou ', __('Posts Recentes'), __('Posts Antigos')); ?>
        </div>
</div>
    </div>

<?php get_footer('footer'); ?>