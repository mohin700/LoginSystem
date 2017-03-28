<?php include "inc/header.php"; ?>
<?php 
include "lib/User.php"; 
$conn = new User;
?>

	<div class="container">
	    <div class="panel panel-info">
	      <div class="panel-heading">
	      	<h3>User List <span class="pull-right">Welcome <strong>Sarder</strong></span></h3>
	      </div>
	      <div class="panel-body">
	      	<table class="table table-striped table-bordered">
	      		<tr>
	      			<th>Serial</th>
	      			<th>Name</th>
	      			<th>Username</th>
	      			<th>Email Address</th>
	      			<th>Action</th>
	      		</tr>	      		

	      		<tr>
	      			<td>01</td>
	      			<td>Hasan Ali</td>
	      			<td>hasan</td>
	      			<td>hasan@gmail.com</td>
	      			<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
	      		</tr>	      		
	      		<tr>
	      			<td>02</td>
	      			<td>Imran Hossain</td>
	      			<td>imran</td>
	      			<td>imran@gmail.com</td>
	      			<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
	      		</tr>
	      		<tr>
	      			<td>03</td>
	      			<td>Karim Mia</td>
	      			<td>karim</td>
	      			<td>karim@gmail.com</td>
	      			<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
	      		</tr>
	      		<tr>
	      			<td>04</td>
	      			<td>Kabir Kha</td>
	      			<td>kabir</td>
	      			<td>kabir@gmail.com</td>
	      			<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
	      		</tr>
	      		<tr>
	      			<td>05</td>
	      			<td>Mahfuz Rahman</td>
	      			<td>mahfuz</td>
	      			<td>mahfuz@gmail.com</td>
	      			<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
	      		</tr>
	      	</table>
	      	


	      </div>
	    </div>
	</div>


<?php include "inc/footer.php" ?>