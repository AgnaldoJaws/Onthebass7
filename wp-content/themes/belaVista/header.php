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
.carousel-inner>.item>img, .carousel-inner>.item>a>img {
	width:100%;
	height: 325px;
}
</style>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar"
	data-offset="60">



	<header id="header" class="container">
		<div class="content">
			<div class="logo1">



				<a href="<?php echo get_option('home');?>"> <img
					src="http://onthebass.com.br/logo.png" class="img-responsive"></a>


			</div>

			<div class="logo2">

				<div class="panel-body">

					<div class="search-form-container">
					<?php get_search_form(); ?>
				   </div>


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
								<li><a href="#novidade" data-scroll>Novidades</a></li>	
								<li><a href="#servicos" data-scroll>Servicos</a></li>
								<li><a href="#localizacao" data-scroll>localizacao</a></li>									
								<li><a href="#contato">Contato</a></li>
								


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
		<div id="subRow" class="col-md-8">

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
						<img src="http://onthebass.com.br/img2.jpg" class="img-responsive"
							alt="Chania">
						<div class="carousel-caption">
							<h2>Agnaldo</h2>
							<h4>The atmosphere in Chania has a touch of Florence and Venice.</h4>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img4.jpg" alt="Chania">
						<div class="carousel-caption">
							<h2>Chania</h2>
							<h4>The atmosphere in Chania has a touch of Florence and Venice.</h4>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img2.jpg" alt="Flower">
						<div class="carousel-caption">
							<h2>Flowers</h2>
							<h4>Beatiful flowers in Kolymbari, Crete.</h4>
						</div>
					</div>

					<div class="item">
						<img src="http://onthebass.com.br/img3.jpg" alt="Flower">
						<div class="carousel-caption">
							<h2>Flowers</h2>
							<h4>Beatiful flowers in Kolymbari, Crete.</h4>
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

	

	
	<section id="novidade">
		
		<div class="row">

			<div class="col-md-8" id="row_sidebar">
				
	 <?php $aRecentPosts = new WP_Query("showposts=3"); 
       while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?>			
				<div class="panel panel-default">
							<div class="panel-body">

								<div class="title">
									<h3><?php the_title();?></h3>
								</div>

								<div class="imagem">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(750,750))?></a>
								</div>


								<div class="texto">
								<?php the_excerpt();?>	
								</div>

								<div class="pub">
									<h5>
						Publicado por <?php the_author()?>
						 em <?php the_date("d/m/Y")?>
				- <?php comments_number("Nenhum Comentário","1 Comentário","% comentários")?>
				
				</h5>
								</div>


								<a href="<?php the_permalink(); ?>">
									<a href="<?php the_permalink();?>" class="btn btn-success" role="button">Continuar Lendo</a>
								</a>
							</div>
						</div>
				
				
				<?php endwhile; ?> 
				
							
				
				
	         </div>
				</div>
			
	</section>
	
<section id=""></section>
<section id=""></section>
<section id=""></section>
<section id="sobre"></section>
<section id="servicos"></section>
<section id="contato">
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
</section>
<section id="localizacao">
<iframe src="https://mapsengine.google.com/map/embed?mid=zbUwcYnYwKvU.kzJUOnvw5vMY" width="100%" height="570"></iframe>

</section>



<?php wp_footer();?>


	