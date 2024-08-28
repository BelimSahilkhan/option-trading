<?php
require_once('./config/config.php');
// session terminate after logout
if(isset($_SESSION["id"]))
{
require_once('./includes/navbar.php');
require_once('./includes/content.php');
require_once('./includes/footer.php');
}else{
    echo "<script> 
    window.location='index.php';
    </script>";
}
?>