<?php

include ('db_access/database_connection.php');
if (isset($_POST['formsubmitted'])) {
    // Initialize a session:
session_start();
    $error = array();//this aaray will store all error messages
      if (empty($_POST['e-mail'])) {//if the email supplied is empty 
        $error[] = 'You forgot to enter  your Email ';
    } else {
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {
           
            $email = $_POST['e-mail'];
        } else {
             $error[] = 'Your EMail Address is invalid  ';
        }
    }


    if (empty($_POST['password'])) {
        $error[] = 'Please Enter Your Password ';
    } else {
        $password = $_POST['password'];
        $password = sha1($password);
    }


       if (empty($error))//if the array is empty , it means no error found
    { 

       

        $query_check_credentials = "SELECT * FROM user WHERE email='$email' AND password='$password'"; /*AND activation IS NULL";*/
   
        

        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials){//If the QUery Failed 
            echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.

           


            $_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable
           
            header("Location: message_list.php");
          

        }else
        { 
            
            $msg_error= 'Either Your Account is inactive or Email address /Password is Incorrect';
        }

    }  else {
        
        

echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '  <li>'.$values.'</li>';


       
        }
        echo '</ol></div>';

    }
    
    
    if(isset($msg_error)){
        
        echo '<div class="warning">'.$msg_error.' </div>';
    }
    /// var_dump($error);
    mysqli_close($dbc);

} // End of the main Submit conditional.



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>    
<link href="assets/css/customLogin.css" rel="stylesheet">
</head>
<body>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

		<div class="container">

		 <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">Faça login!!!</h2>
        <input type="text" class="form-control" placeholder="Email" name="e-mail" required autofocus>
        <input type="password" class="form-control" name="password" placeholder="Senha" required>
        <input type="hidden" name="formsubmitted" value="TRUE" />
        <button class="btn btn-lg btn-primary btn-block" value="Login" type="submit">Entrar</button>
      </form>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
  
  </body>
</html>