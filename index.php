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

			  <div class="collapse navbar-collapse pull-right" id="nav-login">
			    <ul class="nav navbar-nav">
			      <li><a href="pages/login.php">Login</a></li>
				  <li><a href="pages/signup.php">Cadastre-se</a></li>
			    </ul>
			  </div><!-- /.navbar-collapse -->

			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="nav-left">
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#">Home</a></li>
			      <li><a href="#">Link</a></li>
			      <li><a href="#">Link</a></li>
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
							<i>de forma rápida e fácil.</i>
						</p>
			            <div class="da-img span6">
			                <div class="span6">
			                    <img src="assets/images/SMS-marketing1.jpg">
			                </div>
			            </div>
			        </div>

			        <div class="da-slide">
			            <h2><i>Lorem Ipsum</i> <br /> <i>Lorem Ipsum Lorem </i></h2>
			            <p><i>Lorem Ipsum Lorem Ipsum Lorem Ipsum!!!</i> <br /> <i>Lorem Ipsum Lorem Ipsum Lorem Ipsum</i> <br /> <i> Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</i></p>
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
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">        	
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">          
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
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
