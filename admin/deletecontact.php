
<?php
require_once('./config/config.php');
$id = $_GET["id"];
$delete = "DELETE FROM `tbl_contact` WHERE con_id = $id";
$result = mysqli_query($con,$delete);
if($result){
    echo "<script> 
    alert('Your Data Deleted..?')
    window.location='managecontact.php';
    </script>";
}

?>