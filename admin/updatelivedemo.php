
<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');
?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Live Demo Data</h1> 

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container w-75">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
               
                        
                    
					<?php
                        $ids = $_GET["id"];
						$select = "select * from  tbl_getlivedemo where getid = $ids";
						$query = mysqli_query($con,$select);
						$fetch=mysqli_fetch_array($query);


                    if(isset($_POST["update"])){
                        date_default_timezone_set("Asia/Calcutta");
                        $name = $_POST["uname"];
                        $ph = $_POST["phone"];
                        $mail = $_POST["email"];
                        $cName = $_POST["state-name"];
                        $seg_name = $_POST["segment-name"];
                        $inve_name = $_POST["investment-name"];
                        $added_date = date("d/m/Y H:i:s");

                        $update = "UPDATE `tbl_getlivedemo` SET `getusernmae`='$name',`getphone`='$ph',`getemail`='$mail',`getcname`='$cName',`getsegname`='$seg_name',`getinvename`='$inve_name',`added_date`='$added_date' WHERE getid= $ids;";
                        $result= mysqli_query($con,$update);
                        if($result){

                            echo "<script> 
                            alert('Your data successfully Updated')
                            window.location='managelivedemo.php';
                            </script>";
                            
                        }
                    }
                    ?>

                <form method="post" class="border p-3">
                <div class="row">
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="uname" placeholder="Surname *" value="<?php echo $fetch["getusernmae"]; ?>" required class="form-control">
                </div>
                
                <div class="form-group col-md-6 mt-2">
                    <input type="text" name="phone" placeholder="Phone *" value="<?php echo $fetch["getphone"];; ?>" required class="form-control">
                </div>
                
                <div class="input-group mt-2">
                    <input type="text" name="email" placeholder="Email *" value="<?php echo $fetch["getemail"]; ?>" required class="form-control">
                </div>

                <div class="form-group mt-2">
                     <select name="state-name" id="donation-name" class="form-control"  required>
                        <option value="<?php echo $fetch["getcname"] ?>" ><?php echo $fetch["getcname"]; ?></option>

                        <?php
                        $select1 = "select * from tbl_state";
                        $query1 = mysqli_query($con,$select1);
                        
                        while($fatch1=mysqli_fetch_array($query1)) {
                            
                        ?>
                            
                            <option value="<?php echo $fatch1["state_name"]; ?>"><?php echo $fatch1["state_name"]; ?></option>

                        <?php
                            }
                            ?>
                    </select>
                </div>
               
                <div class="form-group mt-2">
                <select name="segment-name" class="form-control"  required>
                        <option value="<?php echo $fetch["getsegname"]; ?>"><?php echo $fetch["getsegname"]; ?></option>
                        <option value="Equity Cash/Intraday">Equity Cash / Intraday</option>
                        <option value="Options (call/put)">Options (call / put)</option>
                        <option value="Futures">Futures </option>
                        <option value="Index">Index</option>
                    </select>
                </div>
                
                
                <div class="form-group mt-2">
                    <select name="investment-name"  class="form-control"  required>
                        <option value="<?php echo $fetch["getinvename"]; ?>"><?php echo $fetch["getinvename"]; ?></option>
                        <option value="above 50000">Above INR Rs 50000</option>
                        <option value="Above 1 lac">Above INR Rs 1 Lac</option>
                        <option value="Above 3 lac">Above INR 3 Lac</option>
                        <option value="Above 5 lac">Above INR 5 Lac</option>
                    </select>
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