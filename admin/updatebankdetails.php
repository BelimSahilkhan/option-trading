
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');
$id= $_GET["id"];
$select ="select * from tbl_bankdetails where id=$id";
$result=mysqli_query($con,$select);
$fetch = mysqli_fetch_assoc($result);

if(isset($_POST["updatebankdetails"]))
{

    date_default_timezone_set("Asia/Calcutta");
    $pname = $_POST["pname"];
    $uid = $_POST["upiid"];
    $pno = $_POST["pno"];
    $added_date = date("d/m/Y H:i:s");

    $update = "UPDATE `tbl_bankdetails` SET `payeename`='$pname',`upiid`='$uid',`phoneno`='$pno',`added_date`='$added_date' WHERE id= $id;";
    $result= mysqli_query($con,$update);
    if($result){

        echo "<script> 
        alert('Bank Info Updated')
        window.location='managebank.php';
        </script>";
        
    }
}

?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Manage Bank Details</h1> 
			<!-- <button class="btn btn-sm btn-primary"  ><a class="text-white" href="addbankdetails.php" style="text-decoration:none;list-style-type:none;">Add Bank Details</a></button> -->

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		
		<div class="report-body"> 
            
        <form method="post" class="border p-3">
                <div class="row">
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="pname" placeholder="Payee Name"  value="<?php echo $fetch['payeename']; ?> " required class="form-control">
                    </div>
                
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="upiid" placeholder="UPI ID" value="<?php echo $fetch['upiid']; ?> "  required class="form-control">
                </div>
                
                <div class="input-group mt-2">
                    <input type="text" name="pno" placeholder="Pay on Phone Number" value="<?php echo $fetch['phoneno']; ?> "  required class="form-control">
                </div>

                <div class="input-group text-center mt-2">
                    <input type="submit"  name="updatebankdetails" value="Update Bank Info" class="btn btn-md btn-primary border border-0">
                </div>

                </div>
            </form>

            </div>
        </div>
	</div>
</div>

<?php
require_once('./includes/footer.php');
?>