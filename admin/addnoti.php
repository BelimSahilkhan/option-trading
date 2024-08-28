

<?php
require_once('./includes/navbar.php');
require_once('./config/config.php');
$select="select count(notiid) as noti_total from tbl_noti";
$exe=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($exe);
$notisum = $fetch['noti_total'];

if(!$notisum == 1){
    if(isset($_POST ["addnoti"])){
        date_default_timezone_set("Asia/Calcutta");
        $noti = $_POST["noti"];
        $added_date = date("d/m/Y H:i:s");
    
        $insert = "insert into tbl_noti(notification,added_date) values('$noti','$added_date')";
        $query = mysqli_query($con,$insert);
        if($query){
            echo "<script>
            alert('Notification has been  Successfully added')
            window.location='managenoti.php';
            </script>";
        }
    }
}else{
    echo "<script> 
    alert('alredy one notification added please delete notification after notification add.')
    window.location='managenoti.php';
    </script>";
}






?>
<div class="container">
	<div class="report-container m-5"> 
		<div class="report-header"> 
			<h1 class="recent-Articles">Add Notifications</h1> 
			<button class="view"  ><a class="text-white" href="managenoti.php" style="text-decoration:none;list-style-type:none;">Show Noti</a></button>
			 
		</div> 
		
		<div class="report-body"> 
			
			<div class="container">
				<div class="row" style="margin:auto;align-tiem:center;justify-content:center;">
					<div class="col-md-12 mt-2 border rounded p-3 m-3">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Notification</label>
                            <input type="text" class="form-control" name="noti" id="formGroupExampleInput" placeholder="Notification">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-md btn-primary" name="addnoti" value="Add Notification"
                        </div>
                    </form>
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>

<?php
require_once('./includes/navbar.php');
?>