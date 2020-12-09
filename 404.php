<?php get_header('header'); ?>

<div class="erro404">
    <h1 class="branquear">Erro 404</h1>
    <h2 class="branquear">Ops, parecê que você entrou no Lodge errado</h2>
    <h3 class="branquear">Não temos o post que está tentando entrar :(</h3>

    <a href="<?php echo home_url(); ?>">
		<img id="logo"class = "logo" src= "<?php echo get_template_directory_uri(); ?>/logo/logoclara.svg"> 
		</a> 

</div>
<?php get_footer('footer'); ?>