<?php
session_start();
include('connect.php');
if(isset($_POST['search'])){
	$q = $_POST['srch_query']; //Search query of user saved to the variable 'q'
?>
<!doctype html>
<html>
<head>
  <title>Virginia Rifle And Pistol Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="images/logoblk.png" style="border-radius: 50%;">
</head>

<body>
<div class="container-fluid" style="background-color: #053582; height: 75px;">
  <div align="center" style="width: 100%">
   <img class="float-left" src="images/logoblk.png" width="60" height="60" style="border-radius: 50%; margin-top: 7px;"/>
    <h1 style="color: white; padding-top: 10px;">Virginia Rifle and Pistol Club</h1>
  </div>
</div>
<div align="center" class="container">
	<!-- This form displays the search box with query in the search result page -->
	<br/>
	<form method="post" action="search.php" class="form-inline justify-content-center">
		<input class="form-control mr-sm-2" type="text" name="srch_query" value="<?php echo $q ?>" required>
		<input class="btn btn-outline-primary" type="submit" name="search" value="Search">		
	</form> <!-- Form ends -->
</div>


<?php
$search = $db->prepare("SELECT * FROM members WHERE fname LIKE '%$q%' OR lname LIKE '%$q%'");
$search->execute(); // Execute with wildcards

if($search->rowcount()==0){echo "No match found!";}
else{
	echo "Search Result:<br/>";?>
	<div class="table-responsive" style="margin-top: 5px;">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Member ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Status</th>
				<th>Payment Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($search as $s){
			?>
			<tr class="record">
			<tr class="record">
						<td align="center"><?php echo $s['id']; ?></td>
						<td><?php echo $s['fname']; ?></td>
						<td><?php echo $s['lname']; ?></td>
						<td><?php echo $s['address']; ?></td>
						<td><?php echo $s['city']; ?></td>
						<td><?php echo $s['state']; ?></td>
						<td><?php echo $s['zip']; ?></td>
						<td><?php echo $s['email']; ?></td>
						<td><?php echo $s['phone']; ?></td>
						<td><?php echo $s['status']; ?></td>
						<td><?php echo $s['payment']; ?></td>
						<td><a class="btn btn-primary" href="editform.php?id=<?php echo $s['id']; ?>">Edit</a>&nbsp; | &nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $s['id']; ?>" onclick="return confirm('Are you sure you want to delete this member?')">Delete</a></td>
					</tr>
	<?php } 
}
}?>
		</tbody>
</table><br/>
<div align="center">
	<button class="btn btn-outline-primary" onclick="window.location.href='add.php'">Add Member</button>
	<button class="btn btn-outline-primary" onclick="window.location.href='adminhome.php?page=1'">View Members</button>
</div>



			



