<?php
  ob_start();
    session_start();
    if(!isset($_SESSION['name'])){
         header("Location: login.php");
    }
?>

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
    <link href="../assets/css/bootstrap-select.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <?php include 'navbar.php'; ?>
    <div class="container">
      <div class="page-header">
        <h2>Editar Mensagem</h2>
      </div>

      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="message_list.php">Mensagens</a></li>
              <li><a href="contact_list.php">Contatos</a></li>
          </ul>
        </div>

        <div class="col-md-10">
       <form role="form">
          <div class="form-group">
            <label for="title">Título</label>
            <input type="email" class="form-control" id="title" placeholder="">
          </div>
          <div class="form-group">
            <label for="text">Conteúdo</label>
            <textarea class="form-control" id="text" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label for="bs3Select">Contatos Selecionados</label>
              <select id="bs3Select" class="selectpicker show-tick form-control" multiple data-live-search="true">
                  <optgroup label="home" data-subtext="home" data-icon="icon-ok">
                    <option>cow</option>
                    <option>bull</option>
                    <option class="get-class" disabled>ox</option>
                  </optgroup>
                  <optgroup label="work" data-subtext="work" data-icon="icon-ok">
                      <option>ASD</option>
                      <option selected>Bla</option>
                      <option>Ble</option>
                  </optgroup>
              </select>
            </div>
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span>  Concluir</button>
        </form>
      </div>
      


    </div><!-- /.container -->
      <!-- FOOTER -->
    <hr class="featurette-divider">
    <div class="container">
      <footer>
        <p>&copy; 2013 UFRN, ECT</p>
      </footer>

    </div><!-- /.container -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/parallax/js/jquery.cslider.js"></script>
    <script src="../assets/js/parallax/js/modernizr.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>

    <script type="text/javascript">
	    jQuery(document).ready(function() {
            $('.selectpicker').selectpicker();    
	    });
		</script>
  
  </body>
</html>
