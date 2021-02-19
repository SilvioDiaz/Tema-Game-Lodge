<html <?php language_attributes(); ?>>

<head>

	<title> <?php wp_title('', true,''); ?> </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<script src="https://use.fontawesome.com/c808556f3f.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Open+Sans:wght@800&display=swap" rel="stylesheet">

	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbranco navbar-light">
	<div id="headerTopdown">
		<a href="<?php echo home_url(); ?>">
		<img id="logo"class = "logo" src= "<?php echo get_template_directory_uri(); ?>/logo/logo.svg"> 
		</a> 
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

		<span class="navbar-toggler-icon"></span>

		</button>



		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav mr-auto">

				<li class="nav-item">

					<a class="nav-link" href= "https://gamelodge.com.br/category/critica/" >Críticas</a>

				</li>

				<li class="nav-item">

					<a class="nav-link" href= "https://gamelodge.com.br/category/reportagens/" >Reportagens</a>

				</li>

				<li class="nav-item">

					<a class="nav-link" href= "https://gamelodge.com.br/category/podcast/" >Podcast</a>

				</li>


				<?php
					if(!wp_is_mobile()){

				?>
				
				<li class="nav-item">

				<a class="nav-link" href= "https://gamelodge.com.br/contato/">Contato</a>

				</li>


				<?php
					}else{

					}
				?>


				<li class="nav-item dropdown">

					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">

							<a class="dropdown-item" href="https://gamelodge.com.br/category/opiniao/">Opinião</a>

							<a class="dropdown-item" href="https://gamelodge.com.br/category/indicacao/">Indicação</a>

							<a class="dropdown-item" href="https://gamelodge.com.br/category/guia/">Guias</a>

							<a class="dropdown-item" href="https://gamelodge.com.br/category/web-stories/" >Notícias</a>

				</li>

			</ul>



			<div id="header-form">

				<?php get_search_form(); ?>

			</div>

		</div>
					<!-- contato no celular -->
		<?php
			if(wp_is_mobile()){
				echo "
				<div class='contato_mobile' style='	display: flex;	justify-content: center;'>
					<h4><a class=' blackear nav-link' href= 'https://gamelodge.com.br/contato/'>Contato</a></h4>
				</div>";
			}else{

			}
		?>
		<div>

		<div id='twitch-embed'></div>

		</div>

		<script>

					(function() {

						// Provide your token, username and channel. You can generate a token
						// here: https://twitchapps.com/tmi/
						const token = 'su967sl96rzxnehxilste0v4zfuqio';
						const username = 'GameLodgeBR';
						const channel = 'gamelodgebr';
						// Instantiate clients.
						const { api, chat } = new TwitchJs({ token, username });
						// Análisar canal
						api.get('streams/198249799', { version: 'kraken' }).then(resposta => {
						if(resposta['stream'] == null){
						}else{
							new Twitch.Embed("twitch-embed",{
							width: 854,
							height: 480,
							channel: "gamelodgebr",
							parent: ["wordpress.gamelodge.com.br", "gamelodge.wordpress.com.br"]
							});
							$("#headerTopdown").css("display","grid");
						}
						});

					})();

				</script>
				 <!-- Load the Twitch embed script -->

				<script src="https://embed.twitch.tv/embed/v1.js"></script>



				<!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->

	</div>

		</nav>

	