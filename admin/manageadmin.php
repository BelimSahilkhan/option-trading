<?php
require_once('./config/config.php');
// session terminate after logout
if(isset($_SESSION["id"]))
{
require_once('./includes/navbar.php');
?>

<div class="container w-75">
	<div class="report-container"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Live Demo Data</h1> 

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                        <th scope="col">Sr. No</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User IMG</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        
                    
					<?php
                        $srno=0;
						$select = "select * from  tbl_admin";
						$query = mysqli_query($con,$select);
						while ($fetch=mysqli_fetch_array($query)) {
							$srno = $srno +1;
							
							
							?>
                                <tr>
                                    <th > <?php echo $srno; ?></th>
                                    <td><?php echo $fetch['username'];?> </td>
                                    <td><img src="<?php echo $fetch1['userimg'];?>" class="border rounded"  width="100px" height="90px" alt="dp"></td>
                                    <td><?php echo $fetch["email"];?> </td>
                                    <td><a class="text-danger" style="text-decoration:none;list-style-type:none;" href="deleteadmin.php?id=<?php echo $fetch["id"];?>"">Delete</a></td>
                                </tr>
                                <?php
						}
						?>


                    </tbody>
                </table>





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
