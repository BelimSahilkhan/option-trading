
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');
$select = "select count(id) as total from tbl_bankdetails";
$query = mysqli_query($con,$select);
$fetch =mysqli_fetch_array($query);
$total = $fetch["total"];
if(!$total == 1)
{

    if(isset($_POST["addbankdetails"]))
    {
    
        date_default_timezone_set("Asia/Calcutta");
        $pname = $_POST["pname"];
        $uid = $_POST["upiid"];
        $pno = $_POST["pno"];
        $added_date = date("d/m/Y H:i:s");
    
        $insert= "insert into tbl_bankdetails(payeename,upiid,phoneno,added_date) values('$pname','$uid','$pno','$added_date')";
        $query=mysqli_query($con,$insert);
        if($query)
        {
            echo "<script> 
            alert('Bank Details Added')
            window.location='managebank.php';
            </script>";
        }
    }
}else
{
    echo "<script> 
    alert('alredy one record added please delete record after add.')
    window.location='managebank.php';
    </script>";
}

?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Add Bank Details</h1> 

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container w-50">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
               

                <form method="post" class="border p-3">
                <div class="row">
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="pname" placeholder="Payee Name"  required class="form-control">
                    </div>
                
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="upiid" placeholder="UPI ID"  required class="form-control">
                </div>
                
                <div class="input-group mt-2">
                    <input type="text" name="pno" placeholder="Pay on Phone Number"  required class="form-control">
                </div>

                <div class="input-group text-center mt-2">
                    <input type="submit"  name="addbankdetails" value="Add Bank Info" class="btn btn-md btn-primary border border-0">
                </div>

                </div>
            </form>


				</div>
			</div>
		</div> 
	</div>
</div>

<?php
require_once('./includes/footer.php');
?>