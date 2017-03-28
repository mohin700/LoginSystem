<?php include "inc/header.php"; ?>
<?php include "lib/User.php"; ?>
<?php $user = new User(); ?>

	<div class="container">
	    <div class="panel panel-info">
	      <div class="panel-heading">
	      	<h3>User Registration</h3>
	      </div>
	      <div class="panel-body">
	     	<div style="max-width: 600px; margin: 0 auto;">
		      	<form action="" method="POST">

		      		<div class="form-group">
		      			<label for="name">Your Name</label>
		      			<input type="text" id="name" name="name" class="form-control">
		      		</div>
					
					<div class="form-group">
		      			<label for="user">User Name</label>
		      			<input type="text" id="user" name="user" class="form-control">
		      		</div>

		      		<div class="form-group">
		      			<label for="user">Email Address</label>
		      			<input type="email" id="user" name="user" class="form-control">
		      		</div>

		      		<div class="form-group">
		      			<label for="password">Password</label>
		      			<input type="password" id="password" name="password" class="form-control">
		      		</div>

		      		<button class="btn btn-success" type="submit" name="register">Submit</button>
		      	</form>	      	
	      	</div>
	      </div>
	    </div>
	</div>


<?php include "inc/footer.php" ?>