
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');
?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Let's Talk Data</h1> 

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container w-75">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
               
                        
                    
					<?php
                        $ids = $_GET["id"];
						$select = "select * from  tbl_letstalk where letid = $ids";
						$query = mysqli_query($con,$select);
						$fetch=mysqli_fetch_array($query);


                    if(isset($_POST["update"])){
                        date_default_timezone_set("Asia/Calcutta");
                        $fname = $_POST["fname"];
                        $ph = $_POST["phone"];
                        $mail = $_POST["email"];
                        $added_date = date("d/m/Y H:i:s");

                        $update = "UPDATE `tbl_letstalk` SET `letfname`='$fname',`letphone`='$ph',`letemail`='$mail',`added_date`='$added_date' WHERE letid= $ids";
                        $result= mysqli_query($con,$update);
                        if($result){

                            echo "<script> 
                            alert('Your data successfully Updated')
                            window.location='managelets.php';
                            </script>";
                            
                        }
                    }
                    ?>

                <form method="post" class="border p-3">
                <div class="row">
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="fname" placeholder="Surname *" value="<?php echo $fetch["letfname"]; ?>" required class="form-control">
                </div>
                
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="phone" placeholder="Phone *" value="<?php echo $fetch["letphone"];; ?>" required class="form-control">
                </div>
                
                <div class="input-group mt-2">
                    <input type="text" name="email" placeholder="Email *" value="<?php echo $fetch["letemail"]; ?>" required class="form-control">
                </div>

                <div class="input-group text-center mt-2">
                    <input type="submit"  name="update" value="Update Data" class="btn btn-lg btn-primary border border-0">
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