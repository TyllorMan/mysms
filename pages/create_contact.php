<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My SMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/parallax-slider.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-tagsinput.css" rel="stylesheet">

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
			      <li class="active" ><a href="#">Bem vindo User 1</a></li>
			    </ul>
			  </div><!-- /.navbar-collapse -->


			</div>

		</nav>

    <div class="container">
      <div class="page-header">
        <h1>New Contatc <small> Lorem Ipsum</small></h1>
      </div>

      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
              <li><a href="message_list.php">Messages</a></li>
              <li class="active"><a href="contact_list.php">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-10">
          <div class="page-header">
            <h3>New Contact <small> Lorem Ipsum</small></h3>
          </div>
       <form role="form">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Input Name">
          </div>

          <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" placeholder="Input email">
          </div>
          
          <div class="form-group">
            <label for="phones">Contacts Phones</label>
              <input type="text" value="" data-role="tagsinput" placeholder="Add phones" class="form-control" id="phones"/>
          </div>
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span>  Submit</button>
        </form>
      </div>
      


    </div><!-- /.container -->
      <!-- FOOTER -->
    <hr class="featurette-divider">
    <div class="container">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/parallax/js/modernizr.js"></script>
    <script src="../assets/js/bootstrap-tagsinput.min.js"></script>

  </body>
</html>