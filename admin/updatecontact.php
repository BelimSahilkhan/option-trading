
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');
$id= $_GET["id"];
$select ="select * from tbl_contact where con_id=$id";
$result=mysqli_query($con,$select);
$fetch = mysqli_fetch_assoc($result);

if(isset($_POST["updatecontact"]))
{

    date_default_timezone_set("Asia/Calcutta");
    $cname = $_POST["con_name"];
    $cph = $_POST["con_phone"];
    $cem = $_POST["con_email"];
    $cmsg = $_POST["con_msg"];
    $added_date = date("d/m/Y H:i:s");

    $update = "UPDATE `tbl_contact` SET `con_name`='$cname',`con_phone`='$cph',`con_email`='$cem',`con_msg`='$cmsg',`added_date`='$added_date' WHERE con_id=$id";
    $result= mysqli_query($con,$update);
    if($result){

        echo "<script> 
        alert('Contact Info Updated')
        window.location='managecontact.php';
        </script>";
        
    }
}

?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Update Contact Details</h1> 
			<!-- <button class="btn btn-sm btn-primary"  ><a class="text-white" href="addbankdetails.php" style="text-decoration:none;list-style-type:none;">Add Bank Details</a></button> -->

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		
		<div class="report-body"> 
            
        <form method="post" class="border p-3">
                <div class="row">
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="con_name"   value="<?php echo $fetch['con_name']; ?> " required class="form-control">
                    </div>
                
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="con_phone"  value="<?php echo $fetch['con_phone']; ?> "  required class="form-control">
                </div>
                
                <div class="input-group mt-2">
                    <input type="text" name="con_email" value="<?php echo $fetch['con_email']; ?> "  required class="form-control">
                </div>
                <div class="input-group mt-2">
                    <textarea type="text" name="con_msg"    required class="form-control"><?php echo $fetch['con_msg']; ?> </textarea>
                </div>

                <div class="input-group text-center mt-2">
                    <input type="submit"  name="updatecontact" value="Update Contact Info" class="btn btn-md btn-primary border border-0">
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