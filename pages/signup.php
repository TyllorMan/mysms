<?php
    if (isset($_POST['formsubmitted'])) {
        if (mysqli_connect_errno()) {
              echo '<div class="alert alert-danger">Falha ao tentar conectar o MySQL!' . mysqli_connect_error() . '</div>';
          } else {
            $error = array();//Declare An Array to store any error message  
            if (empty($_POST['name'])) {//if no name has been supplied 
                $error[] = 'Preencha o nome!';//add to array "error"
            } else {
                $name = $_POST['name'];//else assign it a variable
            }
            if (empty($_POST['e-mail'])) {
                $error[] = 'Preencha o email!';
            } else {
                if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {
                   //regular expression for email validation
                    $email = $_POST['e-mail'];
                } else {
                     $error[] = 'Email inválido!';
                }
            }
            if (empty($_POST['password'])) {
                $error[] = 'Preencha a senha!';
            } else {
                $password = $_POST['password'];
            }
            if (empty($error)) //send to Database if there's no error '
            { // If everything's OK...
                // Make sure the email address is available:
                $query_verify_email = "SELECT * FROM user  WHERE email ='$email'";
                $result_verify_email = mysqli_query($dbc, $query_verify_email);
                if (!$result_verify_email) {//if the Query Failed ,similar to if($result_verify_email==false)
                    echo '<div class="alert alert-danger">Falha na query.</div>';
                }
                if (mysqli_num_rows($result_verify_email) == 0) { // IF no previous user is using this email .
                    // Create a unique  activation code:
                    $activation = "";/*md5(uniqid(rand(), true));*/
                    $password = sha1($password);
                    $query_insert_user = "INSERT INTO `user` ( `name`, `email`, `password`, `activation`) VALUES ( '$name', '$email', '$password', '$activation')";
                    $result_insert_user = mysqli_query($dbc, $query_insert_user);
                    if (!$result_insert_user) {
                       echo '<div class="alert alert-danger">Falha na query.</div>';
                    }
                    if (mysqli_affected_rows($dbc) == 1) { //If the Insert Query was successfull.
                        /*// Send the email:
                        $message = " To activate your account, please click on this link:\n\n";
                        $message .= WEBSITE_URL . '/activate.php?email=' . urlencode($email) . "&key=$activation";
                        mail($email, 'Registration Confirmation', $message, 'From: ismaakeel@gmail.com');

                        // Flush the buffered output.*/

                        // Finish the page:
                        echo '<div class="success"> '.$name.', you are ready to Login!</div>';
                        echo "<meta http-equiv=\"refresh\" content=\"2;url=login.php\"/>";

                    } else { // If it did not run OK.
                        echo echo '<div class="alert alert-danger">Ops! Estamos com algum problema. Descupe-nos pelo incoveniente.</div>';
                    }
                } else { // The email address is not available.
                    echo '<div class="alert alert-danger">Esse email já foi registrado!</div>';
                }
            } else {//If the "error" array contains error msg , display them
        echo '<div class="alert alert-danger"> <ol>';
                foreach ($error as $key => $values) {
                    echo '  <li>'.$values.'</li>';
                }
                echo '</ol></div>';
            }
            mysqli_close($dbc);//Close the DB Connection
        } //End of the conection conditional.
    } // End of the main Submit conditional.
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
    <link href="../assets/css/login.css" rel="stylesheet">
	<link href="../assets/css/CustomLogin.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

		<div class="container">

		 <form class="form-signin" method="post" action="signup.php">
        <h2 class="form-signin-heading">Registre-se no MySMS</h2>
        <input type="text" class="form-control" placeholder="Nome" name="name" required autofocus>
        <input type="email" class="form-control" name="e-mail" placeholder="Email" required>
		    <input type="password" class="form-control" name="password" placeholder="Senha" required>
        <input type="hidden" name="formsubmitted" value="TRUE" />
        <button class="btn btn-lg btn-primary btn-block" value="Register" type="submit">Concluir</button>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
  
  </body>
</html>