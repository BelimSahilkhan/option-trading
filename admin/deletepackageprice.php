<?php
require_once('./config/config.php');
$id= $_GET["id"];
$delete = "DELETE FROM `tbl_packages` WHERE pid = $id";
$result = mysqli_query($con,$delete);
if($result){
    echo "<script> 
        alert('Package has been Deleted')
        window.location='managepackageprice.php';
        </script>"; 
}

?>