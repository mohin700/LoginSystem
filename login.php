<?php include "inc/header.php" ?>

	<div class="container">
	    <div class="panel panel-info">
	      <div class="panel-heading">
	      	<h3>User Login</h3>
	      </div>
	      <div class="panel-body">
	     	<div style="max-width: 600px; margin: 0 auto;">
		      	<form action="" method="POST">

		      		<div class="form-group">
		      			<label for="email">Email</label>
		      			<input type="email" id="email" name="email" class="form-control">
		      		</div>

		      		<div class="form-group">
		      			<label for="password">Password</label>
		      			<input type="password" id="password" name="password" class="form-control">
		      		</div>

		      		<button class="btn btn-success" type="submit" name="login">Login</button>
		      	</form>	      	
	      	</div>
	      </div>
	    </div>
	</div>


<?php include "inc/footer.php" ?>