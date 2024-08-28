
<?php
require_once('./config/config.php');
$id1 = $_GET["id"];
$delete = "DELETE FROM `tbl_letstalk` WHERE letid = $id1";
$result = mysqli_query($con,$delete);
if($result){
    echo "<script> 
    alert('Your Data Deleted..?')
    window.location='managelets.php';
    </script>";
}

?>