
<?php
require_once('./includes/navbar.php');
?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Let's Talk Data</h1> 

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
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Addded Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        
                    
					<?php
                        $srno=0;
						$select = "select * from   tbl_letstalk";
						$query = mysqli_query($con,$select);
						while ($fetch=mysqli_fetch_array($query)) {
							$srno = $srno +1;
							
							
							?>
                                <tr>
                                    <th > <?php echo $srno; ?></th>
                                    <td><?php echo $fetch["letfname"];?> </td>
                                    <td><?php echo $fetch["letphone"];?> </td>
                                    <td><?php echo $fetch["letemail"];?> </td>
                                    <td><?php echo $fetch["added_date"];?> </td>
                                    <td><a class="text-primary" style="text-decoration:none;list-style-type:none;" href="updatelets.php?id=<?php echo $fetch["letid"];?>">Edit</a> | <a class="text-danger" style="text-decoration:none;list-style-type:none;" href="deletelets.php?id=<?php echo $fetch["letid"];?>">Delete</a></td>
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
?>