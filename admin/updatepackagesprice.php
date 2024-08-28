
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');

?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Update Package</h1> 
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
					<?php

                    $id = $_GET['id'];
                    $update = "SELECT * FROM `tbl_packages` WHERE pid=$id";
                    $query = mysqli_query($con,$update);
                    $fetch= mysqli_fetch_array($query);
                    
                    // update data code
                    if(isset($_POST["send"])){
                        date_default_timezone_set("Asia/Calcutta");
                        $pname = $_POST['pname'];
                        $pprice = $_POST['pprice'];
                        $added_date = date("d/m/Y H:i:s");
                        $updatedata = "UPDATE `tbl_packages` SET `pname` = '$pname',`pprice` = '$pprice',`added_date` = '$added_date' WHERE `tbl_packages`.`pid` = $id";
                        $result = mysqli_query($con,$updatedata);
                        if ($result) {
                            echo "<script> 
                            alert('Your Package has been successfully updated')
                            window.location='managepackageprice.php';
                            </script>";                        
                        }

                    }



                    ?>

                        <div class="container">
                            <div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
                                <div class="col-md-12 mt-2 border rounded p-3 m-3">
                                <form action="" method="post">
                                    <div class="input-group border border-2 p-3 m-3">
                                        <input type="text" class="form-control" name="pname" value="<?php echo $fetch['pname'];?>" placeholder="Enter Package Name" required>
                                    </div>
                                    <div class="input-group border border-2 p-3 m-3">
                                        <input type="text" class="form-control" name="pprice" value="<?php echo $fetch['pprice'];?>" placeholder="Enter Package Prce" required>
                                    </div>
                                    <div class="text-center  p-3">
                                        <input type="submit" class="btn btn-md btn-primary" name="send" value="Update Package">
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

				</div>
			</div>
		</div> 
	</div>
</div>

<?php
require_once('./includes/footer.php');
?>