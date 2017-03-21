<?php include "inc/header.php" ?>

	<div class="container">
	    <div class="panel panel-info">
	      <div class="panel-heading">
	      	<h3>User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></span></h3>
	      </div>
	      <div class="panel-body">
	     	<div style="max-width: 600px; margin: 0 auto;">
		      	<form action="" method="POST">

		      		<div class="form-group">
		      			<label for="name">Your Name</label>
		      			<input type="text" id="name" name="name" class="form-control" value="Sarder Mohiuddin">
		      		</div>
					
					<div class="form-group">
		      			<label for="user">User Name</label>
		      			<input type="text" id="user" name="user" class="form-control" value="mohin">
		      		</div>

		      		<div class="form-group">
		      			<label for="user">Email Address</label>
		      			<input type="email" id="user" name="user" class="form-control" value="mohin@gmail.com">
		      		</div>

		      		<button class="btn btn-success" type="submit" name="update">Update</button>
		      	</form>	      	
	      	</div>
	      </div>
	    </div>
	</div>


<?php include "inc/footer.php" ?>