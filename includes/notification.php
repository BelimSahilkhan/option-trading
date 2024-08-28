<?php
// $sever="sql302.infinityfree.com";
// $user="if0_36898041";
// $pass="cLcBR0jBjy";
// $dbname="if0_36898041_optiontrading";
$sever="localhost";
$user="root";
$pass="";
$dbname="option_treading";
$con=mysqli_connect($sever,$user,$pass,$dbname);
if($con)
{
    // echo "connection successfully";
}
else 
{
    die(mysqli_error($con));
}

    $select = "select * from tbl_noti";
    $query = mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($query);


    $select1="select count(notiid) as noti_total from tbl_noti";
    $exe=mysqli_query($con,$select1);
    $fetch1=mysqli_fetch_array($exe);
    $notisum = $fetch1['noti_total'];
    if (!$notisum == 1) {
       echo "<div class='container'>
       <div class='row'>
           <strong class='text-danger'><marquee behavior='' direction='left'>Notification None</marquee></strong>
       </div>
   </div>";
    }else{
        echo "<div class='container'>
        <div class='row'>
            <strong class='text-danger'><marquee behavior='' direction='left'>". $fetch['notification'] ."</marquee></strong>
        </div>
        </div>";
    }
    




?>