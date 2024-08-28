
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
			<h1 class="recent-Articles">Manage Bank Details</h1> 
			<button class="btn btn-sm btn-primary"  ><a class="text-white" href="addbankdetails.php" style="text-decoration:none;list-style-type:none;">Add Bank Details</a></button>

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		<?php
        $select1 = "select count(id) as total from tbl_bankdetails";
        $query1 = mysqli_query($con,$select1);
        $fetch1 =mysqli_fetch_array($query1);
        $total = $fetch1["total"];
        if(!$total == 1){
            ?>
    <div class="report-body"> 
        <div class="container px-4">
            <div class="row gx-5 m-3">
                <div class="col">
                <div class="p-4 border bg-light">Payee Name</div>
                </div>
                <div class="col">
                <div class="p-3 border bg-light"><strong class="text-primary" style="font-family:san-sarif;font-size:19px;">None</strong></div>
                </div>
            </div>
            <div class="row gx-5 m-3">
                <div class="col">
                <div class="p-4 border bg-light">UPI ID</div>
                </div>
                <div class="col">
                <div class="p-3 border bg-light"><strong class="text-primary" style="font-family:san-sarif;font-size:19px;">None</strong></div>
                </div>
            </div>
            <div class="row gx-5 m-3">
                <div class="col">
                <div class="p-4 border bg-light">Pay On Phone NO.</div>
                </div>
                <div class="col">
                <div class="p-3 border bg-light"><strong class="text-primary" style="font-family:san-sarif;font-size:19px;">None</strong></div>
                </div>
            </div>
            <div class="text-center">
                <a href="#"><button class="btn btn-md btn-success text-white">Update</button></a>
                <a href="#"><button class="btn btn-md btn-danger text-white">Delete</button></a>
            </div>
        </div>
    </div>
            <?php
        }else {
            ?>
		<div class="report-body"> 
        <div class="container px-4">
            <div class="row gx-5 m-3">
                <div class="col">
                <div class="p-4 border bg-light">Payee Name</div>
                </div>
                <div class="col">
                <div class="p-3 border bg-light"><strong class="text-primary" style="font-family:san-sarif;font-size:19px;"><?php echo $fetch["payeename"]?></strong></div>
                </div>
            </div>
            <div class="row gx-5 m-3">
                <div class="col">
                <div class="p-4 border bg-light">UPI ID</div>
                </div>
                <div class="col">
                <div class="p-3 border bg-light"><strong class="text-primary" style="font-family:san-sarif;font-size:19px;"><?php echo $fetch["upiid"]?></strong></div>
                </div>
            </div>
            <div class="row gx-5 m-3">
                <div class="col">
                <div class="p-4 border bg-light">Pay On Phone NO.</div>
                </div>
                <div class="col">
                <div class="p-3 border bg-light"><strong class="text-primary" style="font-family:san-sarif;font-size:19px;"><?php echo $fetch["phoneno"]?></strong></div>
                </div>
            </div>
            <div class="text-center">
                <a href="updatebankdetails.php?id=<?php echo $fetch['id'];?>"><button class="btn btn-md btn-success text-white">Update</button></a>
                <a href="deletebank.php?id=<?php echo $fetch['id'];?>"><button class="btn btn-md btn-danger text-white">Delete</button></a>
            </div>
        </div>
    </div>
    <?php
        }
        ?>
	</div>
</div>

<?php
require_once('./includes/footer.php');
?>