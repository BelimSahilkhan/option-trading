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
                        <th scope="col">S No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Whatsapp NO</th>
                        <th scope="col">Email</th>
                        <th scope="col">CountryName</th>
                        <th scope="col">Investment</th>
                        <th scope="col">Segment</th>
                        <th scope="col">Addded Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        
                    
					<?php
                        $srno=0;
						$select = "select * from  tbl_getlivedemo";
						$query = mysqli_query($con,$select);
						while ($fetch=mysqli_fetch_array($query)) {
							$srno = $srno +1;
							
							
							?>
                                <tr>
                                    <th > <?php echo $srno; ?></th>
                                    <td><?php echo $fetch["getusernmae"];?> </td>
                                    <td><?php echo $fetch["getsurname"];?> </td>
                                    <td><?php echo $fetch["getphone"];?> </td>
                                    <td><?php echo $fetch["getwphone"];?> </td>
                                    <td><?php echo $fetch["getemail"];?> </td>
                                    <td><?php echo $fetch["getcname"];?> </td>
                                    <td><?php echo $fetch["getinvename"];?> </td>
                                    <td><?php echo $fetch["getsegname"];?> </td>
                                    <td><?php echo $fetch["added_date"];?> </td>
                                    <td><a class="text-primary" style="text-decoration:none;list-style-type:none;" href="updatelivedemo.php?id=<?php echo $fetch["getid"];?>">Edit</a><a class="text-danger" style="text-decoration:none;list-style-type:none;" href="deletelivedemo.php?id=<?php echo $fetch["getid"];?>"">Delete</a></td>
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
