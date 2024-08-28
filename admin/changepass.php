<?php
require_once('./config/config.php');
// session terminate after logout
if(isset($_SESSION["id"]))
{
require_once('./includes/navbar.php');
?>

<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Change Password</h1> 
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
					<?php

                    $id = $_SESSION['id'];
                    $update = "SELECT * FROM `tbl_admin` WHERE id=$id";
                    $query = mysqli_query($con,$update);
                    $fetch= mysqli_fetch_array($query);
                    
                    // update data code
                    if(isset($_POST["changepass"])){
                        $oldpass=$_POST["oldpass"];
                        $newpass=$_POST["newpass"];
                        $cpass=$_POST["cpass"];

                        // check a old password 
                        if($oldpass == $fetch["password"]){
                        
                            // check password and confirm password match
                            if ($newpass == $cpass) {

                                $update ="UPDATE `tbl_admin` SET `password`='$newpass' WHERE id='$id'";
                                $query= mysqli_query($con,$update);
                                if ($query) {
                                    echo "<script> 
                                    alert('Your Password has been Changed.')
                                    window.location='dashboard.php';
                                    </script>";
                                }
                            }
                        }

                    }



                    ?>

                        <div class="container">
                            <div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
                                <div class="col-md-12 mt-2 border rounded p-3 m-3">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Old Password <i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" name="oldpass"  id="formGroupExampleInput" placeholder="Old Password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">New Password <i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" name="newpass"  id="formGroupExampleInput" placeholder="New Password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">confirm Password <i class="text-danger">*</i></label>
                                        <input type="text" class="form-control" name="cpass"  id="formGroupExampleInput" placeholder="confirm Password">
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-md btn-primary" name="changepass" value="Change Password"
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
}else{
    echo "<script> 
    window.location='index.php';
    </script>";
}
?>
