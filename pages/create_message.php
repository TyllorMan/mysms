<?php
  ob_start();
    session_start();
    if(!isset($_SESSION['name'])){
         header("Location: login.php");
    } else {
      include ('db_access/database_connection.php');
        if (mysqli_connect_errno()){
          echo '<div class="alert alert-danger">Falha ao tentar conectar o MySQL!' . mysqli_connect_error() . '</div>';
        } else {
          $ID = htmlentities($_SESSION['id'], ENT_QUOTES, 'UTF-8');
          $result = mysqli_query($con,"SELECT * FROM contact WHERE user_id = $ID ORDER BY name");
        }
    }
    if (isset($_POST['formsubmitted']))
    {
      $error = array();//Declare An Array to store any error message
      if (empty($_POST['title'])) {
        $error[] = 'Preencha o título!';//add to array "error"
      } else {
        $title = $_POST['title'];//else assign it a variable
      }
      if (empty($_POST['content'])) {
        $error[] = 'Preencha o conteúdo!';//add to array "error"
      } else {
        $content = $_POST['content'];//else assign it a variable
      }
      if (empty($_POST['contacts'])) {
        $error[] = 'Selecione ao menos um contato!';
      } else {
        $contacts = $_POST['contacts'];
      }
      if (empty($error)) {
        $user_id = $_POST['user_id'];
        $query_insert_text = "INSERT INTO `text` (`user_id`, `content`, `title`) VALUES ('$user_id', '$content', '$title')";
        $result_insert_text= mysqli_query($dbc, $query_insert_text);
        $text_id = mysqli_insert_id($dbc);
        // Next, create insert statements
        $query_insert_message  = "INSERT INTO `message` (`text_id`, `contact_id`) VALUES ";
        foreach ($contacts as $contact_id) {
          $query_insert_message .= "('".$text_id."', ";
          $query_insert_message .= "'".$contact_id."'),";
        }
        $query_insert_message = substr($query_insert_message, 0, -1);
        $result_insert_message = mysqli_query($dbc, $query_insert_message);

        if (!$result_insert_text) {
          echo '<div class="alert alert-danger">Falha na query.</div>';
        }
        if (mysqli_affected_rows($dbc) != 0) { //If the Insert Query was successfull.
          echo '<div class="alert alert-success">'.$title.' foi adicionado a sua lista de mensagens!</div>';
        } else { // If it did not run OK.
          echo '<div class="alert alert-danger">Ops! Estamos com algum problema. Descupe-nos pelo incoveniente.</div>';
        }
      } else {//If the "error" array contains error msg , display them
        echo '<div class="alert alert-danger"> <ol>';
        foreach ($error as $key => $values) {
          echo '  <li>'.$values.'</li>';
        }
        echo '</ol></div>';
      }
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
        <h2>Nova Mensagem</h2>
      </div>

      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="message_list.php">Mensagens</a></li>
              <li><a href="contact_list.php">Contatos</a></li>
          </ul>
        </div>

        <div class="col-md-10">
       <form role="form" method="post" action="create_message.php" id="text">
          <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" placeholder="Título da Mensagem" name="title" required>
          </div>
          <div class="form-group">
            <label for="text">Conteúdo</label>
            <textarea class="form-control" id="text" rows="5" maxlength="160" name="content" form="text" required></textarea>
          </div>
          <div class="form-group">
            <label for="bs3Select">Selecionar Contatos</label>
              <select id="bs3Select" class="selectpicker show-tick form-control" multiple data-live-search="true" name="contacts[]">
                  <optgroup label="Todos" data-subtext="Todos" data-icon="icon-ok">
                    <?php
                      while($row = mysqli_fetch_array($result))
                      {
                        echo"<option value=". $row['id'] . ">" . $row['name'] . "</option>";
                      }
                      mysqli_close($con);
                    ?>
                  </optgroup>
              </select>
            </div>
            <input type="hidden" name="formsubmitted" value="TRUE" />
            <input type="hidden" name="user_id" value=<?php echo htmlentities($_SESSION['id'], ENT_QUOTES, 'UTF-8'); ?> />
          <button type="submit" class="btn btn-success" value="Register"><span class="glyphicon glyphicon-plus-sign"></span>  Criar</button>
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