<?php
require_once('./config/config.php');
if(isset($_POST['admin_login']))
{
    $em = $_POST["email"];
    $pass = $_POST["pass"];
    $select = "select * from tbl_admin where email='$em' and password='$pass'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);
    $row=mysqli_num_rows($exe);
    if($row==1)
    {
        $_SESSION['id']=$fetch['id'];
        $_SESSION['username']=$fetch['username'];
        $_SESSION['email']=$fetch['email'];
        echo "<script>
        alert('You are Logged In successfully')
        window.location='dashboard.php';
        </script>";
    }
    else 
    {
        echo "<script>
        alert('Your email and password are Incorrect try again')
        window.location='index.php';
        </script>";

    }
}
?>