
<?php
require_once('./config/config.php');
$id1 = $_GET["id"];
$delete = "DELETE FROM `tbl_noti` WHERE  notiid = $id1";
$result = mysqli_query($con,$delete);
if($result){
    echo "<script> 
    alert('Your Notification  delete ..?')
    window.location='managenoti.php';
    </script>";
}

?>