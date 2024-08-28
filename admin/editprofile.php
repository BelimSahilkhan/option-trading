<?php
require_once('./config/config.php');
// session terminate after logout
if(isset($_SESSION["id"]))
{
require_once('./includes/navbar.php');

$id= $_SESSION["id"];
$select= "select * from tbl_admin where id=$id";
$result =mysqli_query($con,$select);
$fetch= mysqli_fetch_assoc($result);

if(isset($_POST["update"]))
{
    $username=$_POST["username"];

    $file_name = $_FILES['userpic']['name'];
    $file_size = $_FILES['userpic']['size'];
    $file_tmp = $_FILES['userpic']['tmp_name'];
    $file_type = $_FILES['userpic']['type'];
    $userimg= "images/userimg/". $file_name;
    $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    
    $email=$_POST["email"];
    
    // file type check condition
    if($imageFileType == "jpg" ||  $imageFileType == "jpeg" || $imageFileType == "png" ){
        
        move_uploaded_file($file_tmp, "images/userimg/" . $file_name);
        $update ="UPDATE `tbl_admin` SET `username`='$username',`userimg`='$userimg',`email`='$email' WHERE id='$id'";
        $query= mysqli_query($con,$update);
        if ($query) {
            echo "<script> 
            alert('Your Profile successfully Updated')
            window.location='dashboard.php';
            </script>";
        }
        
    }else {
        echo "<script>
            alert('may be allowed jpg and jpeg file type :)')
            window.location='editprofile.php';
            </script>";
    }
    
}
?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles ">Edit Profile</h1> 

			<!-- <button class="btn btn-md btn-primary"  ><a class="text-white" href="addnoti.php" style="text-decoration:none;list-style-type:none;">New Notification Add</a></button> -->
			 
		</div> 
<div class="report-body"> 

			
			<div class="container w-50">
				<div class="row" style="margin:;">


                <form method="post" class="border p-3" enctype="multipart/form-data">
                <div class="row">
               
                <div class="input-group mt-2">
                    <input type="text" name="username" placeholder="Username *" value="<?php echo $fetch['username'];?>" required class="form-control">
                </div>
                <div class="container text-center m-2">
                    <img src="<?php echo $fetch1['userimg'];?>" class="border rounded"  width="100px" height="90px" alt="dp"> 
                </div>

                <div class="input-group mt-2">
                    <input type="file" name="userpic" id="userimg"  required class="form-control">
                </div>
                <div class="input-group mt-2">
                    <input type="text" name="email" placeholder="Email *" value="<?php echo $fetch['email'];?>"  required class="form-control">
                </div>

                <div class="input-group text-center mt-2">
                    <input type="submit"  name="update" value="update" class="btn btn-md btn-primary border border-0">
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
