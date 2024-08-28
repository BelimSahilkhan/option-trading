<?php 
session_start();
// $sever="sql302.infinityfree.com";
// $user="if0_36898041";
// $user="cLcBR0jBjy";
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

?>