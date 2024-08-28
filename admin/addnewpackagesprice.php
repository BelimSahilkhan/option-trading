
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');    

if(isset($_POST["send"]))
{
    date_default_timezone_set("Asia/Calcutta");
    $pname=$_POST["pname"];
    $pprice=$_POST["pprice"];
    $added_date=date("d/m/Y H:i:s");

    $insert="insert into tbl_packages(pname,pprice,added_date) value('$pname','$pprice','$added_date')";
    $query=mysqli_query($con,$insert);
    if ($query) {
        echo "<script>
        alert('Package is added')
        window.location='managepackageprice.php';
        </script>";
    }
}
?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Add Package Price</h1> 
			<!-- <button class="btn btn-sm btn-primary"  ><a class="text-white" href="addbankdetails.php" style="text-decoration:none;list-style-type:none;">Add Bank Details</a></button> -->

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		
    <div class="report-body"> 
        <div class="container px-4">
            <div class="row gx-5 m-3">
                <div class="col-md-10">
                    <div class="container">
                        <form action="" method="post">
                            <div class="input-group border border-2 p-3 m-3">
                                <input type="text" class="form-control" name="pname" placeholder="Enter Package Name">
                            </div>
                            <div class="input-group border border-2 p-3 m-3">
                                <input type="text" class="form-control" name="pprice" placeholder="Enter Package Prce">
                            </div>
                            <div class="text-center  p-3">
                                <input type="submit" class="btn btn-md btn-primary" name="send" value="Add Package">
                            </div>
                        </form>
                    </div>
                <!-- </div> -->
            </div>
	    </div>
    </div>

<?php
require_once('./includes/footer.php');
?>