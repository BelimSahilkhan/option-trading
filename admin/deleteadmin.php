<?php

require_once('./config/config.php');
$id=$_GET["id"];
$delete = "delete from tbl_admin where id=$id";
$query = mysqli_query($con,$delete);
if($query)
{
    echo "<script> 
    alert('Your record  delete ..?')
    window.location='manageadmin.php';
    </script>";
}
?>