<?php
include ('db_access/database_connection.php');
if (isset($_POST['formsubmitted'])) {
    $error = array();//Declare An Array to store any error message  
    if (empty($_POST['name'])) {//if no name has been supplied 
        $error[] = 'Please Enter a name ';//add to array "error"
    } else {
        $name = $_POST['name'];//else assign it a variable
    }
    if (empty($_POST['e-mail'])) {
        $error[] = 'Please Enter your Email ';
    } else {
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {
           //regular expression for email validation
            $email = $_POST['e-mail'];
        } else {
             $error[] = 'Your EMail Address is invalid  ';
        }
    }
    if (empty($_POST['password'])) {
        $error[] = 'Please Enter Your Password ';
    } else {
        $password = $_POST['password'];
    }
    if (empty($error)) //send to Database if there's no error '
    { // If everything's OK...
        // Make sure the email address is available:
        $query_verify_email = "SELECT * FROM user  WHERE email ='$email'";
        $result_verify_email = mysqli_query($dbc, $query_verify_email);
        if (!$result_verify_email) {//if the Query Failed ,similar to if($result_verify_email==false)
            echo ' Database Error Occured ';
        }
        if (mysqli_num_rows($result_verify_email) == 0) { // IF no previous user is using this email .

            // Create a unique  activation code:
            $activation = "";/*md5(uniqid(rand(), true));*/
            $password = sha1($password);
            $query_insert_user = "INSERT INTO `user` ( `name`, `email`, `password`, `activation`) VALUES ( '$name', '$email', '$password', '$activation')";
            $result_insert_user = mysqli_query($dbc, $query_insert_user);
            if (!$result_insert_user) {
                echo 'Query Failed ';
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
                echo '<div class="errormsgbox">You could not be registered due to a system
                  error. We apologize for any
                  inconvenience.</div>';
            }
        } else { // The email address is not available.
            echo '<div class="errormsgbox">That email
                  address has already been registered.
                  </div>';
        }
    } else {//If the "error" array contains error msg , display them
echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '  <li>'.$values.'</li>';
        }
        echo '</ol></div>';
    }
    mysqli_close($dbc);//Close the DB Connection
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


<style type="text/css">
body {
  font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
  font-size:12px;
}
.registration_form {
  margin:0 auto;
  width:500px;
  padding:14px;
}
label {
  width: 10em;
  float: left;
  margin-right: 0.5em;
  display: block
}
.submit {
  float:right;
}
fieldset {
  background:#EBF4FB none repeat scroll 0 0;
  border:2px solid #B7DDF2;
  width: 500px;
}
legend {
  color: #fff;
  background: #80D3E2;
  border: 1px solid #781351;
  padding: 2px 6px
}
.elements {
  padding:10px;
}
p {
  border-bottom:1px solid #B7DDF2;
  color:#666666;
  font-size:11px;
  margin-bottom:20px;
  padding-bottom:10px;
}
a{
    color:#0099FF;
font-weight:bold;
}

/* Box Style */


 .success, .warning, .errormsgbox, .validation {
  border: 1px solid;
  margin: 0 auto;
  padding:10px 5px 10px 50px;
  background-repeat: no-repeat;
  background-position: 10px center;
  font-weight:bold;
  width:450px;
     
}

.success {
   
  color: #4F8A10;
  background-color: #DFF2BF;
  background-image:url('images/success.png');
}
.warning {

  color: #9F6000;
  background-color: #FEEFB3;
  background-image: url('images/warning.png');
}
.errormsgbox {
 
  color: #D8000C;
  background-color: #FFBABA;
  background-image: url('images/error.png');
  
}
.validation {
 
  color: #D63301;
  background-color: #FFCCBA;
  background-image: url('images/error.png');
}



</style>


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