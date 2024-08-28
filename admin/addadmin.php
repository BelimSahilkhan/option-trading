<?php
require_once('./config/config.php');
// session terminate after logout
if(isset($_SESSION["id"]))
{
require_once('./includes/navbar.php');



if (isset($_POST["submit"])) {
    $username=$_POST["username"];

    $file_name = $_FILES['userpic']['name'];
    $file_size = $_FILES['userpic']['size'];
    $file_tmp = $_FILES['userpic']['tmp_name'];
    $file_type = $_FILES['userpic']['type'];
    $userimg= "images/userimg/". $file_name;
    $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $cpass=$_POST["cpassword"];
    
    // file type check condition
    if($imageFileType == "jpg" ||  $imageFileType == "jpeg" || $imageFileType == "png" ){
        
        
        // password match or not match condition
        if ($pass == $cpass) {

            move_uploaded_file($file_tmp, "images/userimg/" . $file_name);
            $insert= "INSERT INTO `tbl_admin`(`username`, `userimg`, `email`, `password`) VALUES ('$username','$userimg','$email','$pass')";
            $query=mysqli_query($con,$insert);
            if ($query) {   
                echo "<script>
                alert('admin is added.')
                window.location='dashboard.php';
                </script>";
            }
        }else {
            echo "<script>
            alert('your password and Confirm did not matched. :)')
            window.location='addadmin.php';
            </script>";
        }
    }else {
        echo "<script>
            alert('may be allowed jpg and jpeg file type :)')
            window.location='addadmin.php';
            </script>";
    }
    
    
}
?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles ">Add Admin</h1> 

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
<div class="report-body"> 
			
			<div class="container w-50">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
               



                <form method="post" class="border p-3" enctype="multipart/form-data">
                <div class="row">
               
                
                <div class="input-group mt-2">
                    <input type="text" name="username" placeholder="Username *"  required class="form-control">
                </div>
                <div class="input-group mt-2">
                    <input type="file" name="userpic" id="userimg" required class="form-control">
                </div>
                <div class="input-group mt-2">
                    <input type="text" name="email" placeholder="Email *"  required class="form-control">
                </div>
                </div>
                <div class="input-group mt-2">
                    <input type="text" name="password" placeholder="Password *"  required class="form-control">
                </div>
                <div class="input-group mt-2">
                    <input type="text" name="cpassword" id="cpass" placeholder="Confirm Password *"  required class="form-control">
                </div>

               

                <div class="input-group text-center mt-2">
                    <input type="submit"  name="submit" value="submit" class="btn btn-md btn-primary border border-0">
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
}else{
    echo "<script> 
    window.location='index.php';
    </script>";
}
?>
