
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');

$select ="select * from tbl_bankdetails";
$result=mysqli_query($con,$select);
$fetch = mysqli_fetch_assoc($result);
?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Manage Subscriber</h1> 
			<!--<button class="btn btn-sm btn-primary"  ><a class="text-white" href="addbankdetails.php" style="text-decoration:none;list-style-type:none;">Add Bank Details</a></button>-->

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
	
           
		<div class="report-body"> 
       
        <div class="container">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                        <th scope="col">S No</th>
                        <th scope="col">Email </th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        
                    
					<?php
                        $srno=0;
						$select = "select * from tbl_subcriber";
						$query = mysqli_query($con,$select);
						while ($fetch=mysqli_fetch_array($query)) {
							$srno = $srno +1;
							
							
							?>
                                <tr>
                                    <th > <?php echo $srno; ?></th>
                                    <td><?php echo $fetch["subemail"];?> </td>
                                    <td><a class="text-danger" style="text-decoration:none;list-style-type:none;" href="deletesubscriber.php?id=<?php echo $fetch['id'];?>"><button class="btn btn-sm btn-danger">Delete</button></a></td>
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
</div>

<?php
require_once('./includes/footer.php');
?>