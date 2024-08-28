
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');

?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Update Notifications</h1> 
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
					<?php

                    $id = $_GET['id'];
                    $update = "SELECT * FROM `tbl_noti` WHERE notiid=$id";
                    $query = mysqli_query($con,$update);
                    $fetch= mysqli_fetch_array($query);
                    
                    // update data code
                    if(isset($_POST["updatenoti"])){
                        date_default_timezone_set("Asia/Calcutta");
                        $newnoti = $_POST['newnoti'];
                        $added_date = date("d/m/Y H:i:s");
                        $updatedata = "UPDATE `tbl_noti` SET `notification` = '$newnoti',`added_date` = '$added_date' WHERE `tbl_noti`.`notiid` = $id";
                        $result = mysqli_query($con,$updatedata);
                        if ($result) {
                            echo "<script> 
                            alert('Your data has been successfully updated')
                            window.location='managenoti.php';
                            </script>";                        
                        }

                    }



                    ?>

                        <div class="container">
                            <div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
                                <div class="col-md-12 mt-2 border rounded p-3 m-3">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Notification</label>
                                        <input type="text" class="form-control" name="newnoti" value="<?php echo $fetch['notification'];?>" id="formGroupExampleInput" placeholder="Notification">
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-md btn-primary" name="updatenoti" value="Update Notification"
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