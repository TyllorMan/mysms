<?php
  ob_start();
    session_start();
    if(!isset($_SESSION['name'])){
      header("Location: login.php");
    } else if (isset($_POST['formsubmitted'])) {
      include ('db_access/database_connection.php');
      $error = array();//Declare An Array to store any error message
      if (empty($_POST['name'])) {
        $error[] = 'Please Enter a name ';//add to array "error"
      } else {
        $name = $_POST['name'];//else assign it a variable
      }
      if (isset($_SESSION['email'])) {
          if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
           //regular expression for email validation
            $email = $_POST['email'];
          } else {
            $email = NULL;
        }
      }
      if (empty($_POST['phone'])) {
        $error[] = 'Please enter a number';
      } else {
        $phone = $_POST['phone'];
      }
      if (empty($error)) {
        $user_id = $_POST['user_id'];
        $query_insert_contact = "INSERT INTO `contact` (`user_id`, `name`, `email`, `phone`) VALUES ('$user_id', '$name', '$email', '$phone')";
        $result_insert_contact = mysqli_query($dbc, $query_insert_contact);
        if (!$result_insert_contact) {
          echo 'Query Failed ';
        }
        if (mysqli_affected_rows($dbc) == 1) { //If the Insert Query was successfull.
          echo '<div class="success">'.$name.' is add to your contact list!</div>';
        } else { // If it did not run OK.
          echo '<div class="errormsgbox">You could not be registered due to a system
            error. We apologize for any inconvenience.</div>';
        }
      } else {//If the "error" array contains error msg , display them
        echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
          echo '  <li>'.$values.'</li>';
        }
        echo '</ol></div>';
      }
      mysqli_close($dbc);//Close the DB Connection
    } // End of the main Submit conditional
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
    <link href="../assets/css/bootstrap-tagsinput.css" rel="stylesheet">
    <script language='javascript' src='js/util.js'></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    
    <!-- Inclui o navbar.php que esta dentro de pages -->
    <?php include 'navbar.php'; ?>

    <div class="container">
      <div class="page-header">
        <h2>Novo Contato</h2>
      </div>

      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
              <li><a href="message_list.php">Mensagens</a></li>
              <li class="active"><a href="contact_list.php">Contatos</a></li>
          </ul>
        </div>

        <div class="col-md-10">
        <form class="form-signin" method="post" action="create_contact.php">
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" placeholder="Nome" name="name" required autofocus/>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email"/>
          </div>
          <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" placeholder="Telefone" class="form-control" id="phones" onkeypress="return isNumberKey(event)" required/>
          </div>
          <input type="hidden" name="user_id" value=<?php echo htmlentities($_SESSION['id'], ENT_QUOTES, 'UTF-8'); ?> />
          <input type="hidden" name="formsubmitted" value="TRUE" />
          <button type="submit" class="btn btn-success" value="Register"><span class="glyphicon glyphicon-plus-sign"></span>  Concluir</button>
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
    <script src="../assets/js/parallax/js/modernizr.js"></script>
    <script src="../assets/js/bootstrap-tagsinput.min.js"></script>

  </body>
</html>