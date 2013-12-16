<?php
  ob_start();
    session_start();
    if(!isset($_SESSION['name'])){
         header("Location: login.php");
    } else {
      include ('db_access/database_connection.php');
        if (mysqli_connect_errno()){
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
      $ID = htmlentities($_SESSION['id'], ENT_QUOTES, 'UTF-8');
      $result = mysqli_query($con,"SELECT * FROM contact WHERE user_id = $ID ORDER BY name");
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
        <a href="create_contact.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span>  Create</a>
        <h1>My Contacts <small> Lorem Ipsum</small></h1>
      </div>

      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
              <li><a href="message_list.php">Messages</a></li>
              <li class="active"><a href="#">Contact</a></li>
          </ul>


        </div>
        <div class="col-md-10">
          <div class="page-header">
            <h3>List contacts <small> Lorem Ipsum</small></h3>
          </div>
        <table class="table table-hover">
        <thead>
          <tr>
            <th><input type="checkbox"></th>
            <th>Name</th>
            <th>Email</th>
            <th>Phones</th>
            <th>
              <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
              <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</button>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_array($result))
              {
                echo"<tr>";
                  echo"<td><input type='checkbox'></td>";
                  echo"<td>" . $row['name'] . "</td>";
                  echo"<td>" . $row['email'] . "</td>";
                  echo"<td>" . $row['phone'] . "</td>";
                  echo"<td> </td>";
                echo"</tr>";
              }
            mysqli_close($con);
          ?>
        </tbody>
      </table>

        </div>
    
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
    <script src="../assets/js/parallax/js/jquery.cslider.js"></script>
    <script src="../assets/js/parallax/js/modernizr.js"></script>
    <script src="../assets/js/index.js"></script>
  
  </body>
</html>