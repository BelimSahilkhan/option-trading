

<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0"> 
	<title>Admin panel | Options Treading </title> 
	<link rel="stylesheet" href="./css/admin.css"> 
	<link rel="stylesheet" href="./css/admin-responsive.css"> 
	<!-- bootstrap stylesheet -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<!-- Jquery links -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- data tables links -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<!--fontawesome icon link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		ul,li{
			list-style-type: none;
		}
	</style>
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">OptionsTrading</div> 
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn" id="menuicn" alt="menu-icon"> 
		</div> 

		
		<?php
		require_once('./config/config.php');
		$id=$_SESSION["id"];
		$select = "select * from tbl_admin";
		$result=mysqli_query($con,$select);
		$fetch=mysqli_fetch_array($result);
		$select1 = "select * from tbl_admin where id='$id'";
		$result1=mysqli_query($con,$select1);
		$fetch1=mysqli_fetch_array($result1);

		?>
		<div class="message" style="margin-left:55%;margin-right:0px;"> 
			<!-- <div class="circle"></div>  -->
			    <!-- <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" class="icn" alt="">  -->
			<div class="dp"> 
			    <img src="<?php echo $fetch1['userimg'];?>" class="dpicn"  width="500px" height="450px" alt="dp"> 
			</div> 
		</div> 
		<div class="message" > 
			<ul>
				<li class="nav-item dropdown" style="margin-right:20px !impotent;" >
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <strong>Admin  :</strong> <?php echo  $fetch1['username'];?></a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php
						
						$email_exsist = "select email from tbl_admin where email='admin@gmail.com'";
						$email_exsist_query_run=mysqli_query($con,$email_exsist);
						if ($email_exsist_query_run) {
							if($_SESSION["email"] == "admin@gmail.com"){
					?>
								<li><a class="dropdown-item" href="addadmin.php">Add Admin</a></li>
								<li><a class="dropdown-item" href="manageadmin.php">Manage Admin</a></li>
								<li><a class="dropdown-item" href="editprofile.php?id=<?php echo $fetch['id'];?>">Edit Profile</a></li>
								<li><a class="dropdown-item" href="changepass.php?id=<?php echo $fetch['id'];?>">Change Password</a></li>
								<li><a class="dropdown-item text-danger" href="logout.php">logout</a></li>
					<?php
							}else {
					?>
								<li><a class="dropdown-item" href="editprofile.php?id=<?php echo $fetch['id'];?>">Edit Profile</a></li>
								<li><a class="dropdown-item" href="changepass.php?id=<?php echo $fetch['id'];?>">Change Password</a></li>
								<li><a class="dropdown-item text-danger" href="logout.php">logout</a></li>
					<?php
							}
							
						}
					?>
				</ul>
				</li>
			</ul>
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option2"> 
						<a href="dashboard.php"> <i class="fa-solid fa-house fa-lg" style="color: #052761;"></i></a>
						<!--<a href="dashboard.php" style="text-decoration:none;">-->
						<!--<h3> Dashboard</h3> -->
						<!--</a>-->
						<a  href="dashboard.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark">Dashboard</h3></a>
					</div> 

					<div class="option2 nav-option"> 
					<a href="managenoti.php"><i class="fa-solid fa-eye fa-lg" style="color: #09074b;"></i></a>
							<a  href="managenoti.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark">Notification</h3></a>  
					</div> 
				
					<div class="nav-option option3"> 
					<a  href="managelivedemo.php" style="text-decoration:none;list-style-type:none;"><i class="fa-solid fa-database fa-lg" style="color: #1e3050;"></i></a> 
							<a  href="managelivedemo.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark">LiveDemoData</h3></a>
					</div> 
					<div class="nav-option option4"> 
					<a  href="managelets.php" style="text-decoration:none;list-style-type:none;"><i class="fa-solid fa-database fa-lg" style="color: #1e3050;"></i></a> 
							<a  href="managelets.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark">Let'sTalkData</h3></a>
					</div> 

					<div class="nav-option option5"> 
						<a  href="managecontact.php" style="text-decoration:none;list-style-type:none;"><i class="fa-solid fa-database fa-lg" style="color: #1e3050;"></i></a> 
						<a  href="managecontact.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark"> ContactUs</h3> </a>
					</div> 
					<div class="nav-option option6"> 
						<a  href="managebank.php" style="text-decoration:none;list-style-type:none;"> <i class="fa-solid fa-building-columns fa-lg" style="color: #1e3050;"></i></a> 
						<a  href="managebank.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark"> Bank Details</h3> </a>
					</div> 

					<div class="nav-option option7"> 
						<a  href="managepackageprice.php" style="text-decoration:none;list-style-type:none;"><i class="fa-solid fa-cubes" style="color: #0b234c;"></i></a> 
						<a  href="managepackageprice.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark"> Packages Price</h3> </a>
					</div> 

					<div class="nav-option option8"> 
						    <a  href="subscriber.php" style="text-decoration:none;list-style-type:none;"><i class="fa-regular fa-thumbs-up fa-lg" style="color: #06255b;"></i></a>
							<a  href="subscriber.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark"> Subscriber</h3> </a>
					</div> 

					<div class="nav-option logout"> 
					<a href="logout.php"><i class="fa-solid fa-power-off fa-lg" style="color: #0c2755;"></i></a>
						<a href="logout.php" style="text-decoration:none;list-style-type:none;"><h3 class="text-dark">Logout</h3></a> 
					</div> 

				</div> 
			</nav> 
		</div> 

