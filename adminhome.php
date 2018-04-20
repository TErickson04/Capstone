<?php
include('connect.php');
session_start();
$role = $_SESSION['sess_userrole'];

if(!isset($_SESSION['sess_username']) && $role!="admin"){
	header('Location: index.php?err=2');
}

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
<div class="container"><br>
	<button class="btn btn-outline-primary" onclick="window.location.href='add.php'">Add new Member</button>	
	<form method="post" action="search.php" class="form-inline float-right">
		&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-control mr-sm-2" type="text" name="srch_query" placeholder="Search here..." required>
		<input class="btn btn-outline-primary" type="submit" name="search" value="Search">
	</form>
	<button class="btn btn-outline-primary float-right" onclick="window.location.href='logout.php'">Logout</button>
</div>
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
				<th>Phone #</th>
				<th>Status</th>
				<th>Payment Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				
				$start = 0;
				$limit = 10;

				if(isset($_GET['page']))
				{
					$current_page = $_GET['page'];
					$start = ($current_page-1) *$limit;
				}

				$getData = $db->prepare('SELECT * FROM members LIMIT :start, :limit');
				$getData->bindParam(':start', $start, PDO::PARAM_INT);
				$getData->bindParam(':limit', $limit, PDO::PARAM_INT);
				$getData->execute();
				//$result = $db->prepare("SELECT * FROM members ORDER BY id ASC");
				//$result->execute();
				while($dispData = $getData->fetch(PDO::FETCH_ASSOC)){
					?>
					<tr class="record">
						<td align="center"><?php echo $dispData['id']; ?></td>
						<td><?php echo $dispData['fname']; ?></td>
						<td><?php echo $dispData['lname']; ?></td>
						<td><?php echo $dispData['address']; ?></td>
						<td><?php echo $dispData['city']; ?></td>
						<td><?php echo $dispData['state']; ?></td>
						<td><?php echo $dispData['zip']; ?></td>
						<td><?php echo $dispData['email']; ?></td>
						<td><?php echo $dispData['phone']; ?></td>
						<td><?php echo $dispData['status']; ?></td>
						<td><?php echo $dispData['payment']; ?></td>
						<td><a class="btn btn-outline-primary" href="editform.php?id=<?php echo $dispData['id']; ?>">Edit</a>&nbsp; | &nbsp;<a class="btn btn-outline-danger" href="delete.php?id=<?php echo $dispData['id']; ?>" onclick="return confirm('Are you sure you want to delete this member?')">Delete</a></td>
					</tr>
			<?php	}
				

			?>
		</tbody>

	</table>

</div>
<div align="center">
	

	<?php
	
	$data=$db->prepare('SELECT * FROM members');
	$data->execute();
	$totalRecd = $data->rowCount();
	$num_of_pages = ceil($totalRecd/$limit);
	
	
	if($current_page > 1)
	{
		?>
		<button class="btn btn-outline-primary" onclick="window.location.href='?page=<?php echo ($current_page - 1); ?>'">Previous</button>
	<?php 
	}
	
	
	if($current_page < $num_of_pages)
	{ ?>

	<button class="btn btn-outline-primary" onclick="window.location.href='?page=<?php echo ($current_page + 1); ?>'">Next</button>
	<?php
	}
	
	echo "<ul class='page'>";
	for($i=1; $i <= $num_of_pages; $i++)
	{
		if($i ==$current_page)
		{
			echo "<li class='current'>" .$i."</li>";
		}
		else
		{
			echo "<li><a href='?page=".$i."'>".$i."</a></li>";
		}
	}
	echo "</ul>";
	
	?>
</div>	
</body>
</html>
<style type="text/css">
#content
{
	width: 900px;
	margin: 0 auto;
	font-family:Arial, Helvetica, sans-serif; text-align:center;
}
.page
{
margin: 0;
padding: 0;
font-size: 20px;
}
.page li
{
	list-style: none;
	display:inline-block;
}
.page li a, .current
{
display: block;
padding: 5px;
text-decoration: none;
color: #8A8A8A;
}
.current
{
	font-weight:bold;
	color: #053582;
}

</style>
