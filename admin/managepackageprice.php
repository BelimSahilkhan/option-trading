
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');    


?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Manage Package Price</h1> 
			<!-- <button class="btn btn-sm btn-primary"  ><a class="text-white" href="addbankdetails.php" style="text-decoration:none;list-style-type:none;">Add Bank Details</a></button> -->

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		
    <div class="report-body"> 
        <div class="container px-4">
            <div class="row gx-5 m-3">
<?php
$select ="select * from tbl_packages";
$result=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($result)) {
    ?>

    <div class="col-md-6 mt-3">
        <div class="float-end m-2">
            <a href="updatepackagesprice.php?id=<?php echo $fetch["pid"]; ?>" class="bi bi-pencil text-white bg-primary  p-1 rounded shadow"></a>
            <a href="deletepackageprice.php?id=<?php echo $fetch['pid'];?>" class="bi bi-trash text-white bg-danger p-1 rounded shadow"></a>
            </div>
            <div class="p-4 border bg-light text-center">
        <b style="font-width:bold;font-size:20px;"><?php echo $fetch["pname"];?></b>
        <p class="mt-2" style="font-width:bold;font-size:20px;"> Rs :<?php echo $fetch["pprice"]; ?> /-</p>
        <!-- <a href="updatepackagesprice.php?id=<?php echo $fetch["pid"]; ?>">Edit</a> -->
    </div>
    </div> 

<?php
}
?>

             

            </div>
            
           
            <div class="text-center mt-2">  
                <a href="addnewpackagesprice.php"><button class="btn btn-md btn-danger text-white">Add New Packages</button></a>
            </div>
        </div>
    </div>
           
	</div>
</div>

<?php
require_once('./includes/footer.php');
?>