
<?php

require_once('./config/config.php');

// table notification total
$select="select count(notiid) as noti_total from tbl_noti";
$exe=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($exe);
$notisum = $fetch['noti_total'];
// table subscriber total 
$select1="select count(id) as total1 from tbl_subcriber";
$exe1=mysqli_query($con,$select1);
$fetch1=mysqli_fetch_array($exe1);
$subsum = $fetch1['total1'];
// table Let's tlak data total 
$select2="select count(letid) as total2 from tbl_letstalk";
$exe2=mysqli_query($con,$select2);
$fetch2=mysqli_fetch_array($exe2);
$letssum = $fetch2['total2'];
// table Get In touch data total 
$select3="select count(getid) as total3 from tbl_getlivedemo";
$exe3=mysqli_query($con,$select3);
$fetch3=mysqli_fetch_array($exe3);
$getsum = $fetch3['total3'];
// table bank details data total 
$select4="select count(id) as total4 from tbl_bankdetails";
$exe4=mysqli_query($con,$select4);
$fetch4=mysqli_fetch_array($exe4);
$banksum = $fetch4['total4'];
// table packages data total 
$select5="select count(pid) as total5 from tbl_packages";
$exe5=mysqli_query($con,$select5);
$fetch5=mysqli_fetch_array($exe5);
$packsum = $fetch5['total5'];
// table Contacts data total 
$select6="select count(con_id) as total6 from tbl_contact";
$exe6=mysqli_query($con,$select6);
$fetch6=mysqli_fetch_array($exe6);
$consum = $fetch6['total6'];



$bankst;
if($banksum == 1)
{
    $bankst="ON";
    
}else{
   $bankst="NONE";
   
}


?>
		<div class="main"> 

		<h2 class="text-dark mt-3">Wellcome to our Admin Panel...</h2>
		<hr class="w-25 text-dark">
		<div class="box-container" style="margin-top:60px;"> 
		<div class="container-fluid text-center">
			<div class="row text-center" style="margin:auto;">
				<div class="col-md-3 mt-5">
				<a href="managenoti.php" style="text-decoration:none;list-style-type:none;">
					
					<div class="box box1"> 
						<div class="text"> 
							<h2 class="topic-heading"><?php echo $notisum;?></h2> 
							<h2 class="topic">Notification</h2> 
						</div> 
						
						<i class="fa-solid fa-eye fa-2xl" style="color: #ffff;"></i> 
					</div> 
				</a>
				</div>

				<div class="col-md-3 mt-5">
					<a href="subscriber.php" style="text-decoration:none;list-style-type:none;">
					<div class="box box2"> 
						<div class="text"> 
							<h2 class="topic-heading"><?php echo $subsum; ?></h2> 
							<h2 class="topic">Subscribers</h2> 
						</div> 
						
					<i class="fa-regular fa-thumbs-up fa-2xl" style="color: #ffff;"></i> 
					</div> 
					</a>
				</div>

				<div class="col-md-3 mt-5">
					<a href="managelets.php" style="text-decoration:none;list-style-type:none;">
					<div class="box box3"> 
						<div class="text"> 
							<h2 class="topic-heading"><?php echo $letssum;?></h2> 
							<h2 class="topic">Lets Talk Data</h2> 
						</div> 
						
						<i class="fa-solid fa-database fa-2xl" style="color: #ffff;"></i> 
					</div> 
					</a>
			
				</div>

				<div class="col-md-3 mt-5">
					<a href="managelivedemo.php" style="text-decoration:none;list-style-type:none;">
					<div class="box box4"> 
						<div class="text"> 
							<h2 class="topic-heading"><?php echo $getsum;?></h2> 
							<h2 class="topic">Live Demo Data</h2> 
						</div> 

						<i class="fa-solid fa-database fa-2xl" style="color: #ffff;"></i>  
					</div> 
					</a>
				</div> 

				<div class="col-md-3 mt-5">
					<a href="managecontact.php" style="text-decoration:none;list-style-type:none;">
					<div class="box box4"> 
						<div class="text"> 
							<h2 class="topic-heading"><?php echo $consum;?></h2> 
							<h2 class="topic">Contact Us</h2> 
						</div> 

						<i class="fa-solid fa-address-book fa-2xl" style="color: #ffff;"></i> 
					</div> 
					</a>
				</div> 

				<div class="col-md-3 mt-5">
					<a href="managebank.php" style="text-decoration:none;list-style-type:none;">
					<div class="box box4"> 
						<div class="text"> 
							<h2 class="topic-heading"><?php echo $bankst;?></h2> 
							<h2 class="topic">Bank Details</h2> 
						</div> 

						<i class="fa-solid fa-building-columns fa-2xl" style="color: #ffff;"></i> 
					</div> 
					</a>
				</div> 

				<div class="col-md-3 mt-5">
					<a href="managepackageprice.php" style="text-decoration:none;list-style-type:none;">
					<div class="box box4"> 
						<div class="text"> 
							<h2 class="topic-heading"><?php echo $packsum;?></h2> 
							<h2 class="topic">Packages</h2> 
						</div> 

						<i class="fa-solid fa-cubes fa-2xl" style="color: #ffff;"></i> 
					</div> 
					</a>
				</div> 



				</div>
			</div>
		</div>

				
			
			
			
			
			
			
			

		
			
		</div> 
	</div> 
</div> 
