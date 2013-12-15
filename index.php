<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My SMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/parallax-slider.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    	<div class="container">

    		<!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="brand">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="#">MySMS </a>
			  </div>
			<!-- Login e Cadastro -->
			  <div class="collapse navbar-collapse pull-right" id="nav-login">
			    <ul class="nav navbar-nav">
			      <li class="dropdown">
		            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Log In <strong class="caret"></strong></a>
		            <div class="dropdown-menu dropMod">
		                <form action="pages/login.php" method="post" class="registration_form"> 
		                    <input type="text" id="email" class="form-control" placeholder="Email" name="e-mail" required autofocus>
					        <input type="password" id="password" class="form-control" name="password" placeholder="Senha" required>
					        <input type="hidden" name="formsubmitted" value="TRUE" />
					        <button id="submitB" class="btn btn-lg btn-primary btn-block" value="Login" type="submit">Entrar</button>
		                </form> 
		            </div>
		          </li>
				  <li><a href="pages/signup.php">Cadastre-se</a></li>
			    </ul>
			  </div><!-- /.navbar-collapse -->

			</div>

		</nav>

			<!--=== Slider ===-->
			<div class="slider-inner">
			    <div id="da-slider" class="da-slider">
			        <div class="da-slide">
			            <h2><i>
							MySMS
						</i></h2>
			            <p>
							<i>Envie mensagens para várias pessoas</i><br/>
							<i>de forma rápida e fácil. O cadastro é gratuito.</i><br/>
							<i>Entre agora e começe a enviar mensagens.</i><br/>
						</p>
			            <div class="da-img span6">
			                <div class="span6">
			                    <img src="assets/images/SMS-marketing1.jpg">
			                </div>
			            </div>
			        </div>

			        <div class="da-slide">
			            <h2><i>Diferentes finalidades</i></h2>
			            <p>
							<i>O MySMS pode ser utilizado para enviar mensagens que, em geral, são enviadas frequentemente </i><br/>
							<i>ou em SMS Marketing, podendo ter um maior alcance.</i>
						</p>
			        </div>
			        <nav class="da-arrows">
			            <span class="da-arrows-prev"></span>
			            <span class="da-arrows-next"></span>		
			        </nav>
			    </div><!--/da-slider-->
			</div><!--/slider-->
			<!--=== End Slider ===-->
			

			    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Sobre</h2>
          <p>O MySMS é uma ferramenta que permite criar mensagens e enviá-las para vários contatos.
			Esses contatos podem ser separados em grupos pelo usuário e as mensagens criadas são salvas de forma
			que possam ser editadas ou enviadas quando quiser.
		  </p>
        </div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
          <h2>SMS Marketing</h2>
          <p>Devido ao grande alcance oferecido pelos dispositivos móveis, é comum empresas enviarem mensagens com informações sobre promoções.
			Com o MySMS, você pode utilizar essa estratégia em favor do seu negócio.
		  </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2>Cadastro</h2>
          <p>O cadastro é rápido, fácil e gratuito. Entre e comece já a aproveitar os serviços do MySMS.
		  </p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- FOOTER -->
      <footer>
        <p>&copy; 2013 UFRN, ECT</p>
      </footer>

    </div><!-- /.container -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/parallax/js/jquery.cslider.js"></script>
    <script src="assets/js/parallax/js/modernizr.js"></script>
    <script src="assets/js/index.js"></script>


    <script type="text/javascript">
	    jQuery(document).ready(function() {
	        $('#da-slider').cslider();          
	    });
		</script>
  
  </body>
</html>
