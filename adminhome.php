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
  <link rel="icon" type="image/png" href="images/logoblk.png">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
	<div class="container-fluid" id="headerdiv">
		<div align="center" id="logodiv">
			<img id="icon" src="images/logoblk.png"/ alt="Logo">
			<h1 id="header">Virginia Rifle and Pistol Club</h1>
	    </div>
	</div>
  <form method="post" action="search.php" id="search" class="form-inline">
		&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-control col-sm-6 " type="text" name="srch_query" placeholder="Search here..." required>
		<input class="btn btn-primary" type="submit" name="search" value="Search">
	</form>
</div>
<div class="container" id="topbuttondiv">
	<button class="btn btn-outline-primary btn-sm" onclick="window.location.href='add.php'">Add New Member</button>
	<button class="btn btn-outline-primary btn-sm" onclick="window.location.href='viewall.php'">View All Members</button>	
	<button class="btn btn-outline-primary btn-sm float-right" onclick="window.location.href='logout.php'">Logout</button>
</div>

<div class="table-responsive" id="displaytable">
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

				$getData = $db->prepare('SELECT id, fname, lname, address, city, state, zip, email, phone, status, payment FROM members LIMIT :start, :limit');
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
						<td><?php echo $dispData['payment'];?></td>
						<td><a class="btn btn-outline-primary btn-sm" href="edit.php?id=<?php echo $dispData['id']; ?>">Edit</a>&nbsp; | &nbsp;<a class="btn btn-outline-danger btn-sm" href="delete.php?id=<?php echo $dispData['id']; ?>" onclick="return confirm('Are you sure you want to delete <?php echo $dispData['fname'] . " " . $dispData['lname']; ?> ?');">Delete</a></td>
					</tr>
			<?php	}
				

			?>
		</tbody>

	</table>
	<script type="text/javascript" src="jquery.min.js"></script> 

	

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
		<button class="btn btn-outline-primary btn-sm" onclick="window.location.href='?page=<?php echo ($current_page - 1); ?>'">Previous</button>
	<?php 
	}
	
	
	if($current_page < $num_of_pages)
	{ ?>

	<button class="btn btn-outline-primary btn-sm" onclick="window.location.href='?page=<?php echo ($current_page + 1); ?>'">Next</button>
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

