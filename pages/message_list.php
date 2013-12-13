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
			    <a class="navbar-brand" href="../index.php">MySMS</a>
			  </div>

			  <div class="collapse navbar-collapse pull-right" id="nav-login">
			    <ul class="nav navbar-nav">
			      <li class="active" ><a href="#">Bem vindo, User 1</a></li>
				  <li><a href="#">Logout</a></li>
			    </ul>
			  </div><!-- /.navbar-collapse -->


			</div>

		</nav>

    <div class="container">
      <div class="page-header">
        <button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Criar Mensagem</button>
        <h2>Minhas Mensagens</h2>
      </div>

      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="#">Mensagens</a></li>
              <li><a href="#">Contatos</a></li>
          </ul>


        </div>
        <div class="col-md-10">
          <div class="page-header">
            <h3>Mensagens</h3>
          </div>
        <table class="table table-hover">
        <thead>
          <tr>
            <th><input type="checkbox"></th>
            <th>Mensagem</th>
            <th>Contatos</th>
            <th>
              <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-send"></span> Enviar</button>
              <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
              <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Deletar</button>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox"></td>
            <td>My first message</td>
            <td> 3 contacts</td>
            <td> </td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td>My secound message</td>
            <td> 13 contacts</td>
            <td> </td>
          </tr>
          <tr>
            <td><input type="checkbox"></td>
            <td>Other messages</td>
            <td> 30 contacts</td>
            <td> </td>
          </tr>
        </tbody>
      </table>

        </div>
      </div>
      


    </div><!-- /.container -->
      <!-- FOOTER -->
    <hr class="featurette-divider">
    <div class="container">
      <footer>
        <p>&copy; 2013 UFRN/ECT &middot;
      </footer>

    </div><!-- /.container -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/parallax/js/jquery.cslider.js"></script>
    <script src="../assets/js/parallax/js/modernizr.js"></script>
    <script src="../assets/js/index.js"></script>


    <script type="text/javascript">
	    jQuery(document).ready(function() {
	        $('#da-slider').cslider();          
	    });
		</script>
  
  </body>
</html>
