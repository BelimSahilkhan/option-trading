
<?php
require_once('./config/config.php');
$id1 = $_GET["id"];
$delete = "DELETE FROM `tbl_subcriber` WHERE  id= $id1";
$result = mysqli_query($con,$delete);
if($result){
    echo "<script> 
    alert('Successfully deleted ..?')
    window.location='subscriber.php';
    </script>";
}

?>