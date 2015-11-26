<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type"
	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"
	media="screen" />


<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<script src="js/vendors/jquery/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<?php wp_head(); ?>

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 80%;     
      height: 300px;
     
      
  }
  </style>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar"
	data-offset="60">
	
	
	
	<header id="header"class="container">
		<div class="content">
			<div class="logo1">
					
                  		
                  
                  			<a href="<?php echo get_option('home');?>"> <img
						src="http://onthebass.com.br/logo.png" class="img-responsive"></a>
                  		
                    
			</div>
			
			<div class="logo2">
			
			<div class="panel-body">
				
				<form action="">
					<input class="form-control search-container__input" type="text"
						placeholder="Pesquisar no site">
				</form>
			
  					
  						<a href="https://www.facebook.com/belavistaagroecologico/?fref=ts"><img
						src="http://onthebass.com.br/icoFace.png" id="icoFace"
						class="img-responsive"></a> <a href="#"><img
						src="http://onthebass.com.br/icoyoutube.png" id="icoyoutube"
						class="img-responsive"></a> <a href="#"><img
						src="http://onthebass.com.br/icoTw.png" id="icoTw"
						class="img-responsive"></a>
  			</div>
				</div>
			</div>
			
	</header>


	<!-- NAVEGCAO -->
	<div id="navegacao">
		<div class="container">
			<div id="navegacao__content">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed"
								data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1"
								aria-expanded="false">
								<span class="sr-only">Toggle navigation</span> <span
									class="icon-bar"></span> <span class="icon-bar"></span> <span
									class="icon-bar"></span>
							</button>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
							id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo get_option('home');?>">Home
								</a></li>
								<li><a href="#sobre" data-scroll>Sobre</a></li>
								<li><a href="#servicos">Servicos</a></li>
								<li><a href="#produtos">Produtos</a></li>

								<li><a href="#localizacao">Localizacao</a></li>
								<li><a href="#contato">Contato</a></li>
								<li><?php wp_list_categories('title_li=');?> </li>
								

							</ul>


						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>
	<!-- Fim navegação -->




	<div class="row">
		<div id="subRow"class="col-md-8">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="http://onthebass.com.br/img2.jpg" class="img-responsive" alt="Chania">
						<div class="carousel-caption">
							<h3>Agnaldo</h3>
							<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img4.jpg" alt="Chania">
						<div class="carousel-caption">
							<h3>Chania</h3>
							<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img2.jpg" alt="Flower">
						<div class="carousel-caption">
							<h3>Flowers</h3>
							<p>Beatiful flowers in Kolymbari, Crete.</p>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img3.jpg" alt="Flower">
						<div class="carousel-caption">
							<h3>Flowers</h3>
							<p>Beatiful flowers in Kolymbari, Crete.</p>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button"
					data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
					aria-hidden="true"></span> <span class="sr-only">Previous</span>
				</a> <a class="right carousel-control" href="#myCarousel"
					role="button" data-slide="next"> <span
					class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>



		</div>




		<div class="col-md-4">			
						
							 
                               
                                <?php get_sidebar(); ?>
                                
                                
							
						</div>



	</div>

	<div id="space">ag</div>

	<section clasas="head" id="header">
	
		
	</section>

	<section id="sobre">
		<h3>SOBRE</h3>
		<a href="" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>

	<section id="servicos">
		<h3>SERVICOS</h3>
			
							
	        
		
	</section>

	<section id="produtos">
		<h3>PRODUTOS</h3>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>

	<section id="noticias">
		<h3>NOTICIAS</h3>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
			<div class="row">
	
	</section>

	<section id="galeria">
		<h3>GALERIA</h3>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>

	<section id="localizacao">
		
				<h2>Sitio Bela vista</h2>
				<h3>Bairro Rio Branco, Cananeia-SP, proximo a cachoeira do pitu.</h3>
			
		
		</div>

<div id="localizacao" class="row">
	
		<div class="col-md-7">                    
                              
             <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1863271.87898519!2d-48.31813243664412!3d-24.199672839894493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!3m2!1d-23.550519899999998!2d-46.633309399999995!4m5!1s0x94dae4bd9223c3bb%3A0x4f29622104147532!2sCanan%C3%A9ia+-+SP!3m2!1d-25.012545499999998!2d-47.9352728!5e0!3m2!1spt-BR!2sbr!4v1448404790040" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>			
		</div>

		<div class="col-md-5">                    
                  <div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
                                
							
		</div>
		
</div>
		<a href="#myPage" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
	</section>


	<section id="contato">
		<h3>CONTATO</h3>

		<a href="<?php echo get_option('home');?>" title="To Top"> <span
			class="glyphicon glyphicon-chevron-up"></span>
		</a>
		
                              
		
	</section>


<?php wp_footer();?>


	