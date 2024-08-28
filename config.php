<?php
// $sever="sql302.infinityfree.com";
// $user="if0_36898041";
// $pass="cLcBR0jBjy";
// $dbname="if0_36898041_optiontrading";
$sever="localhost";
$user="root";
$pass="";
$dbname="option_treading";

$conn = mysqli_connect($sever,$user,$pass,$dbname);

if($conn)
{
    // echo "database successfully connected";
}else {
    die(mysqli_error($conn));
}
?>