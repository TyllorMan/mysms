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
			      <li class="active" ><a href="#">Bem vindo <?php echo htmlentities($_SESSION['name'], ENT_QUOTES, 'UTF-8'); ?>!</a></li>
				  <li><a href="#">Logout </a></li>
			    </ul>
			  </div><!-- /.navbar-collapse -->


			</div>

		</nav>
