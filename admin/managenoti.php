<?php
require_once('./config/config.php');
// session terminate after logout
if(isset($_SESSION["id"]))
{
require_once('./includes/navbar.php');
?>

<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Recent Notifications</h1> 
			<button class="btn btn-sm btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Add</a></button>
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
					<?php
						$select = "select * from tbl_noti";
						$query = mysqli_query($con,$select);
						while ($fetch=mysqli_fetch_array($query)) {
							
							
							
							?>
						<div class="col-md-12 mt-2 border rounded p-3 m-3">
						<p class="text-dark mt-2"><?php echo $fetch["notification"];?></p>
						<hr>
						<button class="btn btn-sm btn-primary m-2"><a style="text-decoration:none;list-style-type:none;" class="text-white" href="updatenoti.php?id=<?php echo $fetch['notiid'];?>"><i class="bi bi-pencil"></i></a></button>
						<button class="btn btn-sm btn-danger m-2"><a style="text-decoration:none;list-style-type:none;" class="text-white" href="deletenoti.php?id=<?php echo $fetch['notiid'];?>"><i class="bi bi-trash"></i></a></button>
					</div>
						<?php
						}
						?>
				</div>
			</div>
		</div> 
	</div>
</div>


<?php
require_once('./includes/footer.php');
}else{
    echo "<script> 
    window.location='index.php';
    </script>";
}
?>
